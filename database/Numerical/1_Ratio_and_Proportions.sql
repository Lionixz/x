-- Ratios
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Ratios', 'Simplify the given ratio.', 'Simplify the ratio 20:50.', '2:5', '4:10', '1:2', '5:2', 'Divide both terms by their greatest common divisor (GCD) 10: 20 ÷ 10 = 2, 50 ÷ 10 = 5.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Ratios', 'Simplify the given ratio.', 'Simplify the ratio 15:35.', '3:7', '5:7', '3:5', '15:35', 'GCD of 15 and 35 is 5. Divide both terms: 15 ÷ 5 = 3, 35 ÷ 5 = 7.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Ratios', 'Simplify the given ratio.', 'Simplify the ratio 24:36.', '2:3', '4:6', '3:4', '12:18', 'GCD of 24 and 36 is 12. Divide both terms: 24 ÷ 12 = 2, 36 ÷ 12 = 3.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Ratios', 'Simplify the given ratio.', 'Simplify the ratio 18:24.', '3:4', '2:3', '6:8', '9:12', 'GCD of 18 and 24 is 6. Divide both terms: 18 ÷ 6 = 3, 24 ÷ 6 = 4.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Ratios', 'Simplify the given ratio.', 'Simplify the ratio 50:125.', '2:5', '5:12', '10:25', '1:3', 'GCD of 50 and 125 is 25. Divide both terms: 50 ÷ 25 = 2, 125 ÷ 25 = 5.');

-- Comparing Ratios
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Comparing Ratios', 'Compare the two ratios and determine which is greater.', 'Which is greater: 3:4 or 5:8?', '3:4', '5:8', 'Both are equal', 'Cannot determine', 'Convert to fractions: 3/4 = 0.75, 5/8 = 0.625. 0.75 > 0.625, so 3:4 is greater.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Comparing Ratios', 'Compare the two ratios and determine which is greater.', 'Which is greater: 7:10 or 2:3?', '2:3', '7:10', 'Both are equal', 'Cannot determine', 'Convert to fractions: 7/10 = 0.7, 2/3 ≈ 0.6667. 0.7 > 0.6667, so 7:10 is greater.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Comparing Ratios', 'Compare the two ratios and determine which is greater.', 'Which is greater: 5:6 or 4:5?', '5:6', '4:5', 'Both are equal', 'Cannot determine', 'Convert to fractions: 5/6 ≈ 0.8333, 4/5 = 0.8. 0.8333 > 0.8, so 5:6 is greater.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Comparing Ratios', 'Compare the two ratios and determine which is greater.', 'Which is greater: 9:12 or 3:4?', 'Both are equal', '9:12', '3:4', 'Cannot determine', 'Convert to fractions: 9/12 = 0.75, 3/4 = 0.75. They are equal.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Comparing Ratios', 'Compare the two ratios and determine which is greater.', 'Which is greater: 11:15 or 7:10?', '7:10', '11:15', 'Both are equal', 'Cannot determine', 'Convert to fractions: 11/15 ≈ 0.7333, 7/10 = 0.7. 0.7333 > 0.7, so 11:15 is greater.');


-- Solving Equivalent Ratios
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Equivalent Ratios', 'Find the missing value to make the ratios equivalent.', 'Fill in the blank: 3:4 = ? : 16', '12', '10', '14', '15', 'Set up proportion: 3/4 = x/16 → x = (3 × 16)/4 = 12.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Equivalent Ratios', 'Find the missing value to make the ratios equivalent.', 'Fill in the blank: 5:8 = 15 : ?', '24', '20', '25', '22', 'Set up proportion: 5/8 = 15/x → x = (15 × 8)/5 = 24.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Equivalent Ratios', 'Find the missing value to make the ratios equivalent.', 'Fill in the blank: ? : 12 = 2 : 3', '8', '6', '9', '10', 'Set up proportion: x/12 = 2/3 → x = (2 × 12)/3 = 8.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Equivalent Ratios', 'Find the missing value to make the ratios equivalent.', 'Fill in the blank: 7 : ? = 21 : 15', '5', '4', '6', '7', 'Set up proportion: 7/x = 21/15 → x = (7 × 15)/21 = 5.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Equivalent Ratios', 'Find the missing value to make the ratios equivalent.', 'Fill in the blank: ? : 20 = 5 : 8', '12.5', '10', '15', '14', 'Set up proportion: x/20 = 5/8 → x = (5 × 20)/8 = 12.5.');



-- Solving Proportion Problems
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Proportion Problems', 'Solve for the unknown using proportions.', 'If 5 pencils cost 20, how much do 8 pencils cost?', '32', '30', '28', '35', 'Set up proportion: 5/20 = 8/x → x = (8×20)/5 = 32.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Proportion Problems', 'Solve for the unknown using proportions.', 'If 3 kg of apples cost 18, how much do 5 kg cost?', '30', '28', '32', '35', '3/18 = 5/x → x = (5×18)/3 = 30.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Proportion Problems', 'Solve for the unknown using proportions.', 'If 7 books cost 140, how much do 10 books cost?', '200', '180', '190', '210', '7/140 = 10/x → x = (10×140)/7 = 200.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Proportion Problems', 'Solve for the unknown using proportions.', 'If 4 pens cost 12, how much do 9 pens cost?', '27', '24', '30', '25', '4/12 = 9/x → x = (9×12)/4 = 27.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Solving Proportion Problems', 'Solve for the unknown using proportions.', 'If 6 kg of rice costs 54, how much do 9 kg cost?', '81', '80', '75', '90', '6/54 = 9/x → x = (9×54)/6 = 81.');


-- Applying Scale Factors
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Applying Scale Factors', 'Calculate the scaled measurement using the given scale factor.', 'A map uses a scale factor of 1:50. If the distance on the map is 4 cm, what is the real distance?', '200', '150', '250', '180', 'Real distance = map distance × scale factor = 4 × 50 = 200 cm.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Applying Scale Factors', 'Calculate the scaled measurement using the given scale factor.', 'A model car is built at 1:25 scale. If the real car is 400 cm long, how long is the model?', '16', '15', '20', '18', 'Model length = real length ÷ scale factor = 400 ÷ 25 = 16 cm.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Applying Scale Factors', 'Calculate the scaled measurement using the given scale factor.', 'A blueprint uses a scale of 1:100. If a wall is 3 m on the blueprint, what is the actual wall length?', '300', '250', '280', '320', 'Actual length = blueprint length × scale factor = 3 × 100 = 300 m.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Applying Scale Factors', 'Calculate the scaled measurement using the given scale factor.', 'A model ship is 2 m long using a 1:50 scale. What is the real ship length?', '100', '90', '120', '80', 'Real length = model length × scale factor = 2 × 50 = 100 m.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Applying Scale Factors', 'Calculate the scaled measurement using the given scale factor.', 'A model plane has a length of 30 cm at 1:75 scale. Find the real plane length.', '2250', '2200', '2300', '2000', 'Real length = 30 × 75 = 2250 cm.');


-- Direct Proportion Problems
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Direct Proportion Problems', 'Solve direct proportion problems: as one quantity increases, the other increases.', 'If 5 kg of apples cost 50, how much do 8 kg cost?', '80', '75', '70', '85', 'Direct proportion: 5/50 = 8/x → x = (50 × 8)/5 = 80.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Direct Proportion Problems', 'Solve direct proportion problems: as one quantity increases, the other increases.', 'If 4 pens cost 12, how much do 10 pens cost?', '30', '28', '25', '32', '4/12 = 10/x → x = (12 × 10)/4 = 30.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Direct Proportion Problems', 'Solve direct proportion problems: as one quantity increases, the other increases.', 'If 3 workers can finish a job in 6 days, how many days will 6 workers take?', '3', '4', '2', '5', 'More workers → less days: 3 × 6 = 6 × x → x = 3 days.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Direct Proportion Problems', 'Solve direct proportion problems: as one quantity increases, the other increases.', 'If 2 liters of paint cover 10 m², how much area can 5 liters cover?', '25', '20', '30', '22', 'Direct proportion: 2/10 = 5/x → x = (5 × 10)/2 = 25 m².'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Direct Proportion Problems', 'Solve direct proportion problems: as one quantity increases, the other increases.', 'If 6 books cost 90, how much do 15 books cost?', '225', '200', '210', '240', '6/90 = 15/x → x = (90 × 15)/6 = 225.');


-- Inverse Proportion Problems
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Inverse Proportion Problems', 'Solve problems where one quantity increases as the other decreases.', 'If 4 workers can complete a job in 12 days, how many days will 6 workers take?', '8', '6', '9', '10', 'Inverse proportion: 4 × 12 = 6 × x → x = 8 days.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Inverse Proportion Problems', 'Solve problems where one quantity increases as the other decreases.', 'If 5 machines produce 200 units in a day, how many units can 10 machines produce in a day?', '400', '350', '300', '450', 'Direct proportion for output per day: More machines → more units: 5/200 = 10/400.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Inverse Proportion Problems', 'Solve problems where one quantity increases as the other decreases.', 'If 3 painters can paint a wall in 9 hours, how long will 6 painters take?', '4.5', '5', '3', '6', 'Inverse proportion: 3 × 9 = 6 × x → x = 4.5 hours.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Inverse Proportion Problems', 'Solve problems where one quantity increases as the other decreases.', 'If 8 workers can complete a task in 16 days, how many days will 4 workers take?', '32', '24', '28', '30', 'Inverse proportion: 8 × 16 = 4 × x → x = 32 days.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Inverse Proportion Problems', 'Solve problems where one quantity increases as the other decreases.', 'If 12 machines produce 240 units in a day, how many units can 6 machines produce?', '120', '100', '150', '130', 'Inverse proportion: 12/240 = 6/120 → 6 machines produce 120 units.');


-- Dividing Amounts in a Given Ratio
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Dividing Amounts in a Given Ratio', 'Divide the total amount in the given ratio.', 'Divide 120 in the ratio 2:3.', '48 and 72', '50 and 70', '60 and 60', '40 and 80', 'Total parts = 2+3=5. Each part = 120/5=24. Share: 2×24=48, 3×24=72.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Dividing Amounts in a Given Ratio', 'Divide the total amount in the given ratio.', 'Divide 200 in the ratio 3:5.', '75 and 125', '80 and 120', '70 and 130', '60 and 140', 'Total parts = 3+5=8. Each part = 200/8=25. Share: 3×25=75, 5×25=125.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Dividing Amounts in a Given Ratio', 'Divide the total amount in the given ratio.', 'Divide 90 in the ratio 1:2.', '30 and 60', '25 and 65', '35 and 55', '40 and 50', 'Total parts = 1+2=3. Each part = 90/3=30. Share: 1×30=30, 2×30=60.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Dividing Amounts in a Given Ratio', 'Divide the total amount in the given ratio.', 'Divide 150 in the ratio 4:1.', '120 and 30', '100 and 50', '110 and 40', '125 and 25', 'Total parts = 4+1=5. Each part = 150/5=30. Share: 4×30=120, 1×30=30.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Dividing Amounts in a Given Ratio', 'Divide the total amount in the given ratio.', 'Divide 500 in the ratio 3:7.', '150 and 350', '200 and 300', '180 and 320', '160 and 340', 'Total parts = 3+7=10. Each part = 500/10=50. Share: 3×50=150, 7×50=350.');


-- Partnership / Profit Sharing Problems
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Partnership/Profit Sharing Problems', 'Divide profits according to the partners\' investment ratio.', 'A and B invest 3000 and 5000 respectively. Total profit is 800. Share of A?', '300', '400', '500', '350', 'Total parts = 3000+5000=8000. A’s share = (3000/8000)×800 = 300.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Partnership/Profit Sharing Problems', 'Divide profits according to the partners\' investment ratio.', 'A and B invest 2000 and 3000. Total profit is 1000. Share of B?', '600', '500', '400', '700', 'Total parts = 2000+3000=5000. B’s share = (3000/5000)×1000 = 600.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Partnership/Profit Sharing Problems', 'Divide profits according to the partners\' investment ratio.', 'A and B invest 4000 and 6000. Total profit is 1000. Share of A?', '400', '500', '350', '450', 'Total parts = 4000+6000=10000. A’s share = (4000/10000)×1000 = 400.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Partnership/Profit Sharing Problems', 'Divide profits according to the partners\' investment ratio.', 'A, B, C invest 2k, 3k, 5k. Total profit is 1000. Share of C?', '500', '400', '450', '550', 'Total parts = 2+3+5=10k. C’s share = (5/10)×1000 = 500.'),
('Arithmetic Fundamentals', 'Ratios and Proportions', 'Partnership/Profit Sharing Problems', 'Divide profits according to the partners\' investment ratio.', 'A and B invest 5k and 7k. Total profit is 2400. Share of A?', '1000', '1200', '900', '1100', 'Total parts = 5+7=12k. A’s share = (5/12)×2400 = 1000.');






