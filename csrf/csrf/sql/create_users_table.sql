
CREATE DATABASE website;
USE website;

CREATE TABLE users (
    id INT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL,
    active TINYINT(1) NOT NULL
);

INSERT INTO users (id, email, password, username, active) VALUES
(1, 'alex@codecourse.com', '123', 'alex', 1),
(2, 'billy@codecourse.com', '456', 'billy', 1);
