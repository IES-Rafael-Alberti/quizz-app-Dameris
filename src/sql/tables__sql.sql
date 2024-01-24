-- Create the "quiz-app" schema if it doesn't exist
CREATE SCHEMA IF NOT EXISTS "quiz-app";

-- Use the "quiz-app" schema
USE `quiz-app`;

-- Create the "Questions" table
CREATE TABLE IF NOT EXISTS Questions (
    id__question INT PRIMARY KEY AUTO_INCREMENT,
    text__question VARCHAR(255) NOT NULL,
    text__comment VARCHAR(255),
    success__comment VARCHAR(255)
);

-- Create the "Options" table
CREATE TABLE IF NOT EXISTS Options (
    id__option INT PRIMARY KEY AUTO_INCREMENT,
    id__question INT,
    text__option VARCHAR(255) NOT NULL,
    is__correct BOOLEAN NOT NULL,
    FOREIGN KEY (id__question) REFERENCES Questions(id__question)
);