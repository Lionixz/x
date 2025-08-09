INSERT INTO `verbal` 
(`category`, `type`, `sub_type`, `instruction`, `word`, `question`, `correct_answer`, `wrong_answer1`, `wrong_answer2`, `wrong_answer3`, `explanation`) VALUES
-- 1 Subject-Verb Agreement
('Sentence Usage and Construction', 'Sentence Correction', 'Subject-Verb Agreement',
'Choose the option that corrects the error in the given sentence.',
'committee',
'The committee are meeting to finalize the budget.',
'The committee is meeting to finalize the budget.',
'The committee meeting to finalize the budget.',
'The committee meets to finalize the budget yesterday.',
'The committee has meet to finalize the budget.',
'Collective nouns like "committee" take a singular verb when acting as one unit.'),

-- 2 Verb Tense Consistency
('Sentence Usage and Construction', 'Sentence Correction', 'Verb Tense Consistency',
'Choose the option that corrects the error in the given sentence.',
'completed',
'She completes the project before the deadline last week.',
'She completed the project before the deadline last week.',
'She completing the project before the deadline last week.',
'She had complete the project before the deadline last week.',
'She has completes the project before the deadline last week.',
'The verb tense should match the time reference "last week," so past tense is correct.'),

-- 3 Pronoun-Antecedent Agreement
('Sentence Usage and Construction', 'Sentence Correction', 'Pronoun-Antecedent Agreement',
'Choose the option that corrects the error in the given sentence.',
'everyone',
'Everyone have submitted their reports.',
'Everyone has submitted his or her report.',
'Everyone has submitted their report.',
'Everyone has submitting his or her report.',
'Everyone are submitted his or her report.',
'"Everyone" is singular and requires "has" with a singular pronoun form.'),

-- 4 Misplaced Modifier
('Sentence Usage and Construction', 'Sentence Correction', 'Misplaced Modifier',
'Choose the option that corrects the error in the given sentence.',
'book',
'Maria saw a book walking to the store.',
'Walking to the store, Maria saw a book.',
'Maria saw walking to the store a book.',
'Maria walking to the store saw a book.',
'Walking Maria to the store saw a book.',
'The modifier should be placed next to the word it describes to avoid confusion.'),

-- 5 Parallel Structure
('Sentence Usage and Construction', 'Sentence Correction', 'Parallel Structure',
'Choose the option that corrects the error in the given sentence.',
'swimming, hiking, cycling',
'He enjoys swimming, to hike, and cycling.',
'He enjoys swimming, hiking, and cycling.',
'He enjoys to swim, hiking, and cycling.',
'He enjoys swimming, hiking, and to cycle.',
'He enjoys swimming, to hiking, and cycling.',
'All items in a series should have the same grammatical form.'),

-- 6 Double Negative
('Sentence Usage and Construction', 'Sentence Correction', 'Double Negative',
'Choose the option that corrects the error in the given sentence.',
'nothing',
'I didn’t find nothing unusual in the report.',
'I found nothing unusual in the report.',
'I didn’t found nothing unusual in the report.',
'I hadn’t find nothing unusual in the report.',
'I didn’t finding nothing unusual in the report.',
'Avoid double negatives; "I found nothing unusual" is correct.'),

-- 7 Pronoun Case
('Sentence Usage and Construction', 'Sentence Correction', 'Pronoun Case',
'Choose the option that corrects the error in the given sentence.',
'between you and me',
'This matter is between you and I.',
'This matter is between you and me.',
'This matter is between me and you.',
'This matter is between I and you.',
'This matter is between us and you.',
'After "between," the pronoun should be in objective case ("me").'),

-- 8 Confusing Word Pairs
('Sentence Usage and Construction', 'Sentence Correction', 'Confusing Word Pairs',
'Choose the option that corrects the error in the given sentence.',
'affect',
'The new law will effect changes in the education system.',
'The new law will affect changes in the education system.',
'The new law will affects changes in the education system.',
'The new law will effected changes in the education system.',
'The new law will affecting changes in the education system.',
'"Affect" is the correct verb meaning "to influence" or "to cause to happen."'),

-- 9 Agreement with Intervening Phrase
('Sentence Usage and Construction', 'Sentence Correction', 'Agreement with Intervening Phrase',
'Choose the option that corrects the error in the given sentence.',
'president',
'The president, along with his advisers, are attending the meeting.',
'The president, along with his advisers, is attending the meeting.',
'The president along with his advisers attending the meeting.',
'The president along with his advisers were attending the meeting.',
'The president, along with his advisers, be attending the meeting.',
'Ignore intervening phrases when determining subject-verb agreement.'),

-- 10 Consistent Point of View
('Sentence Usage and Construction', 'Sentence Correction', 'Consistent Point of View',
'Choose the option that corrects the error in the given sentence.',
'writer',
'As a writer, you should try to improve my skills every day.',
'As a writer, I try to improve my skills every day.',
'As a writer, one should try to improve my skills every day.',
'As a writer, they should try to improve my skills every day.',
'As a writer, we should try to improve my skills every day.',
'The point of view should remain consistent throughout the sentence.');
