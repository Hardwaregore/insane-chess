USE `insanechess`;

CREATE TABLE `users` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `banned` BOOL DEFAULT FALSE NOT NULL,
    `ban_reason` VARCHAR(255) DEFAULT NULL,
    `banned_by` VARChAR(255) DEFAULT NULL,
    `admin` BOOL DEFAULT FALSE NOT NULL
);

CREATE TABLE `appeals` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `appealed` BOOL DEFAULT TRUE NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    `reason` VARCHAR(10000) NOT NULL,
    `rejected` BOOL DEFAULT FALSE NOT NULL,
    `reject_reason` VARCHAR(255) DEFAULT NULL
);

CREATE TABLE `player_data` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `games_played` INT NOT NULL,
    `games_won` INT NOT NULL,
    `games_lost` INT NOT NULL,
    `games_drawn` INT NOT NULL,
    `games_aborted` INT NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `friends` VARCHAR(255) NOT NULL,
    `achievements` VARCHAR(255) NOT NULL,
    `points` INT NOT NULL,
    `level` INT NOT NULL
);


