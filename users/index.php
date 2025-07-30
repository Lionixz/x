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
            <h1>Civil Service Exam English Topics with Examples</h1><br>
            <h1>I. Word Meaning and Usage</h1><br>
            <p><strong>1. Definition</strong>: Select the correct meaning of "ephemeral"<br>
            <em>Example</em>: A) Lasting only a day B) Extremely valuable C) Highly intelligent (Answer: A)</p>
            <p><strong>2. Synonym</strong>: Choose the word similar to "benevolent"<br>
            <em>Example</em>: A) Kind B) Angry C) Confused (Answer: A)</p>
            <p><strong>3. Antonym</strong>: Select the opposite of "diligent"<br>
            <em>Example</em>: A) Lazy B) Smart C) Happy (Answer: A)</p>
            <p><strong>4. Contextual Meaning</strong>: In the clinical note: "The patient is scheduled for DISCHARGE tomorrow morning," what does "DISCHARGE" mean?<br>
            <em>Example</em>: A) Release from care B) Electric current release C) Fluid emission (Answer: A)</p>
            <p><strong>5. Word Family</strong>: Choose the word that does NOT belong to the word family of “inform”<br>
            <em>Example</em>: A) Informative B) Formation C) BoInformation (Answer: B)</p>
            <p><strong>6. Word Intensity</strong>: Which is stronger?<br>
            <em>Example</em>: A) Angry B) Furious (Answer: B)</p>
            <p><strong>7. Field-Specific Meaning</strong>: In law, what does "plaintiff" mean?<br>
            <em>Example</em>: A) Person bringing a case B) Judge C) Lawyer (Answer: A)</p>
            <h1>II. Grammar & Structure</h1><br>
            <p><strong>8. Part of Speech</strong>: Identify "quickly" in: "She ran quickly"<br>
            <em>Example</em>: A) Noun B) Verb C) Adverb (Answer: C)</p>
            <p><strong>9. Verb Forms</strong>: What is the past tense of "go"?<br>
            <em>Example</em>: A) Gone B) Went C) Going (Answer: B)</p>
            <p><strong>10. Noun Forms</strong>: What is the plural of "child"?<br>
            <em>Example</em>: A) Childs B) Children C) Child's (Answer: B)</p>
            <p><strong>11. Adjective/Adverb Forms</strong>: Complete: "She is the ___ student in class"<br>
            <em>Example</em>: A) Smart B) Smarter C) Smartest (Answer: C)</p>
            <p><strong>12. Affixes & Root Words</strong>: What does "un-" mean in "unhappy"?<br>
            <em>Example</em>: A) Very B) Not C) Again (Answer: B)</p>
            <p><strong>13. Pluralization Rules</strong>: What is the plural of "box"?<br>
            <em>Example</em>: A) Boxs B) Boxes C) Boxen (Answer: B)</p>
            <p><strong>14. Tense Usage</strong>: Complete: "She ___ to school daily"<br>
            <em>Example</em>: A) Go B) Goes C) Gone (Answer: B)</p>
            <p><strong>15. Subject-Verb Agreement</strong>: Correct: "The team ___ playing well"<br>
            <em>Example</em>: A) Is B) Are (Answer: A)</p>
            <h1>III. Sentence Usage</h1><br>
            <p><strong>16. Sentence Correction</strong>: Identify the error: "She don't like apples"<br>
            <em>Example</em>: A) She B) don't C) apples (Answer: B)</p>
            <p><strong>17. Fill in the Blanks</strong>: Complete: "She was ___ by the news"<br>
            <em>Example</em>: A) Surprise B) Surprised C) Surprising (Answer: B)</p>
            <p><strong>18. Sentence Completion</strong>: Finish: "Although it rained..."<br>
            <em>Example</em>: A) we went outside B) the sun was hot C) I was tired (Answer: A)</p>
            <p><strong>19. Voice Transformation</strong>: Change to passive: "The cat chased the mouse"<br>
            <em>Example</em>: A) The mouse was chased by the cat B) The mouse chased the cat (Answer: A)</p>
            <p><strong>20. Negative Form</strong>: Make negative: "She has finished"<br>
            <em>Example</em>: A) She hasn't finished B) She not has finished (Answer: A)</p>
            <p><strong>21. Word Order</strong>: Arrange: "always/she/late/is"<br>
            <em>Example</em>: A) She is always late B) Always she is late (Answer: A)</p>
            <h1>IV. Mechanics</h1><br>
            <p><strong>22. Spelling & Homophones</strong>: Correct: "Their going to the park"<br>
            <em>Example</em>: A) There B) They're C) Thier (Answer: B)</p>
            <p><strong>23. Capitalization</strong>: Correct: "dr. smith works in london"<br>
            <em>Example</em>: A) Dr. Smith works in London B) Dr. smith works in London (Answer: A)</p>
            <p><strong>24. Punctuation</strong>: Correct: "What time is it"<br>
            <em>Example</em>: A) What time is it. B) What time is it? (Answer: B)</p>
            <h1>V. Collocations & Idioms</h1><br>
            <p><strong>25. Common Collocations</strong>: Complete: "Make a ___"<br>
            <em>Example</em>: A) decision B) picture C) food (Answer: A)</p>
            <p><strong>26. Idioms</strong>: What does "hit the books" mean?<br>
            <em>Example</em>: A) Study hard B) Literally hit books C) Sell books (Answer: A)</p>
            <p><strong>27. Fixed Phrases</strong>: Complete: "Bread and ___"<br>
            <em>Example</em>: A) Milk B) Butter C) Jam (Answer: B)</p>
            <h1>VI. Logic & Context</h1><br>
            <p><strong>28. Odd One Out</strong>: Which doesn't belong? Apple, Banana, Carrot, Orange<br>
            <em>Example</em>: A) Carrot B) Banana (Answer: A)</p>
            <p><strong>29. Category Identification</strong>: What do these share? Happy, Sad, Angry<br>
            <em>Example</em>: A) Colors B) Emotions C) Fruits (Answer: B)</p>
            <p><strong>30. Tone-Based Usage</strong>: Which is formal? "Hi" or "Dear Sir/Madam"<br>
            <em>Example</em>: A) Hi B) Dear Sir/Madam (Answer: B)</p>
            <p><strong>31. Inference & Paragraph Completion</strong>: Complete: "The sky grew dark..."<br>
            <em>Example</em>: A) so we went inside B) the sun was bright C) birds were singing (Answer: A)</p>
        </div>
    </main>
<?php includeAndCache('../includes/footer.php'); ?>