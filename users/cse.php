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

            <!-- orginal -->

            <?php
            // $verbal_limits = [
            //     'Vocabulary and Meaning' => 100,
            //     'Grammar and Structure' => 100,
            //     'Sentence Usage and Construction' => 100,
            //     'Language Mechanics' => 100,
            //     'Collocations and Idioms' => 100,
            //     'Semantic Relationships' => 100,
            //     'Extended Context Application' => 100,
            // ];

            // $numerical_limits = [
            //     'Foundations and Basics' => 2,
            //     'Order of Operations' => 2,
            // ];

            // $analytical_limits = [
            //     'Data Interpretation' => 100,
            //     'Logical Reasoning' => 2,
            // ];

            // $general_limits = [
            //     '1987 Constitution' => 5,
            //     'Philippine History' => 2,
            // ];


            // function prepareQuestionRow($row, $source_table)
            // {
            //     $choices = [
            //         $row['correct_answer'],
            //         $row['wrong_answer1'],
            //         $row['wrong_answer2'],
            //         $row['wrong_answer3']
            //     ];
            //     shuffle($choices);
            //     $row['source_table'] = $source_table;
            //     $row['shuffled_choices'] = $choices;
            //     return $row;
            // }

            // function fetchQuestionsByCategory($conn, $table, $category_limits)
            // {
            //     $questions = [];

            //     foreach ($category_limits as $category => $limit) {
            //         // Get distinct types for category
            //         $typeStmt = $conn->prepare("SELECT DISTINCT type FROM $table WHERE category = ?");
            //         $typeStmt->bind_param("s", $category);
            //         $typeStmt->execute();
            //         $typeResult = $typeStmt->get_result();
            //         $types = [];
            //         while ($row = $typeResult->fetch_assoc()) {
            //             $types[] = $row['type'];
            //         }

            //         if (count($types) === 0) continue;
            //         shuffle($types); // Randomize type order

            //         // Allocate questions per type
            //         $typeAllocations = [];
            //         $basePerType = intdiv($limit, count($types));
            //         $remaining = $limit % count($types);

            //         foreach ($types as $type) {
            //             $alloc = $basePerType;
            //             if ($remaining > 0) {
            //                 $alloc++;
            //                 $remaining--;
            //             }
            //             $typeAllocations[$type] = $alloc;
            //         }

            //         // Process each type
            //         foreach ($typeAllocations as $type => $typeLimit) {
            //             // Get distinct sub_types for type
            //             $subStmt = $conn->prepare("SELECT DISTINCT sub_type FROM $table WHERE category = ? AND type = ?");
            //             $subStmt->bind_param("ss", $category, $type);
            //             $subStmt->execute();
            //             $subResult = $subStmt->get_result();
            //             $subTypes = [];
            //             while ($row = $subResult->fetch_assoc()) {
            //                 $subTypes[] = $row['sub_type'];
            //             }

            //             if (count($subTypes) === 0) {
            //                 // No sub_types - fetch directly for type
            //                 $stmt = $conn->prepare("SELECT * FROM $table WHERE category = ? AND type = ? ORDER BY RAND() LIMIT ?");
            //                 $stmt->bind_param("ssi", $category, $type, $typeLimit);
            //                 $stmt->execute();
            //                 $result = $stmt->get_result();
            //                 while ($row = $result->fetch_assoc()) {
            //                     $questions[] = prepareQuestionRow($row, $table);
            //                 }
            //             } else {
            //                 shuffle($subTypes); // Randomize sub_type order

            //                 // Allocate questions per sub_type
            //                 $basePerSub = intdiv($typeLimit, count($subTypes));
            //                 $remainingSub = $typeLimit % count($subTypes);

            //                 foreach ($subTypes as $subType) {
            //                     $subLimit = $basePerSub;
            //                     if ($remainingSub > 0) {
            //                         $subLimit++;
            //                         $remainingSub--;
            //                     }

            //                     // Fetch questions for specific sub_type
            //                     $stmt = $conn->prepare("SELECT * FROM $table WHERE category = ? AND type = ? AND sub_type = ? ORDER BY RAND() LIMIT ?");
            //                     $stmt->bind_param("sssi", $category, $type, $subType, $subLimit);
            //                     $stmt->execute();
            //                     $result = $stmt->get_result();
            //                     while ($row = $result->fetch_assoc()) {
            //                         $questions[] = prepareQuestionRow($row, $table);
            //                     }
            //                 }
            //             }
            //         }
            //     }
            //     return $questions;
            // }

            // $questions = array_merge(
            //     fetchQuestionsByCategory($conn, 'verbal', $verbal_limits),
            //     fetchQuestionsByCategory($conn, 'analytical', $analytical_limits),
            //     fetchQuestionsByCategory($conn, 'numerical', $numerical_limits),
            //     fetchQuestionsByCategory($conn, 'general', $general_limits)
            // );
            ?>


            <!-- updateted test -->
            <?php
            // $verbal_limits = [
            //     'Vocabulary and Meaning' => 20,
            //     'Grammar and Structure' => 20,
            //     'Sentence Usage and Construction' => 20,
            //     'Language Mechanics' => 100,
            //     'Collocations and Idioms' => 100,
            //     'Semantic Relationships' => 100,
            //     'Extended Context Application' => 100,
            // ];

            // $numerical_limits = [
            //     'Foundations and Basics' => 2,
            //     'Order of Operations' => 2,
            // ];

            // $analytical_limits = [
            //     'Data Interpretation' => 100,
            //     'Logical Reasoning' => 2,
            // ];

            // $general_limits = [
            //     '1987 Constitution' => 5,
            //     'Philippine History' => 2,
            // ];

            // function prepareQuestionRow($row, $source_table)
            // {
            //     $choices = [
            //         $row['correct_answer'],
            //         $row['wrong_answer1'],
            //         $row['wrong_answer2'],
            //         $row['wrong_answer3']
            //     ];
            //     shuffle($choices);
            //     $row['source_table'] = $source_table;
            //     $row['shuffled_choices'] = $choices;
            //     return $row;
            // }

            // function fetchQuestionsByCategory($conn, $table, $category_limits)
            // {
            //     $questions = [];

            //     foreach ($category_limits as $category => $limit) {
            //         $remaining = $limit;
            //         $takenIds = [];  // Track taken question IDs per category

            //         // Get distinct types for this category
            //         $typeStmt = $conn->prepare("SELECT DISTINCT type FROM $table WHERE category = ?");
            //         $typeStmt->bind_param("s", $category);
            //         $typeStmt->execute();
            //         $typeResult = $typeStmt->get_result();
            //         $types = [];
            //         while ($row = $typeResult->fetch_assoc()) {
            //             $types[] = $row['type'];
            //         }
            //         if (count($types) === 0) continue;

            //         // Process in rounds until limit met or no more questions
            //         while ($remaining > 0) {
            //             $roundProgress = false; // Flag to detect if we got questions this round
            //             shuffle($types); // Randomize type order each round

            //             foreach ($types as $type) {
            //                 if ($remaining <= 0) break;

            //                 $toTake = min(5, $remaining);

            //                 // Build query with taken ID exclusion
            //                 $query = "SELECT * FROM $table 
            //              WHERE category = ? 
            //              AND type = ?";
            //                 $params = [$category, $type];
            //                 $paramTypes = "ss";

            //                 if (!empty($takenIds)) {
            //                     $placeholders = implode(',', array_fill(0, count($takenIds), '?'));
            //                     $query .= " AND id NOT IN ($placeholders)";
            //                     $params = array_merge($params, $takenIds);
            //                     $paramTypes .= str_repeat('i', count($takenIds));
            //                 }

            //                 $query .= " ORDER BY RAND() LIMIT ?";
            //                 $params[] = $toTake;
            //                 $paramTypes .= 'i';

            //                 // Execute dynamic query
            //                 $stmt = $conn->prepare($query);
            //                 $stmt->bind_param($paramTypes, ...$params);
            //                 $stmt->execute();
            //                 $result = $stmt->get_result();

            //                 $countFetched = 0;
            //                 while ($row = $result->fetch_assoc()) {
            //                     $questions[] = prepareQuestionRow($row, $table);
            //                     $takenIds[] = $row['id']; // Record taken ID
            //                     $countFetched++;
            //                 }

            //                 $remaining -= $countFetched;
            //                 $roundProgress = $roundProgress || ($countFetched > 0);
            //             }

            //             // Break if no progress in this round
            //             if (!$roundProgress) break;
            //         }
            //     }
            //     return $questions;
            // }

            // $questions = array_merge(
            //     fetchQuestionsByCategory($conn, 'verbal', $verbal_limits),
            //     fetchQuestionsByCategory($conn, 'analytical', $analytical_limits),
            //     fetchQuestionsByCategory($conn, 'numerical', $numerical_limits),
            //     fetchQuestionsByCategory($conn, 'general', $general_limits)
            // );
            ?>




            <!-- this is correct -->
            <?php
            $verbal_limits = [
                'Vocabulary and Meaning' => 100,
                'Grammar and Structure' => 100,
                'Sentence Usage and Construction' => 100,
                'Language Mechanics' => 100,
                'Collocations and Idioms' => 100,
                'Semantic Relationships' => 100,
                'Extended Context Application' => 100,
            ];

            $numerical_limits = [
                'Foundations and Basics' => 2,
                'Order of Operations' => 2,
            ];

            $analytical_limits = [
                'Data Interpretation' => 100,
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

            function fetchQuestionsByCategory($conn, $table, $category_limits)
            {
                $questions = [];

                foreach ($category_limits as $category => $limit) {
                    // Get distinct types for this category
                    $typeStmt = $conn->prepare("SELECT DISTINCT type FROM $table WHERE category = ?");
                    $typeStmt->bind_param("s", $category);
                    $typeStmt->execute();
                    $typeResult = $typeStmt->get_result();
                    $types = [];
                    while ($row = $typeResult->fetch_assoc()) {
                        $types[] = $row['type'];
                    }
                    if (count($types) === 0) continue;

                    // Process types in random order
                    shuffle($types);
                    $remaining = $limit;
                    $processedTypes = [];  // Track processed types

                    foreach ($types as $type) {
                        if ($remaining <= 0) break;

                        // Get 5 questions or remaining limit
                        $toTake = min(5, $remaining);

                        $stmt = $conn->prepare("SELECT * FROM $table WHERE category = ? AND type = ? ORDER BY RAND() LIMIT ?");

                        $stmt->bind_param("ssi", $category, $type, $toTake);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        $countFetched = 0;
                        while ($row = $result->fetch_assoc()) {
                            $questions[] = prepareQuestionRow($row, $table);
                            $countFetched++;
                        }

                        $remaining -= $countFetched;
                        $processedTypes[] = $type;  // Mark type as processed

                        // Stop if limit reached
                        if ($remaining <= 0) break;
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
                                    <?= htmlspecialchars($q['category']) ?> / <?= htmlspecialchars($q['type']) ?> / <?= htmlspecialchars($q['sub_type']) ?>
                                </div>
                            </div>

                            <div class="question-card__body">

                                <div class="question-card__text">
                                    <strong> Instruction: </strong><?= htmlspecialchars($q['instruction']) ?>
                                </div>

                                <div class="question-card__instruction">
                                    <?= $index + 1 ?>: <?= htmlspecialchars($q['question']) ?>
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
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                } : {},
                                                interaction: {
                                                    mode: null
                                                },
                                                plugins: {
                                                    tooltip: {
                                                        enabled: false
                                                    },
                                                    legend: {
                                                        onClick: null
                                                    }
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
                        input.addEventListener('change', function() {
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