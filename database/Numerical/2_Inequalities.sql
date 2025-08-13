INSERT INTO numerical 
(category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) 
VALUES
('Algebra', 'Inequalities', 'Number Line Solutions', 'Choose the correct answer.', 'Solve for x: 3x + 5 > 11.', 'x > 2', 'x < 2', 'x ≥ 2', 'x ≤ 2', 'Subtract 5: 3x > 6 → divide by 3 → x > 2'),
('Algebra', 'Inequalities', 'Number Line Solutions', 'Choose the correct answer.', 'Solve for x: 5 - 2x ≤ 9.', 'x ≥ -2', 'x ≤ -2', 'x > -2', 'x < -2', 'Subtract 5: -2x ≤ 4 → divide by -2 (flip sign) → x ≥ -2'),
('Algebra', 'Inequalities', 'Practical Constraints', 'Choose the correct answer.', 'A factory can produce at most 500 units per day. If x represents daily production, write the inequality.', 'x ≤ 500', 'x ≥ 500', 'x < 500', 'x > 500', 'Maximum production limit → x cannot exceed 500 → x ≤ 500'),
('Algebra', 'Inequalities', 'Graphing on Number Line', 'Choose the correct answer.', 'Graph the inequality x > -3 on a number line. Which point is NOT included?', '-4', '-3', '-5', '-6', 'x > -3 excludes -3 and all numbers less than -3'),
('Algebra', 'Inequalities', 'Word Problems', 'Choose the correct answer.', 'You have $50. You want to buy notebooks at $3 each. How many notebooks can you buy?', 'x ≤ 16', 'x ≥ 16', 'x < 16', 'x > 16', '3x ≤ 50 → x ≤ 16.66 → maximum whole notebooks = 16'),
('Algebra', 'Inequalities', 'Testing Solutions', 'Choose the correct answer.', 'Does x = 4 satisfy the inequality 2x - 5 < 3?', 'No', 'Yes', 'Cannot determine', 'Only approximately', '2*4 - 5 = 3 → 3 < 3 is false → x = 4 does NOT satisfy → No'),
('Algebra', 'Inequalities', 'Practical Constraints', 'Choose the correct answer.', 'A car rental company requires drivers to be at least 21 years old. Let x = age of driver.', 'x ≥ 21', 'x > 21', 'x ≤ 21', 'x < 21', 'Minimum age → x must be at least 21 → x ≥ 21'),
('Algebra', 'Inequalities', 'Word Problems', 'Choose the correct answer.', 'A theater can hold 120 people. Tickets sold are represented by x. Write the inequality.', 'x ≤ 120', 'x ≥ 120', 'x < 120', 'x > 120', 'Capacity limit → cannot exceed 120 → x ≤ 120'),
('Algebra', 'Inequalities', 'Graphing on Number Line', 'Choose the correct answer.', 'Graph the inequality x ≤ 5. Which number is included?', '5', '6', '7', '8', 'x ≤ 5 includes all numbers ≤ 5, including 5'),
('Algebra', 'Inequalities', 'Testing Solutions', 'Choose the correct answer.', 'Does x = -1 satisfy 4x + 2 ≥ -2?', 'Yes', 'No', 'Cannot determine', 'Only approximately', '4*(-1) + 2 ≥ -2 → True → Yes');
