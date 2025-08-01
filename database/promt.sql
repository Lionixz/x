
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  google_id VARCHAR(255) NOT NULL UNIQUE,
  name VARCHAR(255),
  email VARCHAR(255),
  picture VARCHAR(500),
  role VARCHAR(50) NOT NULL DEFAULT 'user',
  is_online TINYINT(1) DEFAULT 0,
  last_seen DATETIME DEFAULT NULL,
  user_credit DECIMAL(10,2) DEFAULT 10.00;
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE buy_credits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    credits_added DECIMAL(10,2) NOT NULL,
    transaction_id VARCHAR(255) NOT NULL,
    status VARCHAR(20) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE used_credits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    credit_used DECIMAL(10,2) DEFAULT 1.00,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- delete data
DROP TABLE IF EXISTS `users`;

DROP TABLE IF EXISTS `verbal`;
DROP TABLE IF EXISTS `numerical`;
DROP TABLE IF EXISTS `analytical`;
DROP TABLE IF EXISTS `general`;


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
    PRIMARY KEY (`id`),
    KEY `idx_category_type_word` (`category`, `type`, `word`) 
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


-- clear data
TRUNCATE TABLE `verbal`;
TRUNCATE TABLE `numerical`;
TRUNCATE TABLE `analytical`;
TRUNCATE TABLE `general`;


-- Delete duplicates word
DELETE v1
FROM verbal v1
JOIN verbal v2 
  ON v1.word = v2.word 
  AND v1.id > v2.id;


-- Delete duplicates question
DELETE v1
FROM verbal v1
JOIN verbal v2
  ON v1.question = v2.question
  AND v1.id > v2.id;




-- drop id image chard data and created at
ALTER TABLE `verbal`
DROP COLUMN `id`,
DROP COLUMN `image`,
DROP COLUMN `chart_data`,
DROP COLUMN `created_at`;


ALTER TABLE numerical DROP COLUMN id;
ALTER TABLE analytical DROP COLUMN id;
ALTER TABLE general DROP COLUMN id;

