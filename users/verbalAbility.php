<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
$conn = require_once __DIR__ . '/../config/db.php';
include('premium_content.php');
?>

<?php
// Example function to use credits
function useCredits($user_id, $credits_used, $description, $reference_id = null) {
    $mysqli = require __DIR__ . '/../config/db.php';
    
    // Start transaction
    $mysqli->begin_transaction();
    
    try {
        // Deduct credits
        $stmt = $mysqli->prepare("UPDATE users SET user_credit = user_credit - ? WHERE id = ? AND user_credit >= ?");
        $stmt->bind_param('did', $credits_used, $user_id, $credits_used);
        $stmt->execute();
        
        if ($stmt->affected_rows === 0) {
            throw new Exception('Insufficient credits');
        }
        
        // Record usage
        $usage_stmt = $mysqli->prepare("INSERT INTO used_credits 
            (user_id, credits_used, description, reference_id) 
            VALUES (?, ?, ?, ?)");
        $usage_stmt->bind_param('idss', $user_id, $credits_used, $description, $reference_id);
        $usage_stmt->execute();
        $usage_stmt->close();
        
        $mysqli->commit();
        return true;
        
    } catch (Exception $e) {
        $mysqli->rollback();
        error_log('Credit usage failed: ' . $e->getMessage());
        return false;
    }
}

?>

<!DOCTYPE html>
<html>
<?php includeAndCache('../includes/head.php'); ?>

<body>
    <?php includeAndCache('../includes/sidebar.php'); ?>
    <main>
        <div class="container">
            <?php
            
            $verbal_limits = [
                'Word Meaning and Usage' => 20,
                'Grammar and Structure' => 20,
            ];
            
            function prepareQuestionRow($row, $source_table) {
                $choices = [
                    $row['correct_answer'],
                    $row['wrong_answer1'],
                    $row['wrong_answer2'],
                    $row['wrong_answer3']
                ];
                shuffle($choices);
                $row['source_table'] = $source_table;
                $row['shuffled_choices'] = $choices;
                return $row;
            }
            
            function fetchQuestionsByCategory($conn, $table, $category_limits) {
                $questions = [];
                foreach ($category_limits as $category => $limit) {
                    $typeStmt = $conn->prepare("SELECT DISTINCT type FROM $table WHERE category = ?");
                    $typeStmt->bind_param("s", $category);
                    $typeStmt->execute();
                    $typeResult = $typeStmt->get_result();
                    $types = [];
                    while ($row = $typeResult->fetch_assoc()) {
                        $types[] = $row['type'];
                    }
                    
                    $totalTypes = count($types);
                    if ($totalTypes === 0) continue;
                    
                    shuffle($types);
                    $selectedCount = 0;
                    $baseQuestionsPerType = intdiv($limit, $totalTypes);
                    $remainingQuestions = $limit - ($baseQuestionsPerType * $totalTypes);
                    
                    foreach ($types as $type) {
                        $questionsForThisType = $baseQuestionsPerType;
                        if ($remainingQuestions > 0) {
                            $questionsForThisType++;
                            $remainingQuestions--;
                        }
                        
                        $stmt = $conn->prepare("SELECT * FROM $table WHERE category = ? AND type = ? ORDER BY RAND() LIMIT ?");
                        $stmt->bind_param("ssi", $category, $type, $questionsForThisType);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        
                        while ($row = $result->fetch_assoc()) {
                            $questions[] = prepareQuestionRow($row, $table);
                            $selectedCount++;
                        }
                        
                        if ($selectedCount >= $limit) break;
                    }
                }
                return $questions;
            }
            
            $questions = array_merge(
                fetchQuestionsByCategory($conn, 'verbal', $verbal_limits)
            );
            ?>
            
            <form action="../actions/submit_verbalAbility.php" method="post" id="quizForm">
                <?php foreach ($questions as $index => $q): ?>
                    <div id="countdown">
                        <span id="timer"></span>
                    </div>
                    
                    <div class="card" data-index="<?= $index ?>" data-id="<?= $q['id'] ?>">
                        <h4 style="text-align: center;"><strong></strong> <?= htmlspecialchars($q['category']) ?></h4>
                        <p><strong></strong> <?= htmlspecialchars($q['type']) ?></p>
                        <p><strong>Q<?= $index + 1 ?>:</strong> <?= htmlspecialchars($q['question']) ?></p>
                        
                        <div class="radio-group">
                            <?php foreach ($q['shuffled_choices'] as $choice): ?>
                                <input type="hidden" name="questions[<?= $index ?>][id]" value="<?= $q['id'] ?>">
                                <input type="hidden" name="questions[<?= $index ?>][table]" value="<?= $q['source_table'] ?>">
                                
                                <label class="custom-radio" style="display: block; margin-bottom: 10px;">
                                    <input type="radio" name="questions[<?= $index ?>][answer]"
                                        value="<?= htmlspecialchars($choice) ?>" required>
                                    <span class="radio-mark"></span>
                                    <?= htmlspecialchars($choice) ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                
                <div class="navigation">
                    <button type="button" id="prevBtn">Previous</button>
                    <button type="button" id="nextBtn">Next</button>
                </div>
                
                <div style="text-align:center; margin-top:15px;">
                    <button type="submit" id="submitBtn" hidden aria-hidden="true" tabindex="-1"></button>
                </div>
            </form>

            <script>
                const cards = document.querySelectorAll('.card');
                const totalQuestions = cards.length;
                const nextBtn = document.getElementById('nextBtn');
                const prevBtn = document.getElementById('prevBtn');
                const submitBtn = document.getElementById('submitBtn');
                const quizForm = document.getElementById('quizForm');
                const timerDisplay = document.getElementById('timer');
                const answered = new Set();
                let currentCard = 0;
                let timeInSeconds = 10000;

                function updateTimerDisplay() {
                    const hours = Math.floor(timeInSeconds / 3600);
                    const minutes = Math.floor((timeInSeconds % 3600) / 60);
                    const seconds = timeInSeconds % 60;
                    timerDisplay.textContent = `${hours.toString().padStart(2, '0')}:${minutes
                        .toString()
                        .padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                }
                
                function startCountdown() {
                    updateTimerDisplay();
                    const countdown = setInterval(() => {
                        timeInSeconds--;
                        if (timeInSeconds <= 0) {
                            clearInterval(countdown);
                            alert("⏰ Time's up! Your quiz will now be submitted.");
                            quizForm.submit();
                        } else {
                            updateTimerDisplay();
                        }
                    }, 1000);
                }
                
                function updateCards() {
                    cards.forEach((card, index) => {
                        card.classList.toggle('active', index === currentCard && !answered.has(index));
                    });
                    
                    prevBtn.style.display = 'inline-block';
                    nextBtn.style.display = 'inline-block';
                    
                    if (answered.size === totalQuestions) {
                        quizForm.submit();
                    }
                }
                
                document.querySelectorAll('input[type="radio"]').forEach(input => {
                    input.addEventListener('change', function() {
                        const parentCard = input.closest('.card');
                        const index = parseInt(parentCard.dataset.index);
                        answered.add(index);
                        
                        let next = index + 1;
                        while (next < totalQuestions && answered.has(next)) next++;
                        currentCard = (next < totalQuestions) ? next : Math.max(0, index - 1);
                        updateCards();
                    });
                });
                
                nextBtn.addEventListener('click', () => {
                    let next = currentCard + 1;
                    while (next !== currentCard) {
                        if (next >= totalQuestions) next = 0;
                        if (!answered.has(next)) {
                            currentCard = next;
                            updateCards();
                            return;
                        }
                        next++;
                    }
                });
                
                prevBtn.addEventListener('click', () => {
                    let prev = currentCard - 1;
                    while (prev !== currentCard) {
                        if (prev < 0) prev = totalQuestions - 1;
                        if (!answered.has(prev)) {
                            currentCard = prev;
                            updateCards();
                            return;
                        }
                        prev--;
                    }
                });
                
                function findFirstUnanswered() {
                    for (let i = 0; i < totalQuestions; i++) {
                        if (!answered.has(i)) return i;
                    }
                    return 0;
                }
                
                currentCard = findFirstUnanswered();
                updateCards();
                startCountdown();
            </script>
        </div>
    </main>
    <?php includeAndCache('../includes/footer.php'); ?>
</body>
</html>