INSERT INTO `verbal` 
(`category`, `type`, `sub_type`, `instruction`, `word`, `question`, `correct_answer`, `wrong_answer1`, `wrong_answer2`, `wrong_answer3`, `explanation`) VALUES
-- 1
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Subject-Verb Agreement',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'committee',
'Which sentence is correct?',
'The committee is meeting to discuss the new policy.',
'The committee are meeting to discuss the new policy.',
'The committee meets to discuss the new policy yesterday.',
'The committee meeting to discuss the new policy.',
'"Committee" is singular when acting as a unit, so "is meeting" is correct.'),

-- 2
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Verb Tense Consistency',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'project',
'Which sentence is correct?',
'She completed the project before the deadline.',
'She completes the project before the deadline last week.',
'She complete the project before the deadline.',
'She completing the project before the deadline.',
'The past tense "completed" matches the time reference "before the deadline" in the past.'),

-- 3
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Pronoun-Antecedent Agreement',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'everyone',
'Which sentence is correct?',
'Everyone has submitted his or her report.',
'Everyone have submitted their reports.',
'Everyone has submitted their report yesterday.',
'Everyone submitting his or her report.',
'"Everyone" is singular, so "has" and "his or her" are correct.'),

-- 4
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Misplaced Modifier',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'book',
'Which sentence is correct?',
'The book on the table belongs to Maria.',
'The book belongs to Maria on the table.',
'The book on the table it belongs to Maria.',
'The book that belongs to Maria on the table.',
'Modifiers should be placed next to the words they describe; option 1 is correct.'),

-- 5
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Parallel Structure',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'swimming, hiking, cycling',
'Which sentence is correct?',
'He enjoys swimming, hiking, and cycling.',
'He enjoys swimming, to hike, and cycling.',
'He enjoys to swim, hiking, and cycling.',
'He enjoys swimming, hiking, and to cycle.',
'All items in a series should be in the same grammatical form; gerunds are used here.'),

-- 6
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Double Negative',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'nothing',
'Which sentence is correct?',
'I found nothing unusual in the report.',
'I didn’t find nothing unusual in the report.',
'I hadn’t found nothing unusual in the report.',
'I not find nothing unusual in the report.',
'Avoid double negatives; "I found nothing unusual" is correct.'),

-- 7
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Pronoun Case',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'between you and me',
'Which sentence is correct?',
'This matter is between you and me.',
'This matter is between you and I.',
'This matter is between I and you.',
'This matter is between me and you.',
'After a preposition like "between," the objective case "me" is correct.'),

-- 8
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Confusing Word Pairs',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'affect/effect',
'Which sentence is correct?',
'The new policy will affect employee productivity.',
'The new policy will effect employee productivity.',
'The new policy will affects employee productivity.',
'The new policy will effected employee productivity.',
'"Affect" is the correct verb meaning "to influence".'),

-- 9
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Agreement with Intervening Phrase',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'president',
'Which sentence is correct?',
'The president, along with his advisers, is attending the meeting.',
'The president, along with his advisers, are attending the meeting.',
'The president along with his advisers attending the meeting.',
'The president along with his advisers were attending the meeting.',
'Ignore intervening phrases when deciding verb number; "is attending" agrees with "president".'),

-- 10
('Sentence Usage and Construction', 'Correct Usage in Sentences', 'Consistent Point of View',
'Choose the sentence that is grammatically correct and best expresses the idea.',
'writer',
'Which sentence is correct?',
'As a writer, I try to improve my skills every day.',
'As a writer, you should try to improve my skills every day.',
'As a writer, one should try to improve my skills every day.',
'As a writer, they should try to improve my skills every day.',
'The point of view must remain consistent; "I" is used throughout.');
