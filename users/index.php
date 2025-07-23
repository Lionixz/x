<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
?>
<!DOCTYPE html>
<html>
<?php includeAndCache('../includes/head.php'); ?>


<style>
  .question {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 1rem 1.5rem;
    margin-bottom: 1rem;
  }
  .question h2 {
    font-size: 1.1rem;
    margin: 0 0 0.5rem;
  }
  .choices {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.5rem 1rem;
    margin-bottom: 0.7rem;
  }
  .choice {
    padding: 0.3rem;
    color: #000;
  }
  .choice.correct {
    font-weight: bold;
    color: #5e63ff;
  }
  .explanation {
    font-size: 0.9rem;
    color: #000000ff;
    margin-top: 0.7rem;
  }

  /* Responsive adjustments for mobile */
  @media (max-width: 600px) {
    body {
      padding: 1rem;
    }
    .question {
      padding: 0.8rem 1rem;
    }
    .question h2 {
      font-size: 1rem;
    }
    .choices {
      grid-template-columns: 1fr; /* single column on small screens */
      gap: 0.4rem 0;
    }
    .choice {
      padding: 0.1rem;
    }
    .explanation {
      font-size: 0.85rem;
    }
  }
</style>



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
            
            <h2>Vocabulary and Meaning </h2>
            <div class="question">
                <h2>1. Definition: <br> What is the best definition of the word <strong>“gregarious”</strong> ? &#10004;</h2>
                <div class="choices">
                <span class="choice">A. Exhibiting calmness under pressure</span>
                <span class="choice correct">B. Fond of company and sociable</span>
                <span class="choice">C. Relating to the study of groups</span>
                <span class="choice">D. Showing great generosity</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Gregarious” describes someone who enjoys being with others and is sociable and outgoing.</p>
            </div>

            <div class="question">
                <h2>2. Synonym: <br> Which word is closest in meaning to <strong>“obstinate”</strong> ? &#10004;</h2>
                <div class="choices">
                <span class="choice">A. Transparent</span>
                <span class="choice">B. Fickle</span>
                <span class="choice correct">C. Stubborn</span>
                <span class="choice">D. Yielding</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Obstinate” means stubbornly refusing to change one’s opinion or course of action.</p>
            </div>

            <div class="question">
                <h2>3. Antonym: <br> Which word is the opposite of <strong>“arduous”</strong> ? &#10004;</h2>
                <div class="choices">
                <span class="choice correct">A. Effortless</span>
                <span class="choice">B. Laborious</span>
                <span class="choice">C. Strenuous</span>
                <span class="choice">D. Exhausting</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Arduous” means very difficult or requiring much effort; its opposite is “effortless.”</p>
            </div>

            <div class="question">
                <h2>4. Contextual Meaning: <br> In “The curator’s <strong>assiduous</strong> attention to detail made the exhibit flawless,” what does “assiduous” mean ? &#10004;</h2>
                <div class="choices">
                <span class="choice">A. Done without help</span>
                <span class="choice correct">B. Done with great care</span>
                <span class="choice">C. Hastily done</span>
                <span class="choice">D. Done in secret</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Assiduous” describes showing great care and perseverance in completing a task.</p>
            </div>

            <div class="question">
                <h2>5. Word Family: <br> Which word belongs to the same family as <strong>“tangible”</strong> ? &#10004;</h2>
                <div class="choices">
                <span class="choice">A. Tangent</span>
                <span class="choice">B. Tango</span>
                <span class="choice correct">C. Tangibility</span>
                <span class="choice">D. Tangle</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Tangibility” is the noun form derived from the adjective “tangible,” sharing the same root.</p>
            </div>

            <div class="question">
            <h2>6. Affix:<br> Which part of the word <strong>“reusable”</strong> is a <u>prefix</u>? &#10004;</h2>
            <div class="choices">
                <span class="choice">A. Usable</span>
                <span class="choice">B. Use</span>
                <span class="choice correct">C. re-</span>
                <span class="choice">D. -able</span>
            </div>
            <p class="explanation"><strong>Explanation:</strong> “re-” is a prefix (an affix added at the beginning) in “reusable.”</p>
        </div>


            <div class="question">
                <h2>7. Root Word: <br> What is the root of the word <strong>“photograph”</strong> ? &#10004;</h2>
                <div class="choices">
                <span class="choice">A. graph</span>
                <span class="choice correct">B. photo</span>
                <span class="choice">C. rap</span>
                <span class="choice">D. photograph</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Photo-” is the Greek root meaning “light,” combined with “-graph” meaning “to write.”</p>
            </div>

            <div class="question">
                <h2>8. Intensity: <br> Which word is a stronger intensity than <strong>“cold”</strong> ? &#10004;</h2>
                <div class="choices">
                <span class="choice">A. Chilly</span>
                <span class="choice">B. Cool</span>
                <span class="choice correct">C. Frigid</span>
                <span class="choice">D. Coolish</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Frigid” denotes an extreme level of cold, stronger than “cold” or “chilly.”</p>
            </div>

            <div class="question">
                <h2>9. Field‑Specific: <br> In computing, what does <strong>“cache”</strong> refer to ? &#10004;</h2>
                <div class="choices">
                <span class="choice">A. A language compiler</span>
                <span class="choice correct">B. A hidden storage area for quick data access</span>
                <span class="choice">C. A network protocol</span>
                <span class="choice">D. A type of programming error</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> A “cache” stores data temporarily to speed up future requests.</p>
            </div>

            <div class="question">
                <h2>10. Collocation: <br> What does “<strong>meet a deadline</strong>” mean ? &#10004;</h2>
                <div class="choices">
                <span class="choice">A. To miss an important meeting</span>
                <span class="choice">B. To start a long‑term project</span>
                <span class="choice correct">C. To finish something on time</span>
                <span class="choice">D. To plan an event</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Meet a deadline” means completing a task by its due date.</p>
            </div>    

            <h2>Grammar Structure</h2>
            <div class="question">
                <h2>12. Part of Speech:<br> What part of speech is the word <strong>“exactly”</strong> in the sentence: “That’s exactly what I meant”?</h2>
                <div class="choices">
                    <span class="choice">A. Adjective</span>
                    <span class="choice">B. Noun</span>
                    <span class="choice correct">C. Adverb</span>
                    <span class="choice">D. Verb</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Exactly” modifies the meaning of the clause to show precision, so it functions as an adverb.</p>
            </div>



            <div class="question">
                <h2>12. Preposition: <br> She’s very skilled <strong>___</strong> painting.</h2>
                <div class="choices">
                    <span class="choice">A. at</span>
                    <span class="choice correct">B. in</span>
                    <span class="choice">C. on</span>
                    <span class="choice">D. of</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “In” is the correct preposition to show proficiency in an activity.</p>
            </div>


            <div class="question">
                <h2>13. Verb Form: <br> What is the past participle of <strong>“choose”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Choosing</span>
                <span class="choice">B. Chooses</span>
                <span class="choice">C. Chose</span>
                <span class="choice correct">D. Chosen</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> The past participle of “choose” is “chosen.”</p>
            </div>

            <div class="question">
                <h2>14. Noun Form: <br> What is the correct noun form of <strong>“innovate”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Innovative</span>
                <span class="choice">B. Innovator</span>
                <span class="choice">C. Innovating</span>
                <span class="choice correct">D. Innovation</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Innovation” is the noun form meaning the act or process of innovating.</p>
            </div>

            <div class="question">
                <h2>15. Adjective Form: <br> Choose the adjective form of <strong>“caution”</strong>.</h2>
                <div class="choices">
                <span class="choice">A. Cauterize</span>
                <span class="choice">B. Cautionary</span>
                <span class="choice">C. Cautiously</span>
                <span class="choice correct">D. Cautious</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Cautious” is the adjective derived from the noun “caution.”</p>
            </div>

            <div class="question">
                <h2>16. Adverb Form: <br> What is the adverb form of <strong>“delicate”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Delicate</span>
                <span class="choice">B. Delicatessen</span>
                <span class="choice correct">C. Delicately</span>
                <span class="choice">D. Delicacy</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Delicately” is the adverb form, indicating a delicate manner.</p>
            </div>

            <div class="question">
                <h2>17. Plural Form: <br> What is the plural of <strong>“criterion”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Criterias</span>
                <span class="choice">B. Criterion</span>
                <span class="choice correct">C. Criteria</span>
                <span class="choice">D. Criteriones</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Criteria” is the correct plural of “criterion.”</p>
            </div>

            <div class="question">
                <h2>18. Tense Form: <br> Which sentence correctly uses the future perfect tense?</h2>
                <div class="choices">
                <span class="choice">A. I had finished the report by noon.</span>
                <span class="choice">B. I will finish the report by noon.</span>
                <span class="choice correct">C. I will have finished the report by noon.</span>
                <span class="choice">D. I have finished the report by noon.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> Future perfect (“will have finished”) indicates completion by a future time.</p>
            </div>

            <div class="question">
                <h2>19. Comparative Form: <br> Which is the correct comparative of <strong>“healthy”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Most healthy</span>
                <span class="choice correct">B. Healthier</span>
                <span class="choice">C. Healthiest</span>
                <span class="choice">D. More healthy</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Healthier” is the standard comparative form of “healthy.”</p>
            </div>

            <div class="question">
                <h2>20. Superlative Form: <br> Which is the correct superlative of <strong>“far”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Most far</span>
                <span class="choice">B. Furtherest</span>
                <span class="choice correct">C. Farthest</span>
                <span class="choice">D. More far</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Farthest” is the superlative form of “far,” indicating the greatest distance.</p>
            </div>

            <div class="question">
                <h2>21. Subject‑Verb Agreement: <br> Which sentence is grammatically correct?</h2>
                <div class="choices">
                <span class="choice">A. The lists of items is on the table.</span>
                <span class="choice correct">B. The list of items is on the table.</span>
                <span class="choice">C. The list of items are on the table.</span>
                <span class="choice">D. The list of items were on the table.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> The subject “list” is singular, so it takes “is.”</p>
            </div>


            <h2>Usage in Sentences</h2>
            <div class="question">
                <h2>22. Correct Usage in a Sentence: <br> Which sentence uses <strong>“affect”</strong> correctly?</h2>
                <div class="choices">
                <span class="choice">A. She is affected at the concert.</span>
                <span class="choice">B. The weather will effect our trip.</span>
                <span class="choice correct">C. The movie’s plot deeply affected me.</span>
                <span class="choice">D. The music had no affect on her mood.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Affected” is the correct past-tense verb form of “affect” meaning to influence.</p>
            </div>

            <div class="question">
                <h2>23. Sentence Correction: <br> Identify the error and choose the corrected sentence.<br>
                <em>Original:</em> “Neither the manager nor the employees was ready.”</h2>
                <div class="choices">
                <span class="choice">A. Neither the manager nor the employees are ready.</span>
                <span class="choice">B. Neither the manager nor the employees is ready.</span>
                <span class="choice">C. Neither the manager nor the employees have been ready.</span>
                <span class="choice correct">D. Neither the manager nor the employees were ready.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> With “neither…nor,” the verb agrees with the nearer subject (“employees”), so plural “were.”</p>
            </div>

            <div class="question">
                <h2>24. Fill in the Blank: <br> She ______ the marathon despite the rain.</h2>
                <div class="choices">
                <span class="choice">A. Completes</span>
                <span class="choice">B. Complete</span>
                <span class="choice correct">C. Completed</span>
                <span class="choice">D. Completing</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> The past-tense “completed” correctly indicates she finished the marathon.</p>
            </div>

            <div class="question">
                <h2>25. Sentence Completion: <br> “If she ______ earlier, she wouldn’t have missed the bus.”</h2>
                <div class="choices">
                <span class="choice">A. Woke up</span>
                <span class="choice correct">B. Had woken up</span>
                <span class="choice">C. Wakes up</span>
                <span class="choice">D. Will wake up</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> Past perfect (“had woken up”) is used for unreal past conditions.</p>
            </div>

            <div class="question">
                <h2>26. Rewriting: <br> Choose the best rewritten version of “The project was too difficult for anyone to finish on time.”</h2>
                <div class="choices">
                <span class="choice">A. Too difficult was the project for on-time finishing.</span>
                <span class="choice correct">B. No one could finish the project on time because it was too difficult.</span>
                <span class="choice">C. Because the project was too difficult, could no one finish it on time.</span>
                <span class="choice">D. The project was too difficult; no one finishing it on time.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> This version clearly and grammatically conveys the original meaning in active form.</p>
            </div>

            <div class="question">
                <h2>27. Passive Voice Transformation: <br> Which is the passive form of “The chef prepares the meal”?</h2>
                <div class="choices">
                <span class="choice">A. The meal prepares by the chef.</span>
                <span class="choice correct">B. The meal is prepared by the chef.</span>
                <span class="choice">C. The chef is prepared by the meal.</span>
                <span class="choice">D. The meal was preparing by the chef.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> Passive voice swaps subject and object and uses the appropriate form of “to be” plus past participle.</p>
            </div>

            <div class="question">
                <h2>28. Active Voice Transformation: <br> Which is the active form of “A novel was written by the author”?</h2>
                <div class="choices">
                <span class="choice">A. A novel was writing by the author.</span>
                <span class="choice correct">B. The author wrote a novel.</span>
                <span class="choice">C. A novel wrote the author.</span>
                <span class="choice">D. The author was writing a novel.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> Active voice places the doer (“author”) before the action (“wrote”).</p>
            </div>

            <div class="question">
                <h2>29. Negative Form: <br> Choose the negative form of “They will arrive soon.”</h2>
                <div class="choices">
                <span class="choice">A. They are not arrive soon.</span>
                <span class="choice correct">B. They will not arrive soon.</span>
                <span class="choice">C. They won’t arriving soon.</span>
                <span class="choice">D. They don’t arrive soon.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> The correct negation of “will arrive” is “will not arrive.”</p>
            </div>

          <div class="question">
                <h2>30. Choose the Correct Word Order: <br> Which order is correct?</h2>
                <div class="choices">
                    <span class="choice">A. She finished the assignment quickly.</span>
                    <span class="choice correct">B. She quickly finished the assignment.</span>
                    <span class="choice">C. She finished quickly the assignment.</span>
                    <span class="choice">D. Quickly she finished the assignment.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “She quickly finished the assignment.” is a common and natural order, especially if you want to emphasize the speed. “She finished the assignment quickly.” is also correct.</p>
            </div>



            <div class="question">
                <h2>31. Error Identification: <br> Which sentence contains an error?</h2>
                <div class="choices">
                <span class="choice correct">A. Each of the guests has their seat.</span>
                <span class="choice">B. Each of the guests has its seat.</span>
                <span class="choice">C. Each of the guests has her seat.</span>
                <span class="choice">D. Each of the guests has his seat.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Their” mismatches with the singular “Each,” creating a pronoun–antecedent error.</p>
            </div>

            <h2>Mechanics</h2>
            <div class="question">
                <h2>32. Correct Spelling: <br> Which word is spelled correctly?</h2>
                <div class="choices">
                <span class="choice">A. Accomadate</span>
                <span class="choice correct">B. Accommodate</span>
                <span class="choice">C. Acomodate</span>
                <span class="choice">D. Acommodate</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Accommodate” requires two C’s and two M’s.</p>
            </div>

            <div class="question">
                <h2>33. Capitalization: <br> Which sentence is correct?</h2>
                <div class="choices">
                <span class="choice">A. She Visited paris last summer.</span>
                <span class="choice">B. she visited paris last summer.</span>
                <span class="choice correct">C. She visited Paris last summer.</span>
                <span class="choice">D. She visited paris Last summer.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> Proper nouns like “Paris” and sentence-initial words are capitalized.</p>
            </div>

            <div class="question">
                <h2>34. Punctuation: <br> Choose the correctly punctuated sentence.</h2>
                <div class="choices">
                <span class="choice correct">A. “It’s time to go,” said John.</span>
                <span class="choice">B. “It’s time to go said John.”</span>
                <span class="choice">C. “Its time to go,” said John.</span>
                <span class="choice">D. Its time to go, said John.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> Quotation marks enclose spoken words, with the comma inside.</p>
            </div>

            <div class="question">
                <h2>35. Homophones: <br> “Please put your coat over __ chair.”</h2>
                <div class="choices">
                <span class="choice">A. thare</span>
                <span class="choice correct">B. their</span>
                <span class="choice">C. there</span>
                <span class="choice">D. they’re</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Their” is the possessive pronoun indicating ownership of the chair.</p>
            </div>

            <div class="question">
                <h2>36. Sentence with No Errors: <br> Which sentence is error-free?</h2>
                <div class="choices">
                <span class="choice">A. He don’t know the answer.</span>
                <span class="choice">B. He doesn’t knows the answer.</span>
                <span class="choice correct">C. He doesn’t know the answer.</span>
                <span class="choice">D. He don’t knows the answer.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Doesn’t” (third-person singular) pairs with the base form “know.”</p>
            </div>


            <h2>Collocation Idioms</h2>
            <div class="question">
                <h2>37. Common Collocation: <br> Which collocation is natural?</h2>
                <div class="choices">
                <span class="choice">A. Big rain</span>
                <span class="choice correct">B. Heavy rain</span>
                <span class="choice">C. Hard rain</span>
                <span class="choice">D. Strong rain</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> Native usage favors “heavy rain” to describe significant rainfall.</p>
            </div>

            <div class="question">
                <h2>38. Idiomatic Usage: <br> What does “kick the bucket” mean?</h2>
                <div class="choices">
                <span class="choice">A. To start a project</span>
                <span class="choice">B. To reach a goal</span>
                <span class="choice correct">C. To die</span>
                <span class="choice">D. To break something accidentally</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Kick the bucket” is an idiom meaning to die.</p>
            </div>

            <div class="question">
                <h2>39. Choose the Natural Word Combination: <br> Which sounds most natural?</h2>
                <div class="choices">
                <span class="choice">A. Do progress</span>
                <span class="choice">B. Get progress</span>
                <span class="choice correct">C. Make progress</span>
                <span class="choice">D. Take progress</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Make progress” is the standard collocation for improvement.</p>
            </div>

            <div class="question">
                <h2>40. Match Word with its Collocate: <br> Which word best completes the phrase “__ a decision”?</h2>
                <div class="choices">
                <span class="choice">A. Have</span>
                <span class="choice">B. Do</span>
                <span class="choice correct">C. Make</span>
                <span class="choice">D. Take</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> The collocation is “make a decision.”</p>
            </div>

            <div class="question">
                <h2>41. Word Pairing: <br> Complete the pair “salt and __.”</h2>
                <div class="choices">
                <span class="choice">A. Sugar</span>
                <span class="choice">B. Spice</span>
                <span class="choice">C. Sauce</span>
                <span class="choice correct">D. Pepper</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> The familiar pairing is “salt and pepper.”</p>
            </div>


            <h2>Logic Association</h2>
            <div class="question">
                <h2>42. Choose the Odd One Out: <br> Which word does NOT belong?</h2>
                <div class="choices">
                <span class="choice">A. Joyful</span>
                <span class="choice correct">B. Leather</span>
                <span class="choice">C. Happy</span>
                <span class="choice">D. Ecstatic</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> All but “leather” denote emotions.</p>
            </div>

            <div class="question">
                <h2>43. Category Identification: <br> Which category best fits <strong>“melancholy”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Object</span>
                <span class="choice">B. Action</span>
                <span class="choice">C. Place</span>
                <span class="choice correct">D. Emotion</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Melancholy” describes a feeling of sadness.</p>
            </div>

            <div class="question">
                <h2>44. Match with Synonym: <br> Which word matches <strong>“verbose”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Silent</span>
                <span class="choice">B. Brief</span>
                <span class="choice">C. Clear</span>
                <span class="choice correct">D. Wordy</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Wordy” means using more words than necessary, like “verbose.”</p>
            </div>

            <div class="question">
                <h2>45. Match with Antonym: <br> Which word is the antonym of <strong>“vivid”</strong>?</h2>
                <div class="choices">
                <span class="choice">A. Sharp</span>
                <span class="choice">B. Vivid</span>
                <span class="choice">C. Bright</span>
                <span class="choice correct">D. Dull</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Dull” means lacking brightness or vividness.</p>
            </div>

            <div class="question">
                <h2>46. Choose the Best Word for the Tone: <br> Which word best conveys a formal tone?</h2>
                <div class="choices">
                <span class="choice">A. Make use</span>
                <span class="choice">B. Employ</span>
                <span class="choice correct">C. Utilize</span>
                <span class="choice">D. Use</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Utilize” is more formal than “use” or “employ.”</p>
            </div>

            <h2>Contextual Thinking</h2>
            <div class="question">
                <h2>47. Use in Formal Context: <br> Which sentence is most appropriate for a formal report?</h2>
                <div class="choices">
                <span class="choice">A. The results were really good.</span>
                <span class="choice correct">B. The results were satisfactory.</span>
                <span class="choice">C. The results were okay.</span>
                <span class="choice">D. The results were cool.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Satisfactory” is suitably formal and precise.</p>
            </div>

            <div class="question">
                <h2>48. Use in Informal Context: <br> Which sentence is most appropriate in a casual text?</h2>
                <div class="choices">
                <span class="choice">A. Your help is acknowledged.</span>
                <span class="choice">B. I appreciate your assistance.</span>
                <span class="choice">C. I extend my gratitude.</span>
                <span class="choice correct">D. Thanks a bunch!</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Thanks a bunch!” is friendly and informal.</p>
            </div>

            <div class="question">
                <h2>49. Use in a Business Sentence: <br> “Please let me know if you have any ___.”</h2>
                <div class="choices">
                <span class="choice">A. inquiryes</span>
                <span class="choice">B. inquires</span>
                <span class="choice correct">C. inquiries</span>
                <span class="choice">D. inquirys</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> “Inquiries” is the correct plural noun form in business correspondence.</p>
            </div>

            <div class="question">
                <h2>50. Use in a Narrative Sentence: <br> Which best fits a story opening?</h2>
                <div class="choices">
                <span class="choice">A. Suddenly, lights went out.</span>
                <span class="choice correct">B. Suddenly, the lights went out.</span>
                <span class="choice">C. Suddenly, the lights did go out.</span>
                <span class="choice">D. Suddenly, the lights going out.</span>
                </div>
                <p class="explanation"><strong>Explanation:</strong> This phrasing is concise and vivid for narrative.</p>
            </div>

            <div class="question">
            <h2>51. “The scientist’s findings were so ___ that they challenged existing theories.”</h2>
            <div class="choices">
                <span class="choice">A. Innovative</span>
                <span class="choice">B. Ground-breaking</span>
                <span class="choice correct">C. Groundbreaking</span>
                <span class="choice">D. Astonishing</span>
            </div>
            <p class="explanation"><strong>Explanation:</strong> “Groundbreaking” (one word) is the standard form meaning pioneering or remarkably new.</p>
        </div>


          
        </div>
    </main>
    <?php includeAndCache('../includes/footer.php'); ?>