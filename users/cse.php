<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
$conn = require_once __DIR__ . '/../config/db.php';
include('premium/cse_premium_content.php');
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
                    'Vocabulary and Meaning' => 20,
                    'Grammar and Structure' => 10,
                    'Usage in Sentences' => 10,
                    'Mechanics' => 10,
                    'Collocation and Idioms' => 10,
                    'Logic and Association' => 10,
                    'Contextual Thinking' => 10,
                ];

                $numerical_limits = [
                    'Foundations and Basics' => 2,
                    'Order of Operations' => 2,
                ];

                $analytical_limits = [
                    'Data Interpretation' => 10,
                    'Logical Reasoning' => 2,
                ];

                $general_limits = [
                    '1987 Constitution' => 5,
                    'Philippine History' => 2,
                ];

                function prepareQuestionRow($row, $source_table)
                {
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
                
                // function fetchQuestionsByCategory($conn, $table, $category_limits)
                // {
                //     $questions = [];
                
                //     foreach ($category_limits as $category => $limit) {
                //         // Get distinct types per category
                //         $typeStmt = $conn->prepare("SELECT DISTINCT type FROM $table WHERE category = ?");
                //         $typeStmt->bind_param("s", $category);
                //         $typeStmt->execute();
                //         $typeResult = $typeStmt->get_result();
                //         $types = [];
                //         while ($row = $typeResult->fetch_assoc()) {
                //             $types[] = $row['type'];
                //         }
                //         // Check if there are any distinct types
                //         $totalTypes = count($types);
                //         if ($totalTypes === 0) {
                //             // No types found, skip to the next category
                //             continue;
                //         }
                //         // Shuffle the types to randomize question fetching
                //         shuffle($types);
                        
                //         $selectedCount = 0;
                //         // Calculate base number of questions per type
                //         $baseQuestionsPerType = intdiv($limit, $totalTypes); // Equal distribution per type
                //         $remainingQuestions = $limit - ($baseQuestionsPerType * $totalTypes); // Remaining questions to be allocated
                //         // Select questions for each type
                //         foreach ($types as $type) {
                //             $questionsForThisType = $baseQuestionsPerType;
                //             // Distribute the remaining questions one per type
                //             if ($remainingQuestions > 0) {
                //                 $questionsForThisType++;
                //                 $remainingQuestions--;
                //             }
                            
                //             // Fetch the questions for this type
                //             // $stmt = $conn->prepare("SELECT * FROM $table WHERE category = ? AND type = ? ORDER BY RAND() LIMIT ?");

                //             $stmt = $conn->prepare("SELECT * FROM $table WHERE category = ? AND type = ? ORDER BY RAND() LIMIT ?");

                //             $stmt->bind_param("ssi", $category, $type, $questionsForThisType);
                //             $stmt->execute();
                //             $result = $stmt->get_result();
                //             while ($row = $result->fetch_assoc()) {
                //                 $questions[] = prepareQuestionRow($row, $table);
                //                 $selectedCount++;
                //             }
                //             // If we've selected enough questions, exit
                //             if ($selectedCount >= $limit) {
                //                 break;
                //             }
                //         }
                //     }
                //     return $questions;
                // }



                function fetchQuestionsByCategory($conn, $table, $category_limits) {
                $questions = [];
                
                foreach ($category_limits as $category => $limit) {
                    // Get distinct types for category
                    $typeStmt = $conn->prepare("SELECT DISTINCT type FROM $table WHERE category = ?");
                    $typeStmt->bind_param("s", $category);
                    $typeStmt->execute();
                    $typeResult = $typeStmt->get_result();
                    $types = [];
                    while ($row = $typeResult->fetch_assoc()) {
                        $types[] = $row['type'];
                    }
                    
                    if (count($types) === 0) continue;
                    shuffle($types); // Randomize type order
                    
                    // Allocate questions per type
                    $typeAllocations = [];
                    $basePerType = intdiv($limit, count($types));
                    $remaining = $limit % count($types);
                    
                    foreach ($types as $type) {
                        $alloc = $basePerType;
                        if ($remaining > 0) {
                            $alloc++;
                            $remaining--;
                        }
                        $typeAllocations[$type] = $alloc;
                    }

                    // Process each type
                    foreach ($typeAllocations as $type => $typeLimit) {
                        // Get distinct sub_types for type
                        $subStmt = $conn->prepare("SELECT DISTINCT sub_type FROM $table 
                                                WHERE category = ? AND type = ?");
                        $subStmt->bind_param("ss", $category, $type);
                        $subStmt->execute();
                        $subResult = $subStmt->get_result();
                        $subTypes = [];
                        while ($row = $subResult->fetch_assoc()) {
                            $subTypes[] = $row['sub_type'];
                        }
                        
                        if (count($subTypes) === 0) {
                            // No sub_types - fetch directly for type
                            $stmt = $conn->prepare("SELECT * FROM $table WHERE category = ? AND type = ? ORDER BY RAND() LIMIT ?");
                            $stmt->bind_param("ssi", $category, $type, $typeLimit);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()) {
                                $questions[] = prepareQuestionRow($row, $table);
                            }
                        } else {
                            shuffle($subTypes); // Randomize sub_type order
                            
                            // Allocate questions per sub_type
                            $basePerSub = intdiv($typeLimit, count($subTypes));
                            $remainingSub = $typeLimit % count($subTypes);
                            
                            foreach ($subTypes as $subType) {
                                $subLimit = $basePerSub;
                                if ($remainingSub > 0) {
                                    $subLimit++;
                                    $remainingSub--;
                                }
                                
                                // Fetch questions for specific sub_type
                                $stmt = $conn->prepare("SELECT * FROM $table WHERE category = ? AND type = ? AND sub_type = ? ORDER BY RAND() LIMIT ?");
                                $stmt->bind_param("sssi", $category, $type, $subType, $subLimit);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while ($row = $result->fetch_assoc()) {
                                    $questions[] = prepareQuestionRow($row, $table);
                                }
                            }
                        }
                    }
                }
                return $questions;
            }

                $questions = array_merge(
                    fetchQuestionsByCategory($conn, 'verbal', $verbal_limits),
                    fetchQuestionsByCategory($conn, 'analytical', $analytical_limits),
                    fetchQuestionsByCategory($conn, 'numerical', $numerical_limits),
                    fetchQuestionsByCategory($conn, 'general', $general_limits)
                );
            ?>

    



<div class="question-container">
        <form action="../actions/submit_csc.php" method="post" id="quizForm">
            <div id="countdown">
                <span id="timer"></span>
            </div>
            
            <?php foreach ($questions as $index => $q): ?>
                <div class="question-card" data-index="<?= $index ?>" data-id="<?= $q['id'] ?>">
                    <div class="question-card__header">
                        <div class="question-card__category">
                            <?= htmlspecialchars($q['category']) ?> / <?= htmlspecialchars($q['type']) ?> / <?= htmlspecialchars($q['sub_type']) ?> / <?= htmlspecialchars($q['word']) ?>
                        </div>
                    </div>

                    <div class="question-card__body">
                        
                        <div class="question-card__text">
                            <strong> Instruction:  </strong><?= htmlspecialchars($q['instruction']) ?>
                        </div>
                        
                         <div class="question-card__instruction">
                            Q<?= $index + 1 ?>: <?= htmlspecialchars($q['question']) ?>
                        </div>

                        <?php if (!empty($q['image'])): ?>
                            <div class="question-card__media">
                                <img src="../images/uploads/<?= htmlspecialchars($q['image']) ?>" alt="Question Image">
                            </div>
                        <?php endif; ?>
                        
                        <?php if (!empty($q['chart_data'])): ?>
                            <div class="question-card__chart">
                                <canvas id="chart<?= $index ?>"></canvas>
                            </div>
                            <script>
                                const chartData<?= $index ?> = <?= $q['chart_data'] ?>;
                                const ctx<?= $index ?> = document.getElementById('chart<?= $index ?>').getContext('2d');
                                const chartType<?= $index ?> = '<?= $q['type'] ?? 'bar' ?>';
                                new Chart(ctx<?= $index ?>, {
                                    type: chartType<?= $index ?>,
                                    data: chartData<?= $index ?>,
                                    options: {
                                        responsive: true,
                                        scales: (chartType<?= $index ?> === 'bar' || chartType<?= $index ?> === 'line') ? {
                                            y: { beginAtZero: true }
                                        } : {},
                                        interaction: { mode: null },
                                        plugins: {
                                            tooltip: { enabled: false },
                                            legend: { onClick: null }
                                        },
                                        events: []
                                    }
                                });
                            </script>
                        <?php endif; ?>
                    </div>

                    <div class="question-card__choices">
                        <?php foreach ($q['shuffled_choices'] as $choice): ?>
                            <input type="hidden" name="questions[<?= $index ?>][id]" value="<?= $q['id'] ?>">
                            <input type="hidden" name="questions[<?= $index ?>][table]" value="<?= $q['source_table'] ?>">
                            <?php
                                $ext = strtolower(pathinfo($choice, PATHINFO_EXTENSION));
                                $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp']);
                            ?>
                            <label class="question-card__choice">
                                <input type="radio" name="questions[<?= $index ?>][answer]"
                                    value="<?= htmlspecialchars($choice) ?>" required>
                                <span class="choice-indicator"></span>
                                <?php if ($isImage): ?>
                                    <img src="../images/uploads/<?= htmlspecialchars($choice) ?>" alt="Choice Image">
                                <?php else: ?>
                                    <span class="choice-text"><?= htmlspecialchars($choice) ?></span>
                                <?php endif; ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="question-navigation">
                <button type="button" id="prevBtn" class="nav-button">Previous</button>
                <button type="button" id="nextBtn" class="nav-button">Next</button>
            </div>
            
            <div class="submit-container">
                <button type="submit" id="submitBtn" hidden aria-hidden="true" tabindex="-1"></button>
            </div>
        </form>

        <script>
            const cards = document.querySelectorAll('.question-card');
            const totalQuestions = cards.length;
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            const submitBtn = document.getElementById('submitBtn');
            const quizForm = document.getElementById('quizForm');
            const timerDisplay = document.getElementById('timer');
            const answered = new Set();
            let currentCard = 0;

            // Countdown timer 
            let timeInSeconds = 11400;
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
                    if (index === currentCard && !answered.has(index)) {
                        card.classList.add('active');
                    } else {
                        card.classList.remove('active');
                    }
                });
                prevBtn.style.display = 'inline-block';
                nextBtn.style.display = 'inline-block';

                if (answered.size === totalQuestions) {
                    submitBtn.style.display = 'inline-block';
                    quizForm.submit();
                }
            }
            document.querySelectorAll('input[type="radio"]').forEach(input => {
                input.addEventListener('change', function () {
                    const parentCard = input.closest('.question-card');
                    const index = parseInt(parentCard.dataset.index);
                    answered.add(index);
                    parentCard.classList.remove('active');

                    let next = index + 1;
                    while (next < totalQuestions && answered.has(next)) next++;
                    if (next < totalQuestions) {
                        currentCard = next;
                    } else {
                        let prev = index - 1;
                        while (prev >= 0 && answered.has(prev)) prev--;
                        currentCard = prev >= 0 ? prev : 0;
                    }
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
                return -1;
            }
            currentCard = findFirstUnanswered();
            updateCards();
            startCountdown();
        </script>
</div>


</div>      
</main>
<?php includeAndCache('../includes/footer.php'); ?>









    


 