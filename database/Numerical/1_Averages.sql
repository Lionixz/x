-- Mean
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Averages', 'Mean', 'Find the mean (average) of the given numbers.', 'Find the mean of 5, 10, 15.', '10', '11', '9', '12', 'Mean = (5+10+15)/3 = 30/3 = 10.'),
('Arithmetic Fundamentals', 'Averages', 'Mean', 'Find the mean (average) of the given numbers.', 'Find the mean of 8, 12, 20, 10.', '12.5', '13', '12', '14', 'Mean = (8+12+20+10)/4 = 50/4 = 12.5.'),
('Arithmetic Fundamentals', 'Averages', 'Mean', 'Find the mean (average) of the given numbers.', 'Find the mean of 2, 4, 6, 8, 10.', '6', '5', '7', '8', 'Mean = (2+4+6+8+10)/5 = 30/5 = 6.'),
('Arithmetic Fundamentals', 'Averages', 'Mean', 'Find the mean (average) of the given numbers.', 'Find the mean of 7, 14, 21.', '14', '13', '15', '12', 'Mean = (7+14+21)/3 = 42/3 = 14.'),
('Arithmetic Fundamentals', 'Averages', 'Mean', 'Find the mean (average) of the given numbers.', 'Find the mean of 1, 3, 5, 7, 9.', '5', '4', '6', '7', 'Mean = (1+3+5+7+9)/5 = 25/5 = 5.');

-- Median
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Averages', 'Median', 'Find the median of the given numbers.', 'Find the median of 3, 7, 5.', '5', '3', '7', 'None', 'Arrange in order: 3, 5, 7 → middle value = 5.'),
('Arithmetic Fundamentals', 'Averages', 'Median', 'Find the median of the given numbers.', 'Find the median of 8, 12, 20, 10.', '11', '10', '12', '14', 'Arrange in order: 8, 10, 12, 20 → median = (10+12)/2 = 11.'),
('Arithmetic Fundamentals', 'Averages', 'Median', 'Find the median of the given numbers.', 'Find the median of 1, 2, 3, 4, 5.', '3', '2', '4', '5', 'Arrange in order: 1, 2, 3, 4, 5 → middle value = 3.'),
('Arithmetic Fundamentals', 'Averages', 'Median', 'Find the median of the given numbers.', 'Find the median of 10, 15, 20, 25, 30, 35.', '22.5', '20', '25', '23', 'Arrange in order: 10, 15, 20, 25, 30, 35 → median = (20+25)/2 = 22.5.'),
('Arithmetic Fundamentals', 'Averages', 'Median', 'Find the median of the given numbers.', 'Find the median of 7, 3, 9, 5.', '6', '5', '7', '8', 'Arrange in order: 3, 5, 7, 9 → median = (5+7)/2 = 6.');

-- Mode
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Averages', 'Mode', 'Find the mode (the number that appears most frequently) of the given numbers.', 'Find the mode of 2, 4, 4, 6, 8.', '4', '2', '6', '8', 'Number 4 appears twice, more than any other number → mode = 4.'),
('Arithmetic Fundamentals', 'Averages', 'Mode', 'Find the mode (the number that appears most frequently) of the given numbers.', 'Find the mode of 1, 3, 3, 3, 5, 5.', '3', '1', '5', 'None', 'Number 3 appears 3 times → mode = 3.'),
('Arithmetic Fundamentals', 'Averages', 'Mode', 'Find the mode (the number that appears most frequently) of the given numbers.', 'Find the mode of 6, 7, 8, 6, 9, 6.', '6', '7', '8', '9', 'Number 6 appears 3 times → mode = 6.'),
('Arithmetic Fundamentals', 'Averages', 'Mode', 'Find the mode (the number that appears most frequently) of the given numbers.', 'Find the mode of 10, 12, 12, 15, 10, 12.', '12', '10', '15', 'None', 'Number 12 appears 3 times → mode = 12.'),
('Arithmetic Fundamentals', 'Averages', 'Mode', 'Find the mode (the number that appears most frequently) of the given numbers.', 'Find the mode of 5, 5, 6, 7, 8, 8, 8.', '8', '5', '6', '7', 'Number 8 appears 3 times → mode = 8.');

-- Range
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Averages', 'Range', 'Find the range (difference between largest and smallest) of the given numbers.', 'Find the range of 5, 8, 12, 15.', '10', '12', '8', '15', 'Range = Largest - Smallest = 15 - 5 = 10.'),
('Arithmetic Fundamentals', 'Averages', 'Range', 'Find the range (difference between largest and smallest) of the given numbers.', 'Find the range of 3, 7, 7, 10, 12.', '9', '10', '8', '7', 'Range = 12 - 3 = 9.'),
('Arithmetic Fundamentals', 'Averages', 'Range', 'Find the range (difference between largest and smallest) of the given numbers.', 'Find the range of 1, 4, 6, 9, 11.', '10', '9', '8', '12', 'Range = 11 - 1 = 10.'),
('Arithmetic Fundamentals', 'Averages', 'Range', 'Find the range (difference between largest and smallest) of the given numbers.', 'Find the range of 7, 8, 12, 15, 20.', '13', '12', '14', '15', 'Range = 20 - 7 = 13.'),
('Arithmetic Fundamentals', 'Averages', 'Range', 'Find the range (difference between largest and smallest) of the given numbers.', 'Find the range of 2, 5, 7, 9, 12.', '10', '9', '11', '12', 'Range = 12 - 2 = 10.');

-- Weighted Average
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Averages', 'Weighted Average', 'Find the weighted average of the given numbers with weights.', 'Find the weighted average of scores 80, 90, 70 with weights 2, 3, 1.', '83.33', '80', '85', '82', 'Weighted average = (80×2 + 90×3 + 70×1)/(2+3+1) = (160+270+70)/6 = 500/6 ≈ 83.33.'),
('Arithmetic Fundamentals', 'Averages', 'Weighted Average', 'Find the weighted average of the given numbers with weights.', 'Find the weighted average of marks 60, 75, 90 with weights 1, 2, 3.', '80', '75', '78', '77', 'Weighted average = (60×1 + 75×2 + 90×3)/(1+2+3) = (60+150+270)/6 = 480/6 = 80.'),
('Arithmetic Fundamentals', 'Averages', 'Weighted Average', 'Find the weighted average of the given numbers with weights.', 'Find the weighted average of 50, 60, 70, 80 with weights 1, 1, 2, 2.', '68.33', '70', '65', '66', 'Weighted average = (50×1 + 60×1 + 70×2 + 80×2)/(1+1+2+2) = (50+60+140+160)/6 = 410/6 ≈ 68.33.'),
('Arithmetic Fundamentals', 'Averages', 'Weighted Average', 'Find the weighted average of the given numbers with weights.', 'Find the weighted average of 10, 20, 30 with weights 3, 2, 5.', '22', '20', '24', '23', 'Weighted average = (10×3 + 20×2 + 30×5)/(3+2+5) = (30+40+150)/10 = 220/10 = 22.'),
('Arithmetic Fundamentals', 'Averages', 'Weighted Average', 'Find the weighted average of the given numbers with weights.', 'Find the weighted average of 4, 6, 8 with weights 1, 3, 2.', '6.33', '6', '5.5', '6.5', 'Weighted average = (4×1 + 6×3 + 8×2)/(1+3+2) = (4+18+16)/6 = 38/6 ≈ 6.33.');

-- Average Word Problems
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Averages', 'Average Word Problems', 'Solve the word problem by finding the average.', 'The scores of 5 students are 70, 80, 90, 85, 75. Find the average score.', '80', '75', '78', '85', 'Average = (70+80+90+85+75)/5 = 400/5 = 80.'),
('Arithmetic Fundamentals', 'Averages', 'Average Word Problems', 'Solve the word problem by finding the average.', 'A factory produced 120, 150, 130 units in 3 days. Find the average units per day.', '133.33', '130', '140', '135', 'Average = (120+150+130)/3 = 400/3 ≈ 133.33.'),
('Arithmetic Fundamentals', 'Averages', 'Average Word Problems', 'Solve the word problem by finding the average.', 'A runner runs 5 km, 6 km, 7 km, and 8 km on four days. Find the average distance.', '6.5', '6', '7', '6.75', 'Average = (5+6+7+8)/4 = 26/4 = 6.5 km.'),
('Arithmetic Fundamentals', 'Averages', 'Average Word Problems', 'Solve the word problem by finding the average.', 'The marks of 6 students are 40, 50, 60, 70, 80, 90. Find the average mark.', '65', '60', '70', '66', 'Average = (40+50+60+70+80+90)/6 = 390/6 = 65.'),
('Arithmetic Fundamentals', 'Averages', 'Average Word Problems', 'Solve the word problem by finding the average.', 'The temperatures for 5 days are 20°C, 22°C, 24°C, 26°C, 28°C. Find the average temperature.', '24', '25', '23', '26', 'Average = (20+22+24+26+28)/5 = 120/5 = 24°C.');



-- Missing Value
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Averages', 'Missing Value', 'Find the missing score needed to achieve a desired average.', 'Mary scored 84 on her first test and 81 on her second test. She wants an average of 85 on all three tests. What score does she need on her third test?', '90', '88', '85', '92', 'Let the third score be x. Average = (84+81+x)/3 = 85 → x = 255-165 = 90.'),
('Arithmetic Fundamentals', 'Averages', 'Missing Value', 'Find the missing score needed to achieve a desired average.', 'John scored 78 and 82 on his first two exams. He wants an average of 80 over three exams. What should he score on the third exam?', '80', '79', '81', '82', 'Let the third score be x. Average = (78+82+x)/3 = 80 → x = 240-160 = 80.'),
('Arithmetic Fundamentals', 'Averages', 'Missing Value', 'Find the missing score needed to achieve a desired average.', 'A student scored 65 and 70 on the first two tests. To have an average of 72 after three tests, what score is required on the third test?', '81', '78', '80', '82', 'Let the third score be x. Average = (65+70+x)/3 = 72 → x = 216-135 = 81.'),
('Arithmetic Fundamentals', 'Averages', 'Missing Value', 'Find the missing score needed to achieve a desired average.', 'Lina scored 90 and 85 on two math tests. She wants an average of 88 over three tests. What score does she need on the third test?', '89', '88', '90', '87', 'Let the third score be x. Average = (90+85+x)/3 = 88 → x = 264-175 = 89.'),
('Arithmetic Fundamentals', 'Averages', 'Missing Value', 'Find the missing score needed to achieve a desired average.', 'Tom scored 72 and 78 on the first two science tests. He wants an average of 77 over three tests. What should he score on the third test?', '81', '79', '80', '82', 'Let the third score be x. Average = (72+78+x)/3 = 77 → x = 231-150 = 81.');





