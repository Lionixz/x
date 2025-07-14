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
            <h2>Vocabulary & Meaning</h2>
            <p>1. Definition &#10004;</p>
            <p>2. Synonym &#10004; </p>
            <p>3. Antonym &#10004;</p>
            <p>4. Contextual Meaning (based on a sentence)</p>
            <p>5. Word Family (choose related word) &#10004;</p>
            <p>6. Affix Identification (prefix/suffix)</p>
            <p>7. Root Word</p>
            <p>8. Word Intensity Scale (mild → strong)</p>
            <p>9. Field-Specific Meaning (e.g., science vs. everyday)</p>
            <p>10. Slang vs. Formal Use</p>
            <br>
            <h2>Grammar & Structure</h2>
            <p>11. Part of Speech</p>
            <p>12. Verb Form</p>
            <p>13. Noun Form</p>
            <p>14. Adjective Form</p>
            <p>15. Adverb Form</p>
            <p>16. Plural Form</p>
            <p>17. Tense Form (present, past, etc.)</p>
            <p>18. Correct Comparative Form</p>
            <p>19. Correct Superlative Form</p>
            <p>20. Subject-Verb Agreement</p>
            <br>
            <h2>Usage in Sentences</h2>
            <p>21. Correct Usage in a Sentence</p>
            <p>22. Sentence Correction</p>
            <p>23. Fill in the Blank</p>
            <p>24. Sentence Completion</p>
            <p>25. Rewriting (choose best rewritten version)</p>
            <p>26. Passive Voice Transformation</p>
            <p>27. Active Voice Transformation</p>
            <p>28. Negative Form</p>
            <p>29. Choose the Correct Word Order</p>
            <p>30. Error Identification</p>
            <br>
            <h2>Mechanics</h2>
            <p>31. Correct Spelling</p>
            <p>32. Capitalization</p>
            <p>33. Punctuation</p>
            <p>34. Homophones (e.g., their/there/they’re)</p>
            <p>35. Sentence with No Errors</p>
            <br>
            <h2>Collocation & Idioms</h2>
            <p>36. Common Collocation (e.g., “precise measurement”)</p>
            <p>37. Idiomatic Usage</p>
            <p>38. Choose Natural Word Combination</p>
            <p>39. Match Word with its Collocate</p>
            <p>40. Word Pairing (e.g., “bread and ___”)</p>
            <br>
            <h2>Logic & Association</h2>
            <p>41. Choose the Odd One Out</p>
            <p>42. Category Identification (emotion, action, etc.)</p>
            <p>43. Match with Synonym (list form)</p>
            <p>44. Match with Antonym (list form)</p>
            <p>45. Choose the Best Word for the Tone</p>
            <br>
            <h2>Contextual Thinking</h2>
            <p>46. Use in Formal Context</p>
            <p>47. Use in Informal Context</p>
            <p>48. Use in Business Sentence</p>
            <p>49. Use in Narrative Sentence</p>
            <p>50. Choose Best Word to Complete a Paragraph</p>
        </div>
    </main>
    <?php includeAndCache('../includes/footer.php'); ?>