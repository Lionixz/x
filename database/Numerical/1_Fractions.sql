INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 'Add the fractions and simplify if necessary.', 'What is \\( \\frac{3}{4} + \\frac{2}{5} \\)?', '\\( \\frac{23}{20} \\)', '\\( \\frac{5}{9} \\)', '\\( \\frac{15}{20} \\)', '\\( \\frac{1}{2} \\)', 'Common denominator is 20: \\( \\frac{15}{20} + \\frac{8}{20} = \\frac{23}{20} \\).'),
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 'Subtract the fractions and simplify if necessary.', 'Calculate \\( \\frac{7}{8} - \\frac{2}{3} \\)', '\\( \\frac{5}{24} \\)', '\\( \\frac{5}{5} \\)', '\\( \\frac{21}{24} \\)', '\\( \\frac{1}{4} \\)', 'Common denominator is 24: \\( \\frac{21}{24} - \\frac{16}{24} = \\frac{5}{24} \\).'),
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 'Multiply the fractions and simplify if necessary.', 'What is \\( \\frac{3}{5} \\times \\frac{2}{7} \\)?', '\\( \\frac{6}{35} \\)', '\\( \\frac{5}{12} \\)', '\\( \\frac{3}{12} \\)', '\\( \\frac{2}{35} \\)', 'Multiply numerators: 3×2=6. Multiply denominators: 5×7=35. Result: \\( \\frac{6}{35} \\).'),
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 'Divide the fractions and simplify if necessary.', 'Calculate \\( \\frac{5}{6} \\div \\frac{3}{4} \\)', '\\( \\frac{10}{9} \\)', '\\( \\frac{15}{24} \\)', '\\( \\frac{9}{10} \\)', '\\( \\frac{5}{8} \\)', 'Flip divisor and multiply: \\( \\frac{5}{6} \\times \\frac{4}{3} = \\frac{20}{18} = \\frac{10}{9} \\).'),
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 'Convert the fraction to a decimal.', 'What is \\( \\frac{3}{8} \\) as a decimal?', '0.375', '0.38', '0.125', '0.3', '3 divided by 8: 8 goes into 30 (after decimal) 3 times (24), remainder 6. Bring down 0, 7 times (56), remainder 4. Bring down 0, 5 times (40). Result: 0.375.'),
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 'Convert the decimal to a simplified fraction.', 'What is 0.625 as a fraction?', '\\( \\frac{5}{8} \\)', '\\( \\frac{6}{25} \\)', '\\( \\frac{625}{1000} \\)', '\\( \\frac{62}{100} \\)', '0.625 = 625/1000. Simplify by dividing numerator and denominator by 125: \\( \\frac{5}{8} \\).'),
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 'Convert the improper fraction to a mixed number.', 'What is \\( \\frac{17}{3} \\) as a mixed number?', '5\\( \\frac{2}{3} \\)', '3\\( \\frac{2}{5} \\)', '5\\( \\frac{1}{3} \\)', '6\\( \\frac{1}{3} \\)', '17 ÷ 3 = 5 with remainder 2. Whole number is 5, fraction is \\( \\frac{2}{3} \\).'),
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 'Compare the fractions using >, <, or =.', 'Which symbol makes this true? \\( \\frac{7}{9} \\) ? \\( \\frac{5}{9} \\)', '>', '<', '=', '≥', 'With same denominators, compare numerators: 7 > 5, so \\( \\frac{7}{9} > \\frac{5}{9} \\).'),
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 'Compare the fractions using >, <, or =.', 'Which symbol makes this true? \\( \\frac{3}{4} \\) ? \\( \\frac{5}{8} \\)', '>', '<', '=', '≤', 'Convert to common denominator (8): \\( \\frac{3}{4} = \\frac{6}{8} \\). Now compare: \\( \\frac{6}{8} > \\frac{5}{8} \\).'),
('Arithmetic Fundamentals', 'Fractions', 'Ordering fractions and decimals from least to greatest or greatest to least', 'Arrange the fractions in ascending order.', 'Order from least to greatest: \\( \\frac{2}{5}, \\frac{1}{2}, \\frac{3}{10} \\)', '\\( \\frac{3}{10}, \\frac{2}{5}, \\frac{1}{2} \\)', '\\( \\frac{1}{2}, \\frac{2}{5}, \\frac{3}{10} \\)', '\\( \\frac{3}{10}, \\frac{1}{2}, \\frac{2}{5} \\)', '\\( \\frac{2}{5}, \\frac{3}{10}, \\frac{1}{2} \\)', 'Convert to common denominator (10): \\( \\frac{4}{10}, \\frac{5}{10}, \\frac{3}{10} \\). Ordered: \\( \\frac{3}{10} < \\frac{4}{10} < \\frac{5}{10} \\).');



-- Same denominators
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the fractions and simplify if needed.', 
 'What is \\( \\frac{5}{8} + \\frac{3}{8} \\)?', 
 '\\( 1 \\)', 
 '\\( \\frac{8}{8} \\)', 
 '\\( \\frac{15}{64} \\)', 
 '\\( \\frac{2}{4} \\)', 
 'Same denominators: \\( \\frac{5+3}{8} = \\frac{8}{8} = 1 \\).');

-- Different denominators
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the fractions.', 
 'Calculate \\( \\frac{3}{7} + \\frac{2}{5} \\)', 
 '\\( \\frac{29}{35} \\)', 
 '\\( \\frac{5}{12} \\)', 
 '\\( \\frac{6}{35} \\)', 
 '\\( \\frac{1}{2} \\)', 
 'Common denominator 35: \\( \\frac{15}{35} + \\frac{14}{35} = \\frac{29}{35} \\).');

-- Mixed numbers
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the mixed numbers.', 
 'What is \\( 2\\frac{1}{4} + 3\\frac{1}{3} \\)?', 
 '\\( 5\\frac{7}{12} \\)', 
 '\\( 5\\frac{1}{2} \\)', 
 '\\( 5\\frac{2}{7} \\)', 
 '\\( 6\\frac{1}{12} \\)', 
 'Convert: \\( \\frac{9}{4} + \\frac{10}{3} = \\frac{27}{12} + \\frac{40}{12} = \\frac{67}{12} = 5\\frac{7}{12} \\).');

-- Three fractions
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the three fractions.', 
 'What is \\( \\frac{1}{4} + \\frac{1}{5} + \\frac{1}{6} \\)?', 
 '\\( \\frac{37}{60} \\)', 
 '\\( \\frac{3}{15} \\)', 
 '\\( \\frac{1}{5} \\)', 
 '\\( \\frac{23}{60} \\)', 
 'LCM of 4,5,6 is 60: \\( \\frac{15}{60} + \\frac{12}{60} + \\frac{10}{60} = \\frac{37}{60} \\).');

-- With whole number
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the numbers.', 
 'What is \\( 5 + \\frac{2}{3} + \\frac{1}{6} \\)?', 
 '\\( 5\\frac{5}{6} \\)', 
 '\\( 5\\frac{1}{2} \\)', 
 '\\( 5\\frac{3}{9} \\)', 
 '\\( 6\\frac{1}{6} \\)', 
 '\\( 5 + \\frac{4}{6} + \\frac{1}{6} = 5 + \\frac{5}{6} = 5\\frac{5}{6} \\).');

-- Unlike denominators (advanced)
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the fractions.', 
 'Calculate \\( \\frac{5}{12} + \\frac{7}{18} \\)', 
 '\\( \\frac{29}{36} \\)', 
 '\\( \\frac{12}{30} \\)', 
 '\\( \\frac{35}{216} \\)', 
 '\\( \\frac{1}{2} \\)', 
 'LCM of 12,18 is 36: \\( \\frac{15}{36} + \\frac{14}{36} = \\frac{29}{36} \\).');

-- With negative fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the fractions.', 
 'What is \\( \\frac{3}{5} + \\left(-\\frac{1}{4}\\right) \\)?', 
 '\\( \\frac{7}{20} \\)', 
 '\\( \\frac{2}{9} \\)', 
 '\\( -\\frac{7}{20} \\)', 
 '\\( \\frac{4}{9} \\)', 
 'Common denominator 20: \\( \\frac{12}{20} - \\frac{5}{20} = \\frac{7}{20} \\).');

-- Mixed with improper
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the numbers.', 
 'What is \\( 1\\frac{2}{3} + \\frac{7}{4} \\)?', 
 '\\( 3\\frac{5}{12} \\)', 
 '\\( 2\\frac{1}{4} \\)', 
 '\\( 3\\frac{1}{2} \\)', 
 '\\( 2\\frac{5}{7} \\)', 
 'Convert: \\( \\frac{5}{3} + \\frac{7}{4} = \\frac{20}{12} + \\frac{21}{12} = \\frac{41}{12} = 3\\frac{5}{12} \\).');

-- Simple same denominator
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the fractions.', 
 'What is \\( \\frac{3}{10} + \\frac{4}{10} \\)?', 
 '\\( \\frac{7}{10} \\)', 
 '\\( \\frac{7}{20} \\)', 
 '\\( \\frac{1}{2} \\)', 
 '\\( \\frac{3}{5} \\)', 
 'Same denominator: \\( \\frac{3+4}{10} = \\frac{7}{10} \\).');

-- Different denominators (large numbers)
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Addition of fractions (same and different denominators)', 
 'Add the fractions.', 
 'Calculate \\( \\frac{7}{15} + \\frac{5}{12} \\)', 
 '\\( \\frac{53}{60} \\)', 
 '\\( \\frac{12}{27} \\)', 
 '\\( \\frac{35}{180} \\)', 
 '\\( \\frac{1}{2} \\)', 
 'LCM of 15,12 is 60: \\( \\frac{28}{60} + \\frac{25}{60} = \\frac{53}{60} \\).');

 -- Same denominators
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the fractions.', 
 'What is \\( \\frac{7}{9} - \\frac{2}{9} \\)?', 
 '\\( \\frac{5}{9} \\)', 
 '\\( \\frac{5}{0} \\)', 
 '\\( \\frac{9}{9} \\)', 
 '\\( \\frac{1}{3} \\)', 
 'Same denominators: \\( \\frac{7-2}{9} = \\frac{5}{9} \\).');

-- Different denominators
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the fractions.', 
 'Calculate \\( \\frac{4}{5} - \\frac{1}{3} \\)', 
 '\\( \\frac{7}{15} \\)', 
 '\\( \\frac{3}{2} \\)', 
 '\\( \\frac{3}{15} \\)', 
 '\\( \\frac{1}{2} \\)', 
 'Common denominator 15: \\( \\frac{12}{15} - \\frac{5}{15} = \\frac{7}{15} \\).');

-- Mixed numbers
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the mixed numbers.', 
 'What is \\( 4\\frac{1}{2} - 2\\frac{2}{3} \\)?', 
 '\\( 1\\frac{5}{6} \\)', 
 '\\( 2\\frac{1}{6} \\)', 
 '\\( 1\\frac{1}{3} \\)', 
 '\\( 2\\frac{1}{2} \\)', 
 'Convert: \\( \\frac{9}{2} - \\frac{8}{3} = \\frac{27}{6} - \\frac{16}{6} = \\frac{11}{6} = 1\\frac{5}{6} \\).');

-- Whole number minus fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the fraction from the whole number.', 
 'What is \\( 3 - \\frac{5}{6} \\)?', 
 '\\( 2\\frac{1}{6} \\)', 
 '\\( 3\\frac{5}{6} \\)', 
 '\\( 2\\frac{5}{6} \\)', 
 '\\( \\frac{13}{6} \\)', 
 '\\( 3 = \\frac{18}{6}, \\frac{18}{6} - \\frac{5}{6} = \\frac{13}{6} = 2\\frac{1}{6} \\).');

-- Three terms
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Perform the subtraction.', 
 'Calculate \\( \\frac{5}{6} - \\frac{1}{4} - \\frac{1}{12} \\)', 
 '\\( \\frac{1}{2} \\)', 
 '\\( \\frac{3}{12} \\)', 
 '\\( \\frac{5}{12} \\)', 
 '\\( \\frac{1}{3} \\)', 
 'Common denominator 12: \\( \\frac{10}{12} - \\frac{3}{12} - \\frac{1}{12} = \\frac{6}{12} = \\frac{1}{2} \\).');

-- Negative result
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the fractions.', 
 'What is \\( \\frac{2}{5} - \\frac{3}{4} \\)?', 
 '\\( -\\frac{7}{20} \\)', 
 '\\( \\frac{1}{20} \\)', 
 '\\( -\\frac{1}{2} \\)', 
 '\\( \\frac{7}{20} \\)', 
 'Common denominator 20: \\( \\frac{8}{20} - \\frac{15}{20} = -\\frac{7}{20} \\).');

-- Mixed number regrouping
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the mixed numbers.', 
 'What is \\( 5\\frac{1}{4} - 2\\frac{3}{5} \\)?', 
 '\\( 2\\frac{13}{20} \\)', 
 '\\( 3\\frac{7}{20} \\)', 
 '\\( 2\\frac{1}{2} \\)', 
 '\\( 3\\frac{3}{20} \\)', 
 'Convert: \\( 5\\frac{5}{20} - 2\\frac{12}{20} = 4\\frac{25}{20} - 2\\frac{12}{20} = 2\\frac{13}{20} \\).');

-- Unlike denominators (advanced)
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the fractions.', 
 'Calculate \\( \\frac{11}{14} - \\frac{3}{8} \\)', 
 '\\( \\frac{23}{56} \\)', 
 '\\( \\frac{8}{22} \\)', 
 '\\( \\frac{14}{56} \\)', 
 '\\( \\frac{1}{4} \\)', 
 'LCM of 14,8 is 56: \\( \\frac{44}{56} - \\frac{21}{56} = \\frac{23}{56} \\).');

-- Simple subtraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the fractions.', 
 'What is \\( \\frac{5}{6} - \\frac{1}{6} \\)?', 
 '\\( \\frac{2}{3} \\)', 
 '\\( \\frac{4}{6} \\)', 
 '\\( \\frac{1}{3} \\)', 
 '\\( \\frac{4}{0} \\)', 
 'Same denominators: \\( \\frac{5-1}{6} = \\frac{4}{6} = \\frac{2}{3} \\).');

-- Fraction from whole number
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Subtraction of fractions (same and different denominators)', 
 'Subtract the fraction.', 
 'What is \\( 7 - \\frac{3}{8} \\)?', 
 '\\( 6\\frac{5}{8} \\)', 
 '\\( 7\\frac{3}{8} \\)', 
 '\\( 6\\frac{3}{8} \\)', 
 '\\( \\frac{53}{8} \\)', 
 '\\( 7 = \\frac{56}{8}, \\frac{56}{8} - \\frac{3}{8} = \\frac{53}{8} = 6\\frac{5}{8} \\).');

 -- Simple multiplication
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the fractions.', 
 'What is \\( \\frac{2}{3} \\times \\frac{4}{5} \\)?', 
 '\\( \\frac{8}{15} \\)', 
 '\\( \\frac{6}{8} \\)', 
 '\\( \\frac{8}{8} \\)', 
 '\\( \\frac{1}{2} \\)', 
 'Numerators: 2×4=8, denominators: 3×5=15. Result: \\( \\frac{8}{15} \\).');

-- Whole number and fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the numbers.', 
 'What is \\( 6 \\times \\frac{3}{8} \\)?', 
 '\\( \\frac{9}{4} \\)', 
 '\\( \\frac{18}{8} \\)', 
 '\\( 2 \\frac{1}{2} \\)', 
 '\\( 1 \\frac{3}{4} \\)', 
 '\\( 6 \\times \\frac{3}{8} = \\frac{18}{8} = \\frac{9}{4} \\).');

-- Mixed numbers
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the mixed numbers.', 
 'What is \\( 1\\frac{1}{2} \\times 2\\frac{2}{3} \\)?', 
 '\\( 4 \\)', 
 '\\( 3\\frac{1}{3} \\)', 
 '\\( 4\\frac{1}{6} \\)', 
 '\\( 2\\frac{2}{6} \\)', 
 'Convert: \\( \\frac{3}{2} \\times \\frac{8}{3} = \\frac{24}{6} = 4 \\).');

-- Three fractions
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the fractions.', 
 'What is \\( \\frac{2}{5} \\times \\frac{3}{7} \\times \\frac{5}{6} \\)?', 
 '\\( \\frac{1}{7} \\)', 
 '\\( \\frac{10}{18} \\)', 
 '\\( \\frac{30}{210} \\)', 
 '\\( \\frac{3}{7} \\)', 
 '\\( \\frac{2}{5} \\times \\frac{3}{7} \\times \\frac{5}{6} = \\frac{30}{210} = \\frac{1}{7} \\).');

-- Fraction and decimal
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the numbers.', 
 'What is \\( \\frac{3}{4} \\times 0.5 \\)?', 
 '\\( 0.375 \\)', 
 '\\( 0.2 \\)', 
 '\\( 0.75 \\)', 
 '\\( 0.125 \\)', 
 '\\( \\frac{3}{4} = 0.75, 0.75 \\times 0.5 = 0.375 \\).');

-- With simplification
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply and simplify.', 
 'What is \\( \\frac{9}{10} \\times \\frac{5}{6} \\)?', 
 '\\( \\frac{3}{4} \\)', 
 '\\( \\frac{45}{60} \\)', 
 '\\( \\frac{14}{16} \\)', 
 '\\( \\frac{1}{2} \\)', 
 '\\( \\frac{9}{10} \\times \\frac{5}{6} = \\frac{45}{60} = \\frac{3}{4} \\).');

-- Negative fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the fractions.', 
 'What is \\( \\frac{3}{8} \\times \\left(-\\frac{2}{5}\\right) \\)?', 
 '\\( -\\frac{3}{20} \\)', 
 '\\( -\\frac{6}{40} \\)', 
 '\\( \\frac{5}{13} \\)', 
 '\\( -\\frac{1}{4} \\)', 
 'Numerators: 3×(-2)=-6, denominators: 8×5=40. Result: \\( -\\frac{6}{40} = -\\frac{3}{20} \\).');

-- Mixed with whole number
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the numbers.', 
 'What is \\( 3 \\times 2\\frac{1}{3} \\)?', 
 '\\( 7 \\)', 
 '\\( 6\\frac{1}{3} \\)', 
 '\\( 5\\frac{2}{3} \\)', 
 '\\( 7\\frac{1}{3} \\)', 
 'Convert: \\( 3 \\times \\frac{7}{3} = 7 \\).');

-- Simple product
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the fractions.', 
 'What is \\( \\frac{1}{2} \\times \\frac{1}{3} \\)?', 
 '\\( \\frac{1}{6} \\)', 
 '\\( \\frac{2}{5} \\)', 
 '\\( \\frac{1}{5} \\)', 
 '\\( \\frac{2}{6} \\)', 
 'Numerators: 1×1=1, denominators: 2×3=6. Result: \\( \\frac{1}{6} \\).');

-- Large numbers
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Multiplication of fractions', 
 'Multiply the fractions.', 
 'What is \\( \\frac{7}{12} \\times \\frac{9}{14} \\)?', 
 '\\( \\frac{3}{8} \\)', 
 '\\( \\frac{63}{168} \\)', 
 '\\( \\frac{16}{26} \\)', 
 '\\( \\frac{1}{3} \\)', 
 '\\( \\frac{7}{12} \\times \\frac{9}{14} = \\frac{63}{168} = \\frac{3}{8} \\).');

 -- Simple division
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the fractions.', 
 'What is \\( \\frac{3}{4} \\div \\frac{2}{5} \\)?', 
 '\\( \\frac{15}{8} \\)', 
 '\\( \\frac{6}{20} \\)', 
 '\\( \\frac{3}{10} \\)', 
 '\\( 1\\frac{7}{8} \\)', 
 'Reciprocal and multiply: \\( \\frac{3}{4} \\times \\frac{5}{2} = \\frac{15}{8} \\).');

-- Whole number divided by fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the numbers.', 
 'What is \\( 5 \\div \\frac{1}{3} \\)?', 
 '\\( 15 \\)', 
 '\\( \\frac{5}{3} \\)', 
 '\\( 1\\frac{2}{3} \\)', 
 '\\( 5\\frac{1}{3} \\)', 
 'Reciprocal: \\( 5 \\times 3 = 15 \\).');

-- Fraction divided by whole number
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the fraction by the whole number.', 
 'What is \\( \\frac{3}{8} \\div 4 \\)?', 
 '\\( \\frac{3}{32} \\)', 
 '\\( \\frac{12}{8} \\)', 
 '\\( \\frac{3}{2} \\)', 
 '\\( 0.375 \\)', 
 'Reciprocal: \\( \\frac{3}{8} \\times \\frac{1}{4} = \\frac{3}{32} \\).');

-- Mixed numbers
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the mixed numbers.', 
 'What is \\( 2\\frac{1}{2} \\div 1\\frac{1}{4} \\)?', 
 '\\( 2 \\)', 
 '\\( 2\\frac{1}{2} \\)', 
 '\\( 1\\frac{1}{2} \\)', 
 '\\( 3\\frac{1}{4} \\)', 
 'Convert: \\( \\frac{5}{2} \\div \\frac{5}{4} = \\frac{5}{2} \\times \\frac{4}{5} = \\frac{20}{10} = 2 \\).');

-- Three fractions
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Perform the division.', 
 'What is \\( \\frac{4}{5} \\div \\frac{2}{3} \\div \\frac{1}{2} \\)?', 
 '\\( \\frac{12}{5} \\)', 
 '\\( \\frac{4}{15} \\)', 
 '\\( \\frac{8}{30} \\)', 
 '\\( \\frac{5}{12} \\)', 
 'First: \\( \\frac{4}{5} \\times \\frac{3}{2} = \\frac{12}{10} = \\frac{6}{5} \\), then \\( \\frac{6}{5} \\times 2 = \\frac{12}{5} \\).');

-- Fraction division with decimal
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the numbers.', 
 'What is \\( \\frac{3}{5} \\div 0.6 \\)?', 
 '\\( 1 \\)', 
 '\\( 0.5 \\)', 
 '\\( 1.2 \\)', 
 '\\( 0.6 \\)', 
 '\\( 0.6 = \\frac{3}{5}, \\frac{3}{5} \\div \\frac{3}{5} = 1 \\).');

-- Negative fractions
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the fractions.', 
 'What is \\( -\\frac{2}{3} \\div \\frac{4}{9} \\)?', 
 '\\( -1.5 \\)', 
 '\\( -\\frac{8}{27} \\)', 
 '\\( \\frac{6}{12} \\)', 
 '\\( -0.6 \\)', 
 'Reciprocal: \\( -\\frac{2}{3} \\times \\frac{9}{4} = -\\frac{18}{12} = -1.5 \\).');

-- Mixed number division
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the mixed numbers.', 
 'What is \\( 3\\frac{1}{3} \\div 2\\frac{1}{2} \\)?', 
 '\\( \\frac{4}{3} \\)', 
 '\\( 1\\frac{1}{3} \\)', 
 '\\( \\frac{10}{15} \\)', 
 '\\( 1.2 \\)', 
 'Convert: \\( \\frac{10}{3} \\div \\frac{5}{2} = \\frac{10}{3} \\times \\frac{2}{5} = \\frac{20}{15} = \\frac{4}{3} \\).');

-- Simple division
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the fractions.', 
 'What is \\( \\frac{1}{2} \\div \\frac{1}{4} \\)?', 
 '\\( 2 \\)', 
 '\\( \\frac{1}{8} \\)', 
 '\\( \\frac{4}{2} \\)', 
 '\\( 0.5 \\)', 
 'Reciprocal: \\( \\frac{1}{2} \\times 4 = 2 \\).');

-- Complex division
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Division of fractions', 
 'Divide the fractions.', 
 'What is \\( \\frac{5}{6} \\div \\frac{10}{12} \\)?', 
 '\\( 1 \\)', 
 '\\( \\frac{50}{72} \\)', 
 '\\( 1.2 \\)', 
 '\\( \\frac{2}{3} \\)', 
 '\\( \\frac{5}{6} \\times \\frac{12}{10} = \\frac{60}{60} = 1 \\).');


 -- Terminating decimal
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{3}{5} \\) as a decimal?', 
 '0.6', 
 '0.3', 
 '0.5', 
 '0.35', 
'3 divided by 5 = 0.6');

-- Repeating decimal
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{2}{3} \\) as a decimal?', 
 '0.\overline{6}', 
 '0.66', 
 '0.6', 
 '0.67', 
'2 ÷ 3 = 0.666... = 0.\overline{6}');

-- Hundredths place
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{7}{25} \\) as a decimal?', 
 '0.28', 
 '0.275', 
 '0.3', 
 '0.35', 
'7/25 = 28/100 = 0.28');

-- Thousandths place
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{5}{16} \\) as a decimal?', 
 '0.3125', 
 '0.3', 
 '0.32', 
 '0.3', 
'5 ÷ 16 = 0.3125');

-- Mixed number conversion
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( 2\\frac{3}{8} \\) as a decimal?', 
 '2.375', 
 '2.3', 
 '2.4', 
 '2.38', 
'3/8 = 0.375, so 2 + 0.375 = 2.375');

-- Improper fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{9}{4} \\) as a decimal?', 
 '2.25', 
 '2.5', 
 '2.4', 
 '0.225', 
'9 ÷ 4 = 2.25');

-- Simple fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{1}{8} \\) as a decimal?', 
 '0.125', 
 '0.18', 
 '0.12', 
 '0.25', 
'1 ÷ 8 = 0.125');

-- Sixths fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{5}{6} \\) as a decimal?', 
 '0.8\overline{3}', 
 '0.83', 
 '0.833', 
 '0.8', 
'5 ÷ 6 = 0.8333... = 0.8\overline{3}');

-- Twelfths fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{7}{12} \\) as a decimal?', 
 '0.58\overline{3}', 
 '0.583', 
 '0.58', 
 '0.6', 
'7 ÷ 12 = 0.58333... = 0.58\overline{3}');

-- Fifths fraction
INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting fractions to decimals', 
 'Convert to decimal.', 
 'What is \\( \\frac{4}{5} \\) as a decimal?', 
 '0.8', 
 '0.4', 
 '0.6', 
 '0.45', 
'4 ÷ 5 = 0.8');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 0.16 as a fraction?', 
 '\\( \\frac{4}{25} \\)', 
 '\\( \\frac{16}{100} \\)', 
 '\\( \\frac{8}{50} \\)', 
 '\\( \\frac{2}{13} \\)', 
 '0.16 = 16/100 = 4/25 after simplifying by 4.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 0.125 as a fraction?', 
 '\\( \\frac{1}{8} \\)', 
 '\\( \\frac{125}{1000} \\)', 
 '\\( \\frac{5}{40} \\)', 
 '\\( \\frac{3}{24} \\)', 
 '0.125 = 125/1000 = 1/8 after simplifying by 125.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 0.64 as a fraction?', 
 '\\( \\frac{16}{25} \\)', 
 '\\( \\frac{64}{100} \\)', 
 '\\( \\frac{32}{50} \\)', 
 '\\( \\frac{8}{13} \\)', 
 '0.64 = 64/100 = 16/25 after simplifying by 4.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 1.75 as a fraction?', 
 '\\( \\frac{7}{4} \\)', 
 '\\( \\frac{175}{100} \\)', 
 '\\( 1\\frac{3}{4} \\)', 
 '\\( \\frac{35}{20} \\)', 
 '1.75 = 175/100 = 7/4 after simplifying by 25.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 0.333... as a fraction?', 
 '\\( \\frac{1}{3} \\)', 
 '\\( \\frac{3}{10} \\)', 
 '\\( \\frac{33}{100} \\)', 
 '\\( \\frac{333}{1000} \\)', 
 '0.333... = 1/3, since it repeats every digit.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 2.5 as a fraction?', 
 '\\( \\frac{5}{2} \\)', 
 '\\( 2\\frac{1}{2} \\)', 
 '\\( \\frac{25}{10} \\)', 
 '\\( \\frac{5}{4} \\)', 
 '2.5 = 25/10 = 5/2 after simplifying by 5.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 0.08 as a fraction?', 
 '\\( \\frac{2}{25} \\)', 
 '\\( \\frac{8}{100} \\)', 
 '\\( \\frac{4}{50} \\)', 
 '\\( \\frac{1}{12} \\)', 
 '0.08 = 8/100 = 2/25 after simplifying by 4.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 0.375 as a fraction?', 
 '\\( \\frac{3}{8} \\)', 
 '\\( \\frac{375}{1000} \\)', 
 '\\( \\frac{15}{40} \\)', 
 '\\( \\frac{6}{16} \\)', 
 '0.375 = 375/1000 = 3/8 after simplifying by 125.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 0.95 as a fraction?', 
 '\\( \\frac{19}{20} \\)', 
 '\\( \\frac{95}{100} \\)', 
 '\\( \\frac{9}{10} \\)', 
 '\\( \\frac{38}{40} \\)', 
 '0.95 = 95/100 = 19/20 after simplifying by 5.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting decimals to fractions', 
 'Convert to simplified fraction.', 
 'What is 3.6 as a fraction?', 
 '\\( \\frac{18}{5} \\)', 
 '\\( 3\\frac{3}{5} \\)', 
 '\\( \\frac{36}{10} \\)', 
 '\\( \\frac{9}{2} \\)', 
 '3.6 = 36/10 = 18/5 after simplifying by 2.');

 INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to mixed number.', 
 'What is \\( \\frac{22}{7} \\) as a mixed number?', 
 '3\\( \\frac{1}{7} \\)', 
 '3\\( \\frac{3}{7} \\)', 
 '2\\( \\frac{8}{7} \\)', 
 '7\\( \\frac{1}{3} \\)', 
 '22 ÷ 7 = 3 with remainder 1. So 3 and 1/7.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to improper fraction.', 
 'What is 4\\( \\frac{5}{6} \\) as an improper fraction?', 
 '\\( \\frac{29}{6} \\)', 
 '\\( \\frac{24}{6} \\)', 
 '\\( \\frac{20}{6} \\)', 
 '\\( \\frac{9}{6} \\)', 
 '4 × 6 = 24, 24 + 5 = 29. So 29/6.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to mixed number.', 
 'What is \\( \\frac{35}{8} \\) as a mixed number?', 
 '4\\( \\frac{3}{8} \\)', 
 '3\\( \\frac{11}{8} \\)', 
 '4\\( \\frac{5}{8} \\)', 
 '8\\( \\frac{3}{4} \\)', 
 '35 ÷ 8 = 4 with remainder 3. So 4 and 3/8.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to improper fraction.', 
 'What is 5\\( \\frac{3}{4} \\) as an improper fraction?', 
 '\\( \\frac{23}{4} \\)', 
 '\\( \\frac{15}{4} \\)', 
 '\\( \\frac{20}{4} \\)', 
 '\\( \\frac{53}{4} \\)', 
 '5 × 4 = 20, 20 + 3 = 23. So 23/4.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to mixed number.', 
 'What is \\( \\frac{40}{9} \\) as a mixed number?', 
 '4\\( \\frac{4}{9} \\)', 
 '4\\( \\frac{5}{9} \\)', 
 '3\\( \\frac{13}{9} \\)', 
 '9\\( \\frac{4}{9} \\)', 
 '40 ÷ 9 = 4 with remainder 4. So 4 and 4/9.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to improper fraction.', 
 'What is 7\\( \\frac{2}{5} \\) as an improper fraction?', 
 '\\( \\frac{37}{5} \\)', 
 '\\( \\frac{35}{5} \\)', 
 '\\( \\frac{14}{5} \\)', 
 '\\( \\frac{72}{5} \\)', 
 '7 × 5 = 35, 35 + 2 = 37. So 37/5.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to mixed number.', 
 'What is \\( \\frac{55}{6} \\) as a mixed number?', 
 '9\\( \\frac{1}{6} \\)', 
 '8\\( \\frac{7}{6} \\)', 
 '9\\( \\frac{5}{6} \\)', 
 '6\\( \\frac{5}{6} \\)', 
 '55 ÷ 6 = 9 with remainder 1. So 9 and 1/6.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to improper fraction.', 
 'What is 3\\( \\frac{7}{8} \\) as an improper fraction?', 
 '\\( \\frac{31}{8} \\)', 
 '\\( \\frac{24}{8} \\)', 
 '\\( \\frac{21}{8} \\)', 
 '\\( \\frac{37}{8} \\)', 
 '3 × 8 = 24, 24 + 7 = 31. So 31/8.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to mixed number.', 
 'What is \\( \\frac{72}{10} \\) as a mixed number?', 
 '7\\( \\frac{1}{5} \\)', 
 '7\\( \\frac{2}{10} \\)', 
 '7\\( \\frac{1}{2} \\)', 
 '10\\( \\frac{2}{10} \\)', 
 '72 ÷ 10 = 7 with remainder 2. Simplified: 7 and 2/10 = 7 and 1/5.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Converting improper fractions to mixed numbers and vice versa', 
 'Convert to improper fraction.', 
 'What is 6\\( \\frac{5}{9} \\) as an improper fraction?', 
 '\\( \\frac{59}{9} \\)', 
 '\\( \\frac{54}{9} \\)', 
 '\\( \\frac{30}{9} \\)', 
 '\\( \\frac{65}{9} \\)', 
 '6 × 9 = 54, 54 + 5 = 59. So 59/9.');
 INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{11}{12} \\) ? \\( \\frac{7}{12} \\)', 
 '>', 
 '<', 
 '=', 
 '≥', 
 'Same denominator: 11 > 7, so \\( \\frac{11}{12} > \\frac{7}{12} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{3}{5} \\) ? \\( \\frac{3}{5} \\)', 
 '=', 
 '>', 
 '<', 
 '≠', 
 'Same numerator and denominator: fractions are equal.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{2}{9} \\) ? \\( \\frac{5}{9} \\)', 
 '<', 
 '>', 
 '=', 
 '≤', 
 'Same denominator: 2 < 5, so \\( \\frac{2}{9} < \\frac{5}{9} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{8}{15} \\) ? \\( \\frac{8}{15} \\)', 
 '=', 
 '>', 
 '<', 
 '≥', 
 'Same numerator and denominator: fractions are equal.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{13}{20} \\) ? \\( \\frac{11}{20} \\)', 
 '>', 
 '<', 
 '=', 
 '≠', 
 'Same denominator: 13 > 11, so \\( \\frac{13}{20} > \\frac{11}{20} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{4}{7} \\) ? \\( \\frac{6}{7} \\)', 
 '<', 
 '>', 
 '=', 
 '≥', 
 'Same denominator: 4 < 6, so \\( \\frac{4}{7} < \\frac{6}{7} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{9}{10} \\) ? \\( \\frac{10}{10} \\)', 
 '<', 
 '>', 
 '=', 
 '≥', 
 'Same denominator: 9 < 10, so \\( \\frac{9}{10} < 1 \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{15}{16} \\) ? \\( \\frac{14}{16} \\)', 
 '>', 
 '<', 
 '=', 
 '≤', 
 'Same denominator: 15 > 14, so \\( \\frac{15}{16} > \\frac{14}{16} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{5}{8} \\) ? \\( \\frac{5}{8} \\)', 
 '=', 
 '>', 
 '<', 
 '≠', 
 'Same numerator and denominator: fractions are equal.');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with like denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{7}{9} \\) ? \\( \\frac{8}{9} \\)', 
 '<', 
 '>', 
 '=', 
 '≥', 
 'Same denominator: 7 < 8, so \\( \\frac{7}{9} < \\frac{8}{9} \\).');


 INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{3}{4} \\) ? \\( \\frac{5}{6} \\)', 
 '<', 
 '>', 
 '=', 
 '≤', 
 'Common denominator 12: \\( \\frac{9}{12} < \\frac{10}{12} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{2}{3} \\) ? \\( \\frac{3}{5} \\)', 
 '>', 
 '<', 
 '=', 
 '≥', 
 'Common denominator 15: \\( \\frac{10}{15} > \\frac{9}{15} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{7}{8} \\) ? \\( \\frac{5}{6} \\)', 
 '>', 
 '<', 
 '=', 
 '≤', 
 'Common denominator 24: \\( \\frac{21}{24} > \\frac{20}{24} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{4}{9} \\) ? \\( \\frac{1}{2} \\)', 
 '<', 
 '>', 
 '=', 
 '≥', 
 'Common denominator 18: \\( \\frac{8}{18} < \\frac{9}{18} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{5}{12} \\) ? \\( \\frac{3}{8} \\)', 
 '>', 
 '<', 
 '=', 
 '≠', 
 'Common denominator 24: \\( \\frac{10}{24} > \\frac{9}{24} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{2}{5} \\) ? \\( \\frac{7}{15} \\)', 
 '<', 
 '>', 
 '=', 
 '≤', 
 'Common denominator 15: \\( \\frac{6}{15} < \\frac{7}{15} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{3}{7} \\) ? \\( \\frac{5}{14} \\)', 
 '>', 
 '<', 
 '=', 
 '≥', 
 'Common denominator 14: \\( \\frac{6}{14} > \\frac{5}{14} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{8}{11} \\) ? \\( \\frac{5}{7} \\)', 
 '>', 
 '<', 
 '=', 
 '≤', 
 'Common denominator 77: \\( \\frac{56}{77} > \\frac{55}{77} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{4}{15} \\) ? \\( \\frac{1}{4} \\)', 
 '>', 
 '<', 
 '=', 
 '≠', 
 'Common denominator 60: \\( \\frac{16}{60} > \\frac{15}{60} \\).');

INSERT INTO numerical (category, type, sub_type, instruction, question, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES 
('Arithmetic Fundamentals', 'Fractions', 'Comparing fractions with unlike denominators', 
 'Compare using >, <, or =.', 
 'Which symbol makes this true? \\( \\frac{9}{10} \\) ? \\( \\frac{11}{12} \\)', 
 '<', 
 '>', 
 '=', 
 '≥', 
 'Common denominator 60: \\( \\frac{54}{60} < \\frac{55}{60} \\).');

 