<?php

// Handle form submissions and evaluate answers against correct answers.
class Form__Handler
{
    private $correct__answers;

    public function __construct($correct__answers)
    {
        $this->correct__answers = $correct__answers;
    }

    // Retrieves user answers from the POST data and stores them in an array.
    private function getUser__answers()
    {
        $user__answers = [];

        for ($i = 1; $i <= count($this->correct__answers); $i++) {
            $field__name = "q" . $i;
            $user__answers[$i - 1] = isset($_POST[$field__name]) ? $_POST[$field__name] : null;
        }

        return $user__answers;
    }

    // Compares user answers with correct answers, counts correct questions,
    // and constructs a redirect URL with success information.
    private function evaluate__answers($user__answers)
    {
        $correct__questions = [];
        $correct__count = 0;

        for ($i = 0; $i < count($this->correct__answers); $i++) {
            if ($user__answers[$i] == $this->correct__answers[$i]) {
                $correct__questions[] = "q" . ($i + 1);
                $correct__count++;
            }
        }

        $query__string = implode(", ", $correct__questions);
        $answered__query__string = http_build_query(array_map(function ($i, $answer) {
            return "q" . ($i + 1) . " = " . urlencode($answer);
        }, array_keys($user__answers), $user__answers));

        $redirect_url = "quiz.php?success=$query__string&$answered__query__string";
        header("Location:$redirect_url");
        exit();
    }

    // Checks if the request method is POST, then gets user answers and evaluates them.
    public function handleSubmission()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user__answers = $this->getUser__answers();

            $this->evaluate__answers($user__answers);
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct__answers = ["a", "c", "c", "b", "c", "b", "b", "c", "a", "a"];

    $answered__questions = array_keys($_POST);
    $usanswered__questions = array_diff(array_map(function ($i) {
        return "q" . $i;
    }, range(1, 10)), $answered__questions);

    if (count($answered__questions) !== count($correct__answers)) {
        header("Location:quiz.php?q=" . implode(",", $usanswered__questions));
    } else {
        $Form__Handler = new Form__Handler($correct__answers);
        $Form__Handler->handleSubmission();
    }
}
