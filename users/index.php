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

    @media (max-width: 480px) {
        .container {
            padding: 15px;
        }

        .user-avatar {
            width: 100px;
            height: 100px;
        }

        .section-title {
            font-size: 1.4rem;
        }

        .feature-card {
            padding: 15px;
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



            <br>
            <h1>English Exam Question Bank</h1>
            <br>
            <h2>Vocabulary and Meaning</h2><br>
            <p>1. Definition &#10004;</p>
            <p>2. Synonym Identification &#10004;</p>
            <p>3. Antonym Identification &#10004;</p>
            <p>4. Contextual Meaning (sentence-based) &#10004;</p>
            <p>5. Word Family (related words) &#10004;</p>
            <p>6. Affix Identification (prefix/suffix) &#10004;</p>
            <p>7. Root Word Analysis &#10004;</p>
            <p>8. Word Intensity Scale (mild → strong)</p>
            <p>9. Field-Specific Meaning &#10004;</p>
            <p>10. Slang vs. Formal Usage &#10004;</p>


            <h2>Grammar and Structure</h2><br>
            <p>15. Part of Speech Identification &#10004;</p>
            <p>16. Verb Forms </p>
            <p>17. Noun Forms </p>
            <p>18. Adjective Forms </p>
            <p>19. Adverb Forms </p>
            <p>20. Plural Formation </p>
            <p>21. Tense and Conjugation </p>
            <p>22. Comparative/Superlative Forms </p>
            <p>23. Subject-Verb Agreement </p>

            <h2>Sentence Usage and Construction</h2><br>
            <p>24. Correct Usage in Sentences </p>
            <p>25. Sentence Correction </p>
            <p>26. Fill in the Blank (vocabulary/grammar) </p>
            <p>27. Sentence Transformation (active/passive, negative, rewriting) </p>
            <p>28. Word Order Accuracy </p>
            <p>29. Error Identification </p>

            <h2>Language Mechanics</h2><br>
            <p>30. Spelling Accuracy </p>
            <p>31. Capitalization Rules </p>
            <p>32. Punctuation Usage </p>
            <p>33. Homophone Differentiation (e.g., their/there/they're) </p>
            <p>34. Error-Free Sentence Identification </p>

            <h2>Collocations and Idioms</h2><br>
            <p>35. Collocation Recognition (e.g., "precise measurement") </p>
            <p>36. Idiomatic Expressions </p>
            <p>37. Natural Word Pairings (e.g., "bread and butter") </p>
            <p>38. Word-Collocate Matching </p>

            <h2>Semantic Relationships</h2><br>
            <p>39. Odd One Out Analysis </p>
            <p>40. Semantic Categorization (e.g., emotions/actions) </p>
            <p>41. Synonym Matching </p>
            <p>42. Antonym Matching </p>
            <p>43. Tone Appropriateness (formal vs. casual) </p>

            <h2>Extended Context Application</h2><br>
            <p>44. Paragraph-Level Word Selection </p>



        </div>
    </main>
    <?php includeAndCache('../includes/footer.php'); ?>