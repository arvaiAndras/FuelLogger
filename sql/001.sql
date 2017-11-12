CREATE TABLE user
(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_enabled BOOL DEFAULT FALSE  NOT NULL,
    validation_code VARCHAR(255),
    created_at DATETIME NOT NULL,
    last_login DATETIME NOT NULL
);
CREATE UNIQUE INDEX user_email_uindex ON user (email);
CREATE UNIQUE INDEX user_validation_code_uindex ON user (validation_code);