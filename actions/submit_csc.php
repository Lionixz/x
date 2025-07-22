<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
?>
<!DOCTYPE html>
<html>

</html>
<?php includeAndCache('../includes/head.php'); ?>

<body>
    <?php includeAndCache('../includes/sidebar.php'); ?>
    <main>
        <div class="container">
            <?php
            $conn = require_once __DIR__ . '/../config/db.php';
            if (!$conn) {
                die("Database connection failed.");
            }
            $categories = ['verbal', 'analytical', 'numerical', 'general'];
            $categoryResults = [
                'verbal' => ['score' => 0, 'total' => 0, 'correct' => [], 'wrong' => []],
                'analytical' => ['score' => 0, 'total' => 0, 'correct' => [], 'wrong' => []],
                'numerical' => ['score' => 0, 'total' => 0, 'correct' => [], 'wrong' => []],
                'general' => ['score' => 0, 'total' => 0, 'correct' => [], 'wrong' => []]
            ];
            if (!isset($_POST['questions']) || !is_array($_POST['questions'])) {
                die("No answers submitted.");
            }
            foreach ($_POST['questions'] as $q) {
                if (!isset($q['id'], $q['table']))
                    continue;
                $questionId = (int) $q['id'];
                $userAnswer = $q['answer'] ?? null;
                $table = $conn->real_escape_string($q['table']);
                if (!preg_match('/^[a-zA-Z0-9_]+$/', $table))
                    continue;
                $stmt = $conn->prepare("SELECT category, question, correct_answer, explanation FROM `$table` WHERE id = ?");
                if (!$stmt) {
                    die("Prepare failed: " . $conn->error);
                }
                $stmt->bind_param("i", $questionId);
                $stmt->execute();
                $stmt->bind_result($category, $question, $correctAnswer, $explanation);
                if ($stmt->fetch()) {
                    if (
                        in_array(
                            $category,
                            [
                                'Word Meaning and Usage',
                                'Grammar and Structure'

                            ]
                        )
                    ) {
                        $category = 'verbal';
                    } elseif (
                        in_array(
                            $category,
                            [
                                'Foundations and Basics',
                                'Order of Operations'
                            ]
                        )
                    ) {
                        $category = 'numerical';
                    } elseif (
                        in_array($category, [
                            'Data Interpretation',
                            'Logical Reasoning'
                        ])
                    ) {
                        $category = 'analytical';


                    } elseif (
                        in_array($category, [
                            '1987 Constitution'
                        ])
                    ) {
                        $category = 'general';

                    }
                    $categoryResults[$category]['total']++;
                    $isCorrect = ($userAnswer !== null && $userAnswer === $correctAnswer);
                    if ($isCorrect) {
                        $categoryResults[$category]['score']++;
                        $categoryResults[$category]['correct'][] = [
                            'questionId' => $questionId,
                            'question' => $question,
                            'correctAnswer' => $correctAnswer,
                            'userAnswer' => $userAnswer
                        ];
                    } else {
                        $categoryResults[$category]['wrong'][] = [
                            'questionId' => $questionId,
                            'question' => $question,
                            'correctAnswer' => $correctAnswer,
                            'userAnswer' => $userAnswer,
                            'explanation' => $explanation
                        ];
                    }

                }
                $stmt->close();
            }
            function renderAnswer($answer)
            {
                if ($answer === null) {
                    return '<em style="color: gray;">(Not Answered)</em>';
                }
                $ext = strtolower(pathinfo($answer, PATHINFO_EXTENSION));
                $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp']);

                if ($isImage) {
                    return '<img src="../images/uploads/' . htmlspecialchars($answer) . '" alt="Image Answer" style="max-width: 120px; height: auto;">';
                }
                return htmlspecialchars($answer);
            }
            echo "<h2>Exam Summary</h2>";
            $totalScore = 0;
            $totalQuestions = 0;
            foreach ($categories as $category) {
                $categoryData = $categoryResults[$category];
                $percentage = $categoryData['total'] > 0 ? round(($categoryData['score'] / $categoryData['total']) * 100, 2) : 0;
                echo "<p><strong>" . ucfirst($category) . ":</strong> {$categoryData['score']} / {$categoryData['total']} ({$percentage}%)</p>";
                $totalScore += $categoryData['score'];
                $totalQuestions += $categoryData['total'];
            }
            $totalPercentage = $totalQuestions > 0 ? round(($totalScore / $totalQuestions) * 100, 2) : 0;
            echo "<p><strong>Total:</strong> {$totalScore} / {$totalQuestions} ({$totalPercentage}%)</p>";
            foreach ($categories as $category) {
                $categoryData = $categoryResults[$category];
                $percentage = $categoryData['total'] > 0 ? round(($categoryData['score'] / $categoryData['total']) * 100, 2) : 0;
                echo "<h2>" . ucfirst($category) . " Results</h2>";
                echo "<p>Score: {$categoryData['score']} / {$categoryData['total']} ({$percentage}%)</p>";
                echo "<h3>Wrong Answers</h3>";
                if (!empty($categoryData['wrong'])) {
                    foreach ($categoryData['wrong'] as $r) {
                        echo "<div>
                        <p><strong>Question:</strong> " . htmlspecialchars($r['question']) . "</p>
                        <p><strong>Your answer: <br></strong>" . renderAnswer($r['userAnswer']) . "</p>
                        <p><strong>Correct answer: <br></strong>" . renderAnswer($r['correctAnswer']) . "</p>
                        <p><strong>Explanation:</strong> " . htmlspecialchars($r['explanation']) . "</p>
                      </div><hr>";
                    }
                } else {
                    echo "<p>No wrong answers. Great job!</p>";
                }
                echo "<h3>Correct Answers</h3>";
                if (!empty($categoryData['correct'])) {
                    foreach ($categoryData['correct'] as $r) {
                        echo "<div>
                        <p><strong>Question:</strong> " . htmlspecialchars($r['question']) . "</p>
                        <p><strong>Your answer: <br></strong>" . renderAnswer($r['userAnswer']) . "</p>
                      </div><hr>";
                    }
                } else {
                    echo "<p>No correct answers.</p>";
                }
            }
            function calculatePercentage($score, $total)
            {
                return ($total > 0) ? round(($score / $total) * 100, 2) : 0;
            }
            $categories = ['verbal', 'numerical', 'analytical', 'general'];
            $categoryPercentages = [];
            $totalScore = 0;
            $totalQuestions = 0;
            foreach ($categories as $category) {
                $categoryPercentages[$category] = calculatePercentage($categoryResults[$category]['score'], $categoryResults[$category]['total']);
                $totalScore += $categoryResults[$category]['score'];
                $totalQuestions += $categoryResults[$category]['total'];
            }
            $totalPercentage = calculatePercentage($totalScore, $totalQuestions);
            ?>
        </div>
    </main>
    <?php includeAndCache('../includes/footer.php'); ?>