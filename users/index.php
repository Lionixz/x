<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
?>
<!DOCTYPE html>
<html>
<?php includeAndCache('../includes/head.php'); ?>

<style>
    :root {
        --deepseeker-blue: #0d1b2a;
        --deepseeker-dark: #1b263b;
        --deepseeker-mid: #415a77;
        --deepseeker-light: #778da9;
        --accent-blue: #5e63ff;
        --accent-purple: #7c4dff;
        --success: #00c896;
        --text-light: #e0e1dd;
        --text-gray: #a0a0c0;
        --line-clr: #2a2c3e;
    }


    .user-header {
        display: flex;
        align-items: center;
        border-bottom: 1px solid var(--line-clr);
        flex-wrap: wrap;
    }

    .user-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin-bottom: 10px;
        border: 3px solid var(--accent-blue);
        object-fit: cover;
        box-shadow: 0 5px 15px rgba(94, 99, 255, 0.3);
    }

    .user-info {
        flex: 1;
        min-width: 250px;
    }

    .user-name {
        font-size: 1.8rem;
        margin-bottom: 8px;
        color: var(--text-light);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .user-detail {
        color: var(--text-gray);
        font-size: 1rem;
        text-align: left;
        padding-left: 10px;
    }

    .user-detail strong {
        color: var(--text-light);
        min-width: 120px;
        display: inline-block;
        text-align: left;
    }




    .credit-balance {
        background: rgba(0, 200, 150, 0.1);
        border: 1px solid var(--success);
        border-radius: 12px;
        padding: 15px;
        margin-bottom: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .credit-balance span {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--success);
    }

    .credit-form {
        background: rgba(40, 41, 54, 0.4);
        border-radius: 12px;
        padding: 20px;
        border: 1px solid var(--line-clr);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--text-light);
    }

    .form-group input {
        width: 96%;
        padding: 14px;
        border-radius: 10px;
        border: 1px solid var(--line-clr);
        background: rgba(25, 26, 40, 0.8);
        color: var(--text-light);
        font-size: 1rem;
    }

    .form-group input:focus {
        outline: none;
        border-color: var(--accent-blue);
        box-shadow: 0 0 0 3px rgba(94, 99, 255, 0.3);
    }

    .credit-rate {
        background: rgba(94, 99, 255, 0.1);
        padding: 12px;
        border-radius: 8px;
        text-align: center;
        margin-bottom: 20px;
        font-weight: 600;
        color: var(--accent-blue);
        border: 1px solid rgba(94, 99, 255, 0.3);
    }

    .btn {
        width: 100%;
        padding: 16px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(90deg, var(--accent-blue), var(--accent-purple));
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 15px rgba(94, 99, 255, 0.3);
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(94, 99, 255, 0.5);
    }

    .content-section {
        margin: 30px 0;
    }

    .section-title {
        font-size: 1.6rem;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid var(--accent-blue);
        color: var(--text-light);
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .section-title i {
        color: var(--accent-blue);
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .feature-card {
        background: rgba(27, 38, 59, 0.6);
        border: 1px solid var(--line-clr);
        border-radius: 12px;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-blue);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .feature-title {
        font-size: 1.2rem;
        margin-bottom: 15px;
        color: var(--accent-blue);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .feature-title i {
        font-size: 1.1rem;
    }

    .feature-list {
        list-style-type: none;
    }

    .feature-list li {
        padding: 8px 0;
        padding-left: 30px;
        position: relative;
        color: var(--text-gray);
    }

    .feature-list li::before {
        content: "•";
        color: var(--accent-purple);
        font-size: 1.5rem;
        position: absolute;
        left: 10px;
        top: 2px;
    }

    .feature-list li.checked::before {
        content: "✓";
        color: var(--success);
        font-size: 1.1rem;
        top: 6px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        .user-header {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .user-info {
            width: 100%;
            padding-left: 10px;
        }

        .user-name {
            justify-content: center;
            margin-bottom: 20px;
        }

        .features-grid {
            grid-template-columns: 1fr;
        }


    }
</style>

<body>
    <?php includeAndCache('../includes/sidebar.php'); ?>
    <main>
        <div class="container">

            <div class="user-header">
                <img src="<?= htmlspecialchars($_SESSION['user_picture']) ?>" alt="User Picture"
                    alt="User Picture" class="user-avatar">
                <div class="user-info">
                    <h1 class="user-name"><i class="fas fa-user-circle"></i><?= htmlspecialchars($_SESSION['user_name']) ?></h1>
                    <p class="user-detail"><strong>Email:</strong>
                        <br><?= htmlspecialchars($_SESSION['user_email']) ?>
                    </p>
                    <p class="user-detail"><strong>Google ID:</strong>
                        <br><?= htmlspecialchars($_SESSION['user_id']) ?>
                    </p>
                </div>
            </div>


            <div class="credit-balance">
                <?php
                $mysqli = require '../config/db.php';
                $user_id = $_SESSION['db_user_id'];
                $sql = "SELECT user_credit FROM users WHERE id = ?";
                $stmt = $mysqli->prepare($sql);
                $stmt->bind_param('i', $user_id);
                $stmt->execute();
                $stmt->bind_result($user_credit);
                $stmt->fetch();
                echo "<span><strong>Credit Balance: </strong> " . number_format($user_credit, 2) . " </span>";
                $stmt->close();
                ?>
            </div>


            <div class="credit-form">
                <form action="premium/buy_credits.php" method="post">
                    <div class="form-group">
                        <label>Amount (PHP):</label>
                        <input type="number" name="amount" min="20" step="1" required
                            placeholder="Minimum ₱20">
                    </div>
                    <div class="credit-rate">
                        1 PHP = 1 credits
                    </div>

                    <button type="submit" class="btn">
                        <i class="fas fa-shopping-cart"></i> Purchase Credits
                    </button>
                </form>
            </div>


            <?php
            $mysqli = require __DIR__ . '/../config/db.php';

            // Combine all four tables using UNION to get distinct categories, types, and sub-types
            $sql = "
                        SELECT DISTINCT category, type, sub_type FROM general
                        UNION
                        SELECT DISTINCT category, type, sub_type FROM numerical
                        UNION
                        SELECT DISTINCT category, type, sub_type FROM analytical
                        UNION
                        SELECT DISTINCT category, type, sub_type FROM verbal
                        ORDER BY category ASC, type ASC, sub_type ASC
                    ";

            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                $current_category = null;
                $current_type = null;
                $open_div = false;

                while ($row = $result->fetch_assoc()) {
                    // Display Category heading
                    if ($current_category !== $row['category']) {
                        if ($open_div) {
                            echo "</div>"; // Close previous sub-type container
                            $open_div = false;
                        }
                        echo "<h2>{$row['category']}</h2><br>";
                        $current_category = $row['category'];
                        $current_type = null;
                    }

                    // Display Type heading
                    if ($current_type !== $row['type']) {
                        if ($open_div) {
                            echo "</div><br>"; // Close previous sub-type container
                        }
                        echo "<h3 style='margin-left:20px;'>{$row['type']}</h3>";
                        echo "<div style='margin-left:40px; display:flex; flex-wrap:wrap; gap:10px;'>"; // Start container
                        $current_type = $row['type'];
                        $open_div = true;
                    }

                    // Display Sub-type inline
                    if (!empty($row['sub_type'])) {
                        echo "<span style='display:inline-block; background:#5e63ff; padding:3px 8px; border-radius:4px;'>{$row['sub_type']}</span>";
                    }
                }

                if ($open_div) {
                    echo "</div>"; // Close last sub-type container
                }
            } else {
                echo "<p>No categories found in the question banks.</p>";
            }
            ?>







            <!-- <br>
            <h3>Vocabulary and Meaning</h3><br>
            <p>1. Definition &#10004;</p>
            <p>2. Synonym Identification &#10004;</p>
            <p>3. Antonym Identification &#10004;</p>
            <p>4. Contextual Meaning &#10004;</p>
            <p>5. Word Family &#10004;</p>
            <p>6. Affix Identification &#10004;</p>
            <p>7. Root Word Analysis &#10004;</p>
            <p>8. Word Intensity Scale &#10004;</p>
            <p>9. Field-Specific Meaning &#10004;</p>
            <p>10. Slang vs. Formal Usage &#10004;</p>


            <h3>Grammar and Structure</h3><br>
            <p>15. Part of Speech Identification &#10004;</p>
            <p>16. Verb Forms &#10004;</p>
            <p>17. Noun Forms &#10004;</p>
            <p>18. Adjective Forms &#10004;</p>
            <p>19. Adverb Forms &#10004;</p>
            <p>20. Plural Formation &#10004;</p>
            <p>21. Tense and Conjugation &#10004;</p><samp></samp>
            <p>22. Comparative/Superlative Forms &#10004;</p>
            <p>23. Subject-Verb Agreement &#10004;</p>

            <h3>Sentence Usage and Construction</h3><br>
            <p>24. Correct Usage in Sentences </p>
            <p>25. Sentence Correction </p>
            <p>26. Fill in the Blank (vocabulary/grammar) </p>
            <p>27. Sentence Transformation (active/passive, negative, rewriting) </p>
            <p>28. Word Order Accuracy </p>
            <p>29. Error Identification </p>

            <h3>Language Mechanics</h3><br>
            <p>30. Spelling Accuracy </p>
            <p>31. Capitalization Rules </p>
            <p>32. Punctuation Usage </p>
            <p>33. Homophone Differentiation (e.g., their/there/they're) </p>
            <p>34. Error-Free Sentence Identification </p>

            <h3>Collocations and Idioms</h3><br>
            <p>35. Collocation Recognition (e.g., "precise measurement") </p>
            <p>36. Idiomatic Expressions </p>
            <p>37. Natural Word Pairings (e.g., "bread and butter") </p>
            <p>38. Word-Collocate Matching </p>

            <h3>Semantic Relationships</h3><br>
            <p>39. Odd One Out Analysis </p>
            <p>40. Semantic Categorization (e.g., emotions/actions) </p>
            <p>41. Synonym Matching </p>
            <p>42. Antonym Matching </p>
            <p>43. Tone Appropriateness (formal vs. casual) </p>

            <h3>Extended Context Application</h3><br>
            <p>44. Paragraph-Level Word Selection </p>
            <br> -->






            <h3>Algebra</h3>
            <br>
            <h5>Linear Equations</h5>
            <p>Single-Variable Solutions, Age/Money Word Problems</p>
            <ul>
                <li>Solving single-variable equations</li>
                <li>Word problems involving sums, differences, and products</li>
                <li>Age-related problems</li>
                <li>Money and budget problems</li>
                <li>Mixture and concentration problems (single equation)</li>
                <li>Checking solutions by substitution</li>
                <li>Using equations to model real-world situations</li>
            </ul>
            <br>

            <h5>Inequalities</h5>
            <p>Number Line Solutions, Practical Constraints</p>
            <ul>
                <li>Solving linear inequalities in one variable</li>
                <li>Graphing inequalities on a number line</li>
                <li>Translating word problems into inequalities</li>
                <li>Understanding inequality symbols (\(<\), \(>\), \(\le\), \(\ge\))</li>
                <li>Applying inequalities in budgeting and resource limits</li>
                <li>Testing solutions for inequalities</li>
            </ul>
            <br>

            <h5>Systems of Equations</h5>
            <p>Substitution/Elimination, Mixture/Allocation Problems</p>
            <ul>
                <li>Solving systems by substitution</li>
                <li>Solving systems by elimination</li>
                <li>Graphical solutions to systems</li>
                <li>Word problems on mixtures</li>
                <li>Word problems on allocation/distribution</li>
                <li>Determining if a system has one, none, or infinitely many solutions</li>
            </ul>
            <br>

            <h5>Exponents & Radicals</h5>
            <p>Basic Operations, Scientific Notation</p>
            <ul>
                <li>Applying laws of exponents</li>
                <li>Simplifying exponential expressions</li>
                <li>Converting numbers to and from scientific notation</li>
                <li>Multiplying/dividing in scientific notation</li>
                <li>Adding/subtracting in scientific notation</li>
                <li>Simplifying radicals (square roots, cube roots)</li>
                <li>Operations with radical expressions</li>
            </ul>
            <br>
            <h5>Quadratic Equations</h5>
            <p>Factoring, Quadratic Formula</p>
            <ul>
                <li>Factoring quadratic expressions</li>
                <li>Solving by factoring</li>
                <li>Completing the square</li>
                <li>Using the quadratic formula</li>
                <li>Word problems leading to quadratic equations</li>
                <li>Graphing parabolas and identifying key features</li>
            </ul>
            <br>


            <h3>Basic Geometry</h3>
            <br>
            <h5>Area/Perimeter</h5>
            <p>Squares/Rectangles/Circles</p>
            <ul>
                <li>Calculating perimeter of basic shapes</li>
                <li>Finding area of squares, rectangles, and circles</li>
                <li>Solving word problems on perimeter and area</li>
                <li>Converting between units of length and area</li>
            </ul>

            <br>
            <h5>Volume</h5>
            <p>Cubes/Cylinders</p>
            <ul>
                <li>Finding volume of cubes and cuboids</li>
                <li>Finding volume of cylinders</li>
                <li>Unit conversions for volume</li>
                <li>Practical applications of volume</li>
            </ul>

            <br>
            <h5>Angles</h5>
            <p>Triangle Properties</p>
            <ul>
                <li>Calculating angles in a triangle</li>
                <li>Understanding types of triangles</li>
                <li>Applying the sum of angles property</li>
                <li>Finding unknown angles using properties of isosceles and equilateral triangles</li>
            </ul>

            <br>
            <h3>Word Problems</h3>

            <h5>Quantitative Reasoning</h5>
            <p>Multi-Step Arithmetic, Logical Deduction</p>
            <ul>
                <li>Solving multi-step word problems</li>
                <li>Applying logic to numerical situations</li>
                <li>Combining different arithmetic operations</li>
                <li>Analyzing and breaking down complex problems</li>
            </ul>

            <br>
            <h5>Real-Life Scenarios</h5>
            <p>Budgeting/Cost Analysis, Resource Allocation</p>
            <ul>
                <li>Creating and adjusting budgets</li>
                <li>Comparing costs and finding the best value</li>
                <li>Allocating resources efficiently</li>
                <li>Applying arithmetic in household and business situations</li>
            </ul>







            <?php
            // $mysqli = require '../config/db.php';
            // $tables = ['verbal', 'numerical', 'analytical', 'general'];

            // foreach ($tables as $table) {
            //     echo "<h2>Table: $table</h2>";
            //     $result = $mysqli->query("SELECT * FROM $table");
            //     if ($result->num_rows > 0) {
            //         while ($row = $result->fetch_assoc()) {
            //             echo "<div style='border:1px solid #ccc; padding:10px;'>";
            //             $fields = [
            //                 'Category' => 'category',
            //                 'Type' => 'type',
            //                 'Sub Type' => 'sub_type',
            //                 'Instruction' => 'instruction',
            //                 'Word' => 'word',
            //                 'Question' => 'question',
            //                 'Correct Answer' => 'correct_answer',
            //                 'Explanation' => 'explanation'
            //             ];
            //             foreach ($fields as $label => $key) {
            //                 if (!empty($row[$key])) {
            //                     echo "<p><strong>$label:</strong> " . $row[$key] . "</p>";
            //                 }
            //             }
            //             echo "<p><strong>Wrong Answers:</strong> " . implode(', ', array_filter([$row['wrong_answer1'] ?? '', $row['wrong_answer2'] ?? '', $row['wrong_answer3'] ?? ''])) . "</p>";
            //             if (!empty($row['image'])) {
            //                 echo "<p><strong>Image:</strong> <img src='{$row['image']}' alt='image' style='max-width:200px;'></p>";
            //             }
            //             if (!empty($row['chart_data'])) {
            //                 echo "<p><strong>Chart Data:</strong> {$row['chart_data']}</p>";
            //             }
            //             echo "</div>";
            //         }
            //     } else {
            //         echo "<p>No data found in $table.</p>";
            //     }
            // }
            ?>







        </div>
    </main>
    <?php includeAndCache('../includes/footer.php'); ?>