<?php
include(__DIR__ . '/../middleware/checkSession.php');
include(__DIR__ . '/../cache/cache.php');
?>
<!DOCTYPE html>
<html>
<?php includeAndCache('../includes/submit_head.php'); ?>





<style>
    /* Container styles */
    .exam-summary,
    .category-summary,
    .category-section,
    .subtype-section,
    .answer-item {
        background-color: var(--card-bg);
        border: 1px solid var(--line-clr);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        color: var(--text-clr);
        transition: var(--transition);
    }

    /* Titles */
    .exam-summary h2 {
        color: var(--accent-clr);
        font-size: 28px;
        margin-bottom: 15px;
    }

    .category-title,
    .subtype-title {
        color: var(--accent-clr);
        font-size: 22px;
        margin-bottom: 10px;
    }

    .incorrect-title {
        color: var(--warning-clr);
        font-size: 18px;
        margin-top: 10px;
    }

    .correct-title {
        color: var(--success-clr);
        font-size: 18px;
        margin-top: 10px;
    }

    /* Score bars */
    .score-bar-container {
        background-color: var(--line-clr);
        border-radius: 6px;
        height: 20px;
        width: 200px;
        margin-top: 10px;
    }

    .score-bar {
        background-color: var(--accent-clr);
        height: 100%;
        border-radius: 6px 0 0 6px;
        transition: var(--transition);
    }

    /* Text */
    .total-score,
    .category-score,
    .category-score-detail,
    .explanation,
    p {
        font-size: 16px;
        margin: 5px 0;
        color: var(--text-clr);
    }

    .secondary-text {
        color: var(--secondary-text-clr);
    }

    /* Answer items */
    .answer-item {
        padding: 10px;
        border-radius: 6px;
    }

    .wrong-answer {
        border-left: 4px solid var(--warning-clr);
    }

    .correct-answer {
        border-left: 4px solid var(--success-clr);
    }

    /* Images */
    .question-image {
        max-width: 100%;
        margin: 10px 0;
        border-radius: 4px;
    }

    /* Hover effect */
    .exam-summary:hover,
    .category-section:hover,
    .subtype-section:hover,
    .answer-item:hover {
        background-color: var(--hover-clr);
    }
</style>









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
                'verbal' => ['score' => 0, 'total' => 0, 'sub_types' => []],
                'analytical' => ['score' => 0, 'total' => 0, 'sub_types' => []],
                'numerical' => ['score' => 0, 'total' => 0, 'sub_types' => []],
                'general' => ['score' => 0, 'total' => 0, 'sub_types' => []]
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
                        'Algebra',
                        'Basic Geometry',
                        'Word Problems',

                    ])) {
                        $category = 'numerical';
                    } elseif (in_array($category, [
                        'Data Interpretation',
                        'Logical Reasoning'
                    ])) {
                        $category = 'analytical';
                    } elseif (in_array($category, [
                        'The Constitution',
                        'Code of Conduct and Ethical Standards',
                        'Environmental Management and Protection',
                        'Peace and Human Rights',
                        'General Knowledge'
                    ])) {
                        $category = 'general';
                    }

                    $categoryResults[$category]['total']++;
                    $isCorrect = ($userAnswer !== null && $userAnswer === $correctAnswer);

                    if ($isCorrect) {
                        $categoryResults[$category]['score']++;
                    }

                    // Initialize sub-type if not exists
                    if (!isset($categoryResults[$category]['sub_types'][$sub_type])) {
                        $categoryResults[$category]['sub_types'][$sub_type] = [
                            'correct' => [],
                            'wrong' => []
                        ];
                    }

                    // Store question in sub-type category
                    $questionData = [
                        'questionId' => $questionId,
                        'question' => $question,
                        'image' => $image,
                        'chart_data' => $chartDataArray,
                        'sub_type' => $sub_type,
                        'correctAnswer' => $correctAnswer,
                        'userAnswer' => $userAnswer
                    ];

                    if ($isCorrect) {
                        $categoryResults[$category]['sub_types'][$sub_type]['correct'][] = $questionData;
                    } else {
                        $questionData['explanation'] = $explanation;
                        $categoryResults[$category]['sub_types'][$sub_type]['wrong'][] = $questionData;
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


            <div class="exam-summary">
                <h2>Exam Results</h2>
                <p class="total-score"><strong>Total Score:</strong> <?= $totalScore ?>/<?= $totalQuestions ?></p>
                <div class="score-bar-container">
                    <div class="score-bar" style="width: <?= $totalQuestions > 0 ? ($totalScore / $totalQuestions) * 200 : 0 ?>px;"></div>
                </div>
            </div>

            <div class="category-summary">
                <?php foreach ($categories as $category):
                    if (isset($categoryResults[$category])):
                        $categoryData = $categoryResults[$category];
                        $score = $categoryData['score'];
                        $total = $categoryData['total'];
                        $percentage = $total > 0 ? round(($score / $total) * 100, 2) : 0;
                ?>
                        <div class="category-score">
                            <p><strong><?= ucfirst($category) ?>:</strong> <?= $score ?> / <?= $total ?> (<?= $percentage ?>%)</p>
                        </div>
                <?php
                    endif;
                endforeach; ?>
            </div>

            <?php foreach ($categoryResults as $category => $results): ?>
                <?php if ($results['total'] > 0): ?>

                    <div class="category-section">
                        <h3 class="category-title"><?= ucfirst($category) ?> Section</h3>
                        <p class="category-score-detail">Score: <?= $results['score'] ?>/<?= $results['total'] ?></p>
                    </div>


                    <?php foreach ($results['sub_types'] as $sub_type => $typeData): ?>
                        <?php
                        $hasWrong = !empty($typeData['wrong']);
                        $hasCorrect = !empty($typeData['correct']);
                        ?>

                        <?php if ($hasWrong || $hasCorrect): ?>
                            <div class="subtype-section">
                                <h4 class="subtype-title"><?= htmlspecialchars($sub_type) ?></h4>

                                <?php if ($hasWrong): ?>
                                    <h5 class="incorrect-title">Incorrect Answers</h5>
                                    <?php foreach ($typeData['wrong'] as $item): ?>
                                        <div class="answer-item wrong-answer">
                                            <p><strong>Question:</strong> <?= htmlspecialchars($item['question']) ?></p>
                                            <?php if ($item['image']): ?>
                                                <img class="question-image" src="../images/uploads/<?= htmlspecialchars($item['image']) ?>" alt="Question Image"><br>
                                            <?php endif; ?>
                                            <?php if (!empty($item['chart_data']) && $item['sub_type']): ?>
                                                <?= renderChart($item['chart_data'], $item['sub_type'], $item['questionId']) ?>
                                            <?php endif; ?>

                                            <p><strong>Your answer:</strong> <?= renderAnswer($item['userAnswer']) ?></p>
                                            <p><strong>Correct answer:</strong> <?= renderAnswer($item['correctAnswer']) ?></p>
                                            <?php if (isset($item['explanation'])): ?>
                                                <p class="explanation"><strong>Explanation:</strong> <?= htmlspecialchars($item['explanation']) ?></p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <?php if ($hasCorrect): ?>
                                    <h5 class="correct-title">Correct Answers</h5>
                                    <?php foreach ($typeData['correct'] as $item): ?>
                                        <div class="answer-item correct-answer">
                                            <p><strong>Question:</strong> <?= htmlspecialchars($item['question']) ?></p>
                                            <?php if ($item['image']): ?>
                                                <img class="question-image" src="../images/uploads/<?= htmlspecialchars($item['image']) ?>" alt="Question Image"><br>
                                            <?php endif; ?>
                                            <?php if (!empty($item['chart_data']) && $item['sub_type']): ?>
                                                <?= renderChart($item['chart_data'], $item['sub_type'], $item['questionId']) ?>
                                            <?php endif; ?>

                                            <p><strong>Your answer:</strong> <?= renderAnswer($item['userAnswer']) ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>


        </div>
    </main>

    <?php includeAndCache('../includes/footer.php'); ?>
</body>

</html>