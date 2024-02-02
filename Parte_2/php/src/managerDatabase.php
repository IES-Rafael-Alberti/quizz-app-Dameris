<?php
function getDbConnection()
{
    $host = 'database';
    $username = 'user_db';
    $password = 'Pestillo123';
    $database = 'quizz_app';

    try {
        $connection = new mysqli($host, $username, $password, $database);

        if ($connection->connect_error) {
            error_log('Connection failed: ' . $connection->connect_error);

            throw new mysqli_sql_exception('Connection failed: ' . $connection->connect_error);
        }

        return $connection;
    } catch (mysqli_sql_exception $e) {
        error_log('Error: ' . $e->getMessage());
        die('Error: ' . $e->getMessage());
    }
}

function displayQuestions($connection)
{
    global $connection;
    $sql = "SELECT * FROM QUESTIONS;";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <article class="question">
            <p><?= $row["id__question"], ". ", $row["questions__details"] ?></p>
            <label><input type="radio" name="q<?= $row["id__question"] ?>" value="a"><?= $row["a"] ?></label>
            <label><input type="radio" name="q<?= $row["id__question"] ?>" value="b"><?= $row["b"] ?></label>
            <label><input type="radio" name="q<?= $row["id__question"] ?>" value="c"><?= $row["c"] ?></label>
            <label><input type="radio" name="q<?= $row["id__question"] ?>" value="d"><?= $row["d"] ?></label>
        </article>
        <?php
    }
}
