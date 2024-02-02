<?php
include '../DatabaseManager.php';
include '../DatabaseCreator.php';
include '../controller/QuestionController.php';

$DbCreator = new DatabaseCreator();
$db = $DbCreator->getDbConnection();
$controller = new QuestionController($db);

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $newQuizId = $_POST['quiz__id'];
    $newQuestionText = $_POST['question__text'];
    $newOptionA = $_POST['option__a'];
    $newOptionB = $_POST['option__b'];
    $newOptionC = $_POST['option__c'];
    $newOptionD = $_POST['option__d'];
    $newCorrectOption = $_POST['correct__option'];
    $newQuestionType = $_POST['question__type'];
    $newQuestionDetails = $_POST['question__details'];

    // Insert the new question into the database
    $controller->createQuestion(
        $newQuizId,
        $newQuestionText,
        $newOptionA,
        $newOptionB,
        $newOptionC,
        $newOptionD,
        $newCorrectOption,
        $newQuestionType,
        $newQuestionDetails
    );

    // Redirect back to the previous page
    header("Location:../questionManagement.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Question</title>
    <link rel="stylesheet" href="../CSS/quiz.css">
    <script src="main.js"></script>
</head>

<body>
    <section class="section">
        <form method="post">
            <label for="quiz__id">Quiz ID:</label>
            <input type="text" id="quiz__id" name="quiz__id" required>
            <br><br>
            <label for="question__text">Question Text:</label>
            <input type="text" id="question__text" name="question__text" required>
            <br>
            <br>
            <label for="option__a">Option A:</label>
            <input type="text" id="option__a" name="option__a" required>
            <br>
            <br>
            <label for="option__b">Option B:</label>
            <input type="text" id="option__b" name="option__b" required>
            <br>
            <br>
            <label for="option__c">Option C:</label>
            <input type="text" id="option__c" name="option__c" required>
            <br>
            <br>
            <label for="option__d">Option D:</label>
            <input type="text" id="option__d" name="option__d" required>
            <br>
            <br>
            <label for="correct__option">Correct Option:</label>
            <input type="text" id="correct__option" name="correct__option" required>
            <br>
            <br>
            <label for="question__type">Question Type:</label>
            <input type="text" id="question__type" name="question__type" required>
            <br>
            <label for="question__details">Question Details:</label>
            <textarea id="question__details" name="question__details" required></textarea>
            <br>
            <br>

            <button type="submit" name="create">Create Question</button>
        </form>
    </section>
</body>

</html>