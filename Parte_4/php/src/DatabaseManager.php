<?php

class DatabaseManager {
    
    function displayQuestions($mysqli)
    {
        $sql = "SELECT * FROM Questions;";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $this->displayQuestion($row);
        }
    }

    function displayQuestionsDev($mysqli)
    {
        $sql = "SELECT * FROM Questions;";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <article class="question">
                <p><?= $row['question__id'], ". ", $row['question__text'] ?></p>
                <?php $this->displayOptions($row); ?>
                <?php $this->displayActionForm("delete", $row['question__id'], "Delete"); ?>
                <?php $this->displayActionForm("edit", $row['question__id'], "Edit Question"); ?>
                <?php $this->displayActionForm("get", $row['question__id'], "Get Question"); ?>
            </article>
            <?php
        }

        $mysqli->close();
    }

    function displayQuestion($row)
    {
        ?>
        <article class="question">
            <p><?= $row['question__id'], ". ", $row['question__text'] ?></p>
            <?php $this->displayOptions($row); ?>
        </article>
        <?php
    }

    function displayOptions($row)
    {
        $options = ['a', 'b', 'c', 'd'];

        foreach ($options as $option) {
            ?>
            <label><input type="radio" name="q<?= $row["question__id"] ?>" value="<?= $option ?>"> <?= $row["option__$option"] ?> </label>
            <?php
        }
    }

    function displayActionForm($action, $questionId, $buttonText)
    {
        ?>
        <form method="post">
            <input type="hidden" name="action" value="<?= $action ?>">
            <input type="hidden" name="question__id" value="<?= $questionId ?>">
            <button type="submit"><?= $buttonText ?></button>
        </form>
        <?php
    }
}
?>