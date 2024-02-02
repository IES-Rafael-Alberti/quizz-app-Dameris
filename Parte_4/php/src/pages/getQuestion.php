<?php

include '../DatabaseManager.php';
include '../DatabaseCreator.php';
include '../controller/QuestionController.php';

if (isset($_GET['question__id'])) {
    $questionId = $_GET['question__id'];
    $DbCreator = new DatabaseCreator();
    $db = $DbCreator->getDbConnection();
    $manager = new DatabaseManager();
    $controller = new QuestionController($db);
    $question = $controller->getQuestion($questionId);

    if ($question) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Question Details</title>
            <link rel="stylesheet" href="CSS/quiz.css">
        </head>
        <body>
            <section class="section">
                <article class="question">
                    <p><?= $question['question__id'], ". ", $question['question__text'] ?></p>
                    <label><input type="radio" name="q<?= $question["question__id"] ?>" value="a"> <?= $question["option__a"] ?> </label>
                    <label><input type="radio" name="q<?= $question["question__id"] ?>" value="b"> <?= $question["option__b"] ?> </label>
                    <label><input type="radio" name="q<?= $question["question__id"] ?>" value="c"> <?= $question["option__c"] ?> </label>
                    <label><input type="radio" name="q<?= $question["question__id"] ?>" value="d"> <?= $question["option__d"] ?> </label>
                </article>
            </section>
        </body>
        </html>
        <?php
    } else {
        echo "Question not found.";
    }
} else {
    echo "Question ID not provided.";
}
?>