USE `insanechess`;

CREATE TABLE `users` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `banned` BOOL DEFAULT FALSE NOT NULL,
    `ban_reason` VARCHAR(255) DEFAULT NULL,
    `banned_by` VARChAR(255) DEFAULT NULL,
    `level` INT DEFAULT 0 NOT NULL,
    `points` INT DEFAULT 0 NOT NULL,
    `games-played` INT DEFAULT 0 NOT NULL,
    `games-won` INT DEFAULT 0 NOT NULL,
    `games-lost` INT DEFAULT 0 NOT NULL,
    `games-drawn` INT DEFAULT 0 NOT NULL,
    `busy` BOOL DEFAULT FALSE NOT NULL,
    `status` DATETIME DEFAULT NULL,
    `admin` BOOL DEFAULT FALSE NOT NULL
);

CREATE TABLE `game` (
    `game-id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `white` VARCHAR(255) NOT NULL,
    `black` VARCHAR(255) NOT NULL,
    `previous-move` VARCHAR(10) NOT NULL,
    
)



