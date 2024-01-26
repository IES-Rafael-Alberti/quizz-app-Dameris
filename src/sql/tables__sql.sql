-- PART 2

-- Create the "quiz-app" schema if it doesn't exist
CREATE SCHEMA IF NOT EXISTS "QUIZZ-APP";

-- Use the "quiz-app" schema
USE "QUIZZ-APP";

-- Create the "QUESTIONS" table
CREATE TABLE IF NOT EXISTS QUESTIONS (
    id__question INT PRIMARY KEY AUTO_INCREMENT,
    text__question VARCHAR(255) NOT NULL,
    text__comment VARCHAR(255),
    success__comment VARCHAR(255)
);

-- Create the "OPTIONS" table
CREATE TABLE IF NOT EXISTS OPTIONS (
    id__option INT PRIMARY KEY AUTO_INCREMENT,
    id__question INT,
    text__option VARCHAR(255) NOT NULL,
    is__correct BOOLEAN NOT NULL,
    FOREIGN KEY (id__question) REFERENCES Questions(id__question)
);

-- PART 3
ALTER TABLE QUESTIONS
ADD questions__type VARCHAR(255) NOT NULL
ADD questions__details TEXT;