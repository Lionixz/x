<?php
include(__DIR__ . '/../middleware/checkSession.php');
include(__DIR__ . '/../cache/cache.php');
?>
<!DOCTYPE html>
<html>
<?php includeAndCache('../includes/submit_head.php'); ?>

<body>
    <?php includeAndCache('../includes/submit_sidebar.php'); ?>
    <main>
        <div class="container">
            <?php
            $conn = require_once __DIR__ . '/../config/db.php';
            if (!$conn) {
                die("Database connection failed.");
            }

            // Include Chart.js
            echo '<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';

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
                if (!isset($q['id'], $q['table'])) continue;

                $questionId = (int) $q['id'];
                $userAnswer = $q['answer'] ?? null;
                $table = $conn->real_escape_string($q['table']);

                if (!preg_match('/^[a-zA-Z0-9_]+$/', $table)) continue;

                $stmt = $conn->prepare("SELECT category, question, image, correct_answer, explanation, chart_data, sub_type FROM `$table` WHERE id = ?");
                if (!$stmt) {
                    die("Prepare failed: " . $conn->error);
                }

                $stmt->bind_param("i", $questionId);
                $stmt->execute();
                $stmt->bind_result($category, $question, $image, $correctAnswer, $explanation, $chart_data, $sub_type);

                if ($stmt->fetch()) {
                    // Decode JSON chart data
                    $chartDataArray = [];
                    if (!empty($chart_data)) {
                        $chartDataArray = json_decode($chart_data, true);
                        if (json_last_error() !== JSON_ERROR_NONE) {
                            $chartDataArray = []; // Handle invalid JSON
                        }
                    }

                    // Categorize questions
                    if (in_array($category, [
                        'Vocabulary and Meaning',
                        'Grammar and Structure',
                        'Sentence Usage and Construction',
                        'Language Mechanics',
                        'Collocations and Idioms',
                        'Semantic Relationships',
                        'Extended Context Application',
                    ])) {
                        $category = 'verbal';
                    } elseif (in_array($category, [
                        'Arithmetic Fundamentals',

                    ])) {
                        $category = 'numerical';
                    } elseif (in_array($category, ['Data Interpretation', 'Logical Reasoning'])) {
                        $category = 'analytical';
                    } elseif (in_array($category, ['1987 Constitution'])) {
                        $category = 'general';
                    }

                    $categoryResults[$category]['total']++;
                    $isCorrect = ($userAnswer !== null && $userAnswer === $correctAnswer);

                    if ($isCorrect) {
                        $categoryResults[$category]['score']++;
                        $categoryResults[$category]['correct'][] = [
                            'questionId' => $questionId,
                            'question' => $question,
                            'image' => $image,
                            'chart_data' => $chartDataArray,
                            'sub_type' => $sub_type,
                            'correctAnswer' => $correctAnswer,
                            'userAnswer' => $userAnswer
                        ];
                    } else {
                        $categoryResults[$category]['wrong'][] = [
                            'questionId' => $questionId,
                            'question' => $question,
                            'image' => $image,
                            'chart_data' => $chartDataArray,
                            'sub_type' => $sub_type,
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
                    return '<em>(Not Answered)</em>';
                }
                $ext = strtolower(pathinfo($answer, PATHINFO_EXTENSION));
                $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp']);

                if ($isImage) {
                    return '<img src="../images/uploads/' . htmlspecialchars($answer) . '" alt="Image Answer">';
                }
                return htmlspecialchars($answer);
            }

            function renderChart($chart_data, $sub_type, $questionId)
            {
                if (empty($chart_data)) return '';

                $chartTypeMap = [
                    'bar' => 'bar',
                    'line' => 'line',
                    'pie' => 'pie',
                    'doughnut' => 'doughnut',
                    'radar' => 'radar',
                    'polarArea' => 'polarArea',
                    'scatter' => 'scatter',
                    'bubble' => 'bubble'
                ];

                $chartType = $chartTypeMap[$sub_type] ?? 'bar';

                $chartOptions = [
                    'responsive' => true,
                    'plugins' => [
                        'legend' => ['position' => 'top'],
                        'title' => [
                            'display' => true,
                            'text' => htmlspecialchars(ucfirst($sub_type) . ' Chart')
                        ]
                    ]
                ];

                // Special handling for bubble charts
                if ($chartType === 'bubble') {
                    if (isset($chart_data['datasets'])) {
                        foreach ($chart_data['datasets'] as &$dataset) {
                            if (isset($dataset['data']) && is_array($dataset['data'])) {
                                $dataset['data'] = array_map(function ($point) {
                                    return [
                                        'x' => $point['x'],
                                        'y' => $point['y'],
                                        'r' => $point['r']
                                    ];
                                }, $dataset['data']);
                            }
                        }
                    }
                }

                $containerClass = 'chart-container';
                if ($chartType === 'radar' || $chartType === 'polarArea') {
                    $containerClass .= ' radar-polar-container';
                }

                return '
                <div class="' . $containerClass . '">
                    <canvas id="chart-' . $questionId . '"></canvas>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        try {
                            const ctx = document.getElementById("chart-' . $questionId . '");
                            new Chart(ctx, {
                                type: "' . $chartType . '",
                                data: ' . json_encode($chart_data) . ',
                                options: ' . json_encode($chartOptions) . '
                            });
                        } catch (e) {
                            console.error("Chart error:", e);
                            const container = ctx.closest(".chart-container");
                            container.innerHTML = `<div class="chart-error">Chart failed to load: ${e.message}</div>`;
                        }
                    });
                </script>';
            }

            // Display exam summary
            $totalScore = 0;
            $totalQuestions = 0;
            foreach ($categoryResults as $category => $results) {
                $totalScore += $results['score'];
                $totalQuestions += $results['total'];
            }
            ?>


            <h2>Exam Results</h2>
            <div class="summary-card">
                <p><strong>Total Score:</strong> <?= $totalScore ?>/<?= $totalQuestions ?></p>
                <div class="progress-bar">
                    <div class="progress" style="width: <?= $totalQuestions > 0 ? ($totalScore / $totalQuestions) * 200 : 0 ?>px;"></div>
                </div>
            </div>

            <div class="category-results">
                <?php foreach ($categories as $category):
                    if (isset($categoryResults[$category])):
                        $categoryData = $categoryResults[$category];
                        $score = $categoryData['score'];
                        $total = $categoryData['total'];
                        $percentage = $total > 0 ? round(($score / $total) * 100, 2) : 0;
                ?>
                        <div class="category-card">
                            <p><strong><?= ucfirst($category) ?>:</strong> <?= $score ?> / <?= $total ?> (<?= $percentage ?>%)</p>
                        </div>
                <?php
                    endif;
                endforeach; ?>
            </div>


            <br>
            <br>
            <?php

            foreach ($categoryResults as $category => $results): ?>
                <div class="category-section">
                    <h3><?= ucfirst($category) ?> Section</h3>
                    <p>Score: <?= $results['score'] ?>/<?= $results['total'] ?></p>

                    <?php if (!empty($results['wrong'])): ?>
                        <h4>Incorrect Answers</h4>
                        <?php foreach ($results['wrong'] as $item): ?>
                            <div class="question-review incorrect">
                                <p><strong>Question:</strong> <?= htmlspecialchars($item['question']) ?></p>
                                <?php if ($item['image']): ?>
                                <?php endif; ?>
                                <?= ($item['image'] ? '<img src="../images/uploads/' . htmlspecialchars($item['image']) . '" alt="Question Image"><br>' : '') ?>
                                <?php if (!empty($item['chart_data']) && $item['sub_type']): ?>
                                    <?= renderChart($item['chart_data'], $item['sub_type'], $item['questionId']) ?>
                                <?php endif; ?>

                                <p><strong>Your answer:</strong> <?= renderAnswer($item['userAnswer']) ?></p>
                                <p><strong>Correct answer:</strong> <?= renderAnswer($item['correctAnswer']) ?></p>
                                <?php if ($item['explanation']): ?>
                                    <p><strong>Explanation:</strong> <?= htmlspecialchars($item['explanation']) ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if (!empty($results['correct'])): ?>
                        <h4>Correct Answers</h4>
                        <?php foreach ($results['correct'] as $item): ?>
                            <div class="question-review correct">
                                <p><strong>Question:</strong> <?= htmlspecialchars($item['question']) ?></p>
                                <?php if ($item['image']): ?>
                                    <?= ($item['image'] ? '<img src="../images/uploads/' . htmlspecialchars($item['image']) . '" alt="Question Image"><br>' : '') ?>
                                <?php endif; ?>

                                <?php if (!empty($item['chart_data']) && $item['sub_type']): ?>
                                    <?= renderChart($item['chart_data'], $item['sub_type'], $item['questionId']) ?>
                                <?php endif; ?>

                                <p><strong>Your answer:</strong> <?= renderAnswer($item['userAnswer']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php includeAndCache('../includes/footer.php'); ?>
</body>

</html>