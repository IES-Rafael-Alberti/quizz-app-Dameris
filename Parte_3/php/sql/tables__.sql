SET NAMES utf8;
SET time_zone = "+02:00";
SET sql_mode = "";
DROP DATABASE IF EXISTS "quizz-app";
CREATE DATABASE "quizz-app" CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE "quizz-app";


CREATE TABLE Quizz (
    quizz__id INT PRIMARY KEY AUTO__INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created__at DATETIME
);

CREATE TABLE Questions (
    question_id INT PRIMARY KEY AUTO__INCREMENT,
    quizz__id INT,
    question__text TEXT NOT NULL,
    option__a VARCHAR(255) NOT NULL,
    option__b VARCHAR(255) NOT NULL,
    option__c VARCHAR(255) NOT NULL,
    option__d VARCHAR(255) NOT NULL,
    correct__option CHAR(1) NOT NULL,
    FOREIGN KEY (quizz__id) REFERENCES Quiz(quiz_id)
);