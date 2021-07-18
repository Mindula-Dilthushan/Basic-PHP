drop database testingphp;
CREATE DATABASE testingphp;
USE testingphp;

CREATE TABLE user(
    userId  VARCHAR(6) NOT NULL,
    userName  VARCHAR(40),
    userNumber VARCHAR(10),
    userAddress VARCHAR(30),
    CONSTRAINT PRIMARY KEY (userId)
);