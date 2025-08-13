
INSERT INTO analytical (category, type, sub_type, instruction, question, chart_data, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Data Interpretation', 'Data Chart', 'bar', 'Use the chart data below to answer the question.', 'Which branch shows alternating monthly customer turnout?', '{"labels": ["Jan", "Feb", "Mar", "Apr", "May"], "datasets": [{"label": "Downtown Branch", "data": [180, 220, 180, 220, 180], "backgroundColor": "#AB47BC"}, {"label": "Harbor Branch", "data": [190, 200, 210, 220, 230], "backgroundColor": "#FFA726"}]}', 'Downtown Branch', 'Harbor Branch', 'Metro Branch', 'Central Branch', 'Downtown Branch alternates between 180 and 220 customers monthly.');



INSERT INTO analytical (category, type, sub_type, instruction, question, chart_data, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Data Interpretation', 'Data Chart', 'line', 'Use the chart data below to answer the question.', 'When did Tesla Model 3 sales surpass Model Y sales?', '{ "labels": ["Q1","Q2","Q3","Q4"], "datasets": [{ "label": "Model 3", "data": [85,92,88,95], "borderColor": "#e53935", "fill": false }, { "label": "Model Y", "data": [78,85,92,90], "borderColor": "#1e88e5", "fill": false }] }', 'Q2', 'Q3', 'Q4', 'Q1', 'Model 3 sales (92k) exceeded Model Y (85k) in Q2.');



INSERT INTO analytical (category, type, sub_type, instruction, question, chart_data, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Data Interpretation', 'Data Chart', 'pie', 'Use the chart data below to answer the question.', 'Identify the sector with the largest market share.', '{ "labels": ["Tech", "Healthcare", "Finance"], "datasets": [{ "data": [45, 30, 25], "backgroundColor": ["#FF6384", "#36A2EB", "#FFCE56"] }] }', 'Tech', 'Healthcare', 'Finance', 'Equal', 'Tech has the highest share (45%).');



INSERT INTO analytical (category, type, sub_type, instruction, question, chart_data, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Data Interpretation', 'Data Chart', 'doughnut', 'Use the chart data below to answer the question.', 'Find out which platform generated the least traffic.', '{ "labels": ["Google", "Facebook", "Twitter", "LinkedIn"], "datasets": [{ "data": [300, 200, 100, 400], "backgroundColor": ["#4BC0C0", "#FF6384", "#FFCE56", "#36A2EB"] }] }', 'Twitter', 'Facebook', 'Google', 'LinkedIn', 'Twitter has the smallest slice (100 visits).');



INSERT INTO analytical (category, type, sub_type, instruction, question, chart_data, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Data Interpretation', 'Data Chart', 'radar', 'Use the chart data below to answer the question.', 'Identify the weakest skill for Candidate A based on the ratings.', '{ "labels": ["Communication", "Technical", "Leadership", "Teamwork", "Creativity"], "datasets": [{ "label": "Candidate A", "data": [4, 5, 3, 4, 5], "borderColor": "#FF6384" }] }', 'Leadership', 'Technical', 'Creativity', 'Teamwork', 'Leadership has the lowest rating (3).');



INSERT INTO analytical (category, type, sub_type, instruction, question, chart_data, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Data Interpretation', 'Data Chart', 'polarArea', 'Use the chart data below to answer the question.', 'Determine which department received the highest funding amount.', '{ "labels": ["R&D", "Marketing", "HR", "Operations"], "datasets": [{ "data": [400, 300, 200, 500], "backgroundColor": ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0"] }] }', 'Operations', 'R&D', 'Marketing', 'HR', 'Operations received the most funding (500).');



INSERT INTO analytical (category, type, sub_type, instruction, question, chart_data, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Data Interpretation', 'Data Chart', 'scatter', 'Use the chart data below to answer the question.', 'Identify the point with the highest x-value among the measurements.', '{ "datasets": [{ "label": "Measurements", "data": [{"x": 10, "y": 15}, {"x": 20, "y": 10}, {"x": 30, "y": 5}] ,"backgroundColor": "#36A2EB" }] }', '(30,5)', '(20,10)', '(10,15)', '(0,0)', 'Point (30,5) has the highest x value.');



INSERT INTO analytical (category, type, sub_type, instruction, question, chart_data, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3, explanation) VALUES
('Data Interpretation', 'Data Chart', 'bubble', 'Use the chart data below to answer the question.', 'Which bubble represents the country with the largest population based on the radius?', '{ "datasets": [{ "label": "Countries", "data": [{"x": 20, "y": 30, "r": 10}, {"x": 25, "y": 20, "r": 15}, {"x": 30, "y": 10, "r": 25}] ,"backgroundColor": "#FF6384" }] }', '(30,10,r=25)', '(25,20,r=15)', '(20,30,r=10)', 'None', 'The bubble at (30,10) has the largest radius = 25.');





