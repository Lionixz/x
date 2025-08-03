<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
includeAndCache('../includes/head.php');
?>

<body>
    <?php includeAndCache('../includes/sidebar.php'); ?>
    <main>
        <div class="container">
            <?php
            $conn = require_once __DIR__ . '/../config/db.php';
            if (!$conn) die("Database connection failed.");
            
            // Validate submitted questions
            if (empty($_POST['questions']) || !is_array($_POST['questions'])) 
                die("No answers submitted.");
            
            $categories = ['verbal'];
            $categoryResults = [
                'verbal' => ['score' => 0, 'total' => 0, 'correct' => [], 'wrong' => []]
            ];
            
            // Process submitted answers
            foreach ($_POST['questions'] as $q) {
                if (empty($q['id']) || empty($q['table'])) continue;
                
                $questionId = (int)$q['id'];
                $userAnswer = $q['answer'] ?? null;
                $table = preg_replace('/[^a-zA-Z0-9_]/', '', $q['table']);
                
                $stmt = $conn->prepare("SELECT category, question, correct_answer, explanation FROM `$table` WHERE id = ?");
                $stmt->bind_param("i", $questionId);
                $stmt->execute();
                $stmt->bind_result($category, $question, $correctAnswer, $explanation);
                
                if ($stmt->fetch()) {
                    $category = 'verbal'; // Simplify category handling
                    
                    $categoryResults[$category]['total']++;
                    $isCorrect = ($userAnswer === $correctAnswer);
                    
                    if ($isCorrect) {
                        $categoryResults[$category]['score']++;
                        $categoryResults[$category]['correct'][] = compact(
                            'questionId', 'question', 'correctAnswer', 'userAnswer'
                        );
                    } else {
                        $categoryResults[$category]['wrong'][] = compact(
                            'questionId', 'question', 'correctAnswer', 'userAnswer', 'explanation'
                        );
                    }
                }
                $stmt->close();
            }
            
            // Simplified answer rendering
            function renderAnswer($answer) {
                if ($answer === null) 
                    return '<em style="color: gray;">(Not Answered)</em>';
                return htmlspecialchars($answer);
            }
            
            // Display summary
            echo "<h2>Exam Summary</h2>";
            $totalScore = 0;
            $totalQuestions = 0;
            
            foreach ($categories as $category) {
                $data = $categoryResults[$category];
                $percentage = $data['total'] ? round(($data['score'] / $data['total']) * 100, 2) : 0;
                
                echo "<p><strong>" . ucfirst($category) . ":</strong> 
                     {$data['score']}/{$data['total']} ($percentage%)</p>";
                
                $totalScore += $data['score'];
                $totalQuestions += $data['total'];
            }
            
            $totalPercentage = $totalQuestions ? round(($totalScore / $totalQuestions) * 100, 2) : 0;
            echo "<p><strong>Total:</strong> $totalScore/$totalQuestions ($totalPercentage%)</p>";
            
            // Display detailed results
            foreach ($categories as $category) {
                $data = $categoryResults[$category];
                $percentage = $data['total'] ? round(($data['score'] / $data['total']) * 100, 2) : 0;
                
                echo "<h2>" . ucfirst($category) . " Results</h2>
                      <p>Score: {$data['score']}/{$data['total']} ($percentage%)</p>";
                
                // Wrong answers
                echo "<h3>Wrong Answers</h3>";
                if (!empty($data['wrong'])) {
                    foreach ($data['wrong'] as $r) {
                        echo "<div>
                                <p><strong>Question:</strong> " . htmlspecialchars($r['question']) . "</p>
                                <p><strong>Your answer:</strong> " . renderAnswer($r['userAnswer']) . "</p>
                                <p><strong>Correct answer:</strong> " . renderAnswer($r['correctAnswer']) . "</p>
                                <p><strong>Explanation:</strong> " . htmlspecialchars($r['explanation']) . "</p>
                              </div><hr>";
                    }
                } else {
                    echo "<p>No wrong answers. Great job!</p>";
                }
                
                // Correct answers
                echo "<h3>Correct Answers</h3>";
                if (!empty($data['correct'])) {
                    foreach ($data['correct'] as $r) {
                        echo "<div>
                                <p><strong>Question:</strong> " . htmlspecialchars($r['question']) . "</p>
                                <p><strong>Your answer:</strong> " . renderAnswer($r['userAnswer']) . "</p>
                              </div><hr>";
                    }
                } else {
                    echo "<p>No correct answers.</p>";
                }
            }
            ?>
        </div>
    </main>
    <?php includeAndCache('../includes/footer.php'); ?>
</body>
</html>

