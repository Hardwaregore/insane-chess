USE `insanechess`;

CREATE TABLE users (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `banned` BOOL DEFAULT FALSE NOT NULL,
    `vootos` INT(5) DEFAULT 0 NOT NULL,
    -- 'vootos' means 'violations of our terms of service',
    `level` INT DEFAULT 0 NOT NULL,
    `points` INT DEFAULT 0 NOT NULL,
    `admin` BOOL DEFAULT FALSE NOT NULL
);



