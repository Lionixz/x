<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
?>
<!DOCTYPE html>
<html>
<?php includeAndCache('../includes/head.php'); ?>
<body>
    <?php includeAndCache('../includes/sidebar.php'); ?>
    <main>
        <div class="container">
            <img src="<?= htmlspecialchars($_SESSION['user_picture']) ?>" alt="User Picture"
                style="width: 100px; border-radius: 50%;">
            <h3><?= htmlspecialchars($_SESSION['user_name']) ?></h3>
            <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['user_email']) ?></p>
            <p><strong>Google ID:</strong> <?= htmlspecialchars($_SESSION['user_id']) ?></p>
            <br>
            

            <?php
            $mysqli = require '../config/db.php'; 
            $user_id = $_SESSION['db_user_id'];
            $sql = "SELECT user_credit FROM users WHERE id = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->bind_result($user_credit);
            $stmt->fetch();
            echo "<p><strong>Credit Balance:</strong> " . number_format($user_credit, 2) . " credits</p>";
            $stmt->close();
            ?>

            <div>
                <h4>Buy More Credits</h4>
                <form action="buy_credits.php" method="post">
                    <div class="form-group">
                        <label>Amount (PHP):</label>
                        <input type="number" name="amount" min="20" step="1" required 
                               placeholder="Minimum ₱20">
                    </div>
                    <p>1 PHP = 4 credits</p>
                    <button type="submit" class="btn">Purchase Credits</button>
                </form>
            </div>  


            <br>
            <h2>Vocabulary and Meaning</h2>
            <p>Core Definition (combines definition and contextual meaning) &#10004;</p>
            <p>Synonym Identification &#10004;</p>
            <p>Antonym Identification &#10004;</p>
            <p>Word Formation (word family, affix, root word) &#10004;</p>
            <p>Word Intensity &#10004;</p>
            <p>Field-Specific Meaning &#10004;</p>
            <p>Collocation Meaning &#10004;</p>
            <br>
            <h2>Grammar and Structure</h2>
            <p>Part of Speech Identification &#10004;</p>
            <p>Word Forms (verb, noun, adjective, adverb forms) &#10004;</p>
            <p>Pluralization &#10004;</p>
            <p>Tense and Conjugation &#10004;</p>
            <p>Comparative/Superlative Forms &#10004;</p>
            <p>Subject-Verb Agreement &#10004;</p>
            <br>
            <h2>Usage in Sentences</h2>
            <p>Correct Usage in Sentence &#10004;</p>
            <p>Sentence Correction &#10004;</p>
            <p>Fill in the Blank (merges sentence completion)</p>
            <p>Sentence Transformation (covers active/passive, negative, rewriting, word order)</p>
            <br>
            <h2>Mechanics</h2>
            <p>Spelling and Homophones (e.g., their/there/they’re)</p>
            <p>Capitalization and Punctuation</p>
            <p>Error-Free Sentence Identification</p>
            <br>
            <h2>Collocation and Idioms</h2>
            <p>Collocation Recognition (e.g., "precise measurement")</p>
            <p>Idiomatic Expressions</p>
            <p>Natural Word Pairings (e.g., "bread and butter")</p>
            <br>
            <h2>Logic and Association</h2>
            <p>Odd One Out</p>
            <p>Semantic Categorization (e.g., emotions, actions)</p>
            <p>Synonym/Antonym Matching</p>
            <p>Tone Appropriateness (e.g., formal vs. casual)</p>

        </div>
    </main>
<?php includeAndCache('../includes/footer.php'); ?>