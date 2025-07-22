
-- create tables

CREATE TABLE `verbal` (
  `id` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(100) NOT NULL,
  `type` VARCHAR(50) NOT NULL,
`word` VARCHAR(100) DEFAULT NULL,
  `question` TEXT NOT NULL,
  `image` VARCHAR(255) DEFAULT NULL,
 `chart_data` JSON DEFAULT NULL,
  `correct_answer` VARCHAR(255) NOT NULL,
  `wrong_answer1` VARCHAR(255) NOT NULL,
  `wrong_answer2` VARCHAR(255) NOT NULL,
  `wrong_answer3` VARCHAR(255) NOT NULL,
  `explanation` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `numerical` (
  `id` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(100) NOT NULL,
  `type` VARCHAR(50) NOT NULL,
`word` VARCHAR(100) DEFAULT NULL,
  `question` TEXT NOT NULL,
  `image` VARCHAR(255) DEFAULT NULL,
`chart_data` JSON DEFAULT NULL,
  `correct_answer` VARCHAR(255) NOT NULL,
  `wrong_answer1` VARCHAR(255) NOT NULL,
  `wrong_answer2` VARCHAR(255) NOT NULL,
  `wrong_answer3` VARCHAR(255) NOT NULL,
  `explanation` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Added created_at column
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `analytical` (
  `id` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(100) NOT NULL, -- Added category column
  `type` VARCHAR(50) NOT NULL,
`word` VARCHAR(100) DEFAULT NULL,
  `question` TEXT NOT NULL,
  `image` VARCHAR(255) DEFAULT NULL,
`chart_data` JSON DEFAULT NULL,
  `correct_answer` VARCHAR(255) NOT NULL,
  `wrong_answer1` VARCHAR(255) NOT NULL,
  `wrong_answer2` VARCHAR(255) NOT NULL,
  `wrong_answer3` VARCHAR(255) NOT NULL,
  `explanation` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Added created_at column
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `general` (
  `id` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(100) NOT NULL, -- Added category column
  `type` VARCHAR(50) NOT NULL,
  `word` VARCHAR(100) NOT NULL,
  `question` TEXT NOT NULL,
  `image` VARCHAR(255) DEFAULT NULL,
`chart_data` JSON DEFAULT NULL,
  `correct_answer` VARCHAR(255) NOT NULL,
  `wrong_answer1` VARCHAR(255) NOT NULL,
  `wrong_answer2` VARCHAR(255) NOT NULL,
  `wrong_answer3` VARCHAR(255) NOT NULL,
  `explanation` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Added created_at column
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






-- delete data
DROP TABLE IF EXISTS `verbal`;
DROP TABLE IF EXISTS `numerical`;
DROP TABLE IF EXISTS `analytical`;
DROP TABLE IF EXISTS `general`;


-- clear data
TRUNCATE TABLE `verbal`;
TRUNCATE TABLE `numerical`;
TRUNCATE TABLE `analytical`;
TRUNCATE TABLE `general`;


-- drop id 
ALTER TABLE verbal DROP COLUMN id;
ALTER TABLE numerical DROP COLUMN id;
ALTER TABLE analytical DROP COLUMN id;
ALTER TABLE general DROP COLUMN id;

    
-- count 
SELECT COUNT(*) AS total FROM `verbal`;
SELECT COUNT(*) AS total_duplicates FROM (SELECT question FROM verbal GROUP BY question HAVING COUNT(*) > 1) AS duplicates;


SELECT COUNT(*) AS total FROM `numerical`;
SELECT COUNT(*) AS total_duplicates FROM (SELECT question FROM numerical GROUP BY question HAVING COUNT(*) > 1) AS duplicates;



SELECT COUNT(*) AS total FROM `analytical`;
SELECT COUNT(*) FROM analytical WHERE category = 'Data interpretation' AND type = 'Bar Chart';


SELECT COUNT(*) AS total FROM `general`;
