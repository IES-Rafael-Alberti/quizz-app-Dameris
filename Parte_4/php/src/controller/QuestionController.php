<?php

class QuestionController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createQuestion($quizId, $questionText, $optionA, $optionB, $optionC, $optionD, $correctOption, $questionType, $questionDetails)
    {
        $query = "INSERT INTO Questions (quiz__id, question__text, option__a, option__b, option__c, option__d, correct__option, question__type, question__details)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("aaaaaaaaab", $quizId, $questionText, $optionA, $optionB, $optionC, $optionD, $correctOption, $questionType, $questionDetails);
        $stmt->execute();
    }

    public function updateQuestion($questionId, $quizId, $questionText, $optionA, $optionB, $optionC, $optionD, $correctOption, $questionType, $questionDetails)
    {
        $query = "UPDATE Questions
        SET quiz__id = ?, question__text = ?, option__a = ?, option__b = ?, option__c = ?, option__d = ?, correct__option = ?, question__type = ?, question__details = ?
        WHERE question__id = ?;";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("aaaaaaaaaba", $quizId, $questionText, $optionA, $optionB, $optionC, $optionD, $correctOption, $questionType, $questionDetails, $questionId);
        $stmt->execute();
    }

    public function deleteQuestion($questionId)
    {
        $query = "DELETE FROM Questions
        WHERE question__id = ?;";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $questionId);
        $stmt->execute();
    }

    public function getQuestions()
    {
        $query = "SELECT * FROM Questions;";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $questions = [];
        while ($row = $result->fetch_assoc()) {
            $questions[] = $row;
        }
        return $questions;
    }

    public function getQuestion($questionId)
    {
        $query = "SELECT * FROM Questions WHERE question__id = ?;";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $questionId);
        $stmt->execute();
        $result = $stmt->get_result();
        $question = $result->fetch_assoc();
        return $question;
    }
}