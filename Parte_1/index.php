<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz PHP</title>
    <link rel="stylesheet" href="/src/quizz.css">

    <!-- PART 1 -->

    <?php
    session_start();
    include("managerDatabase.php");
    $html_safe_text = htmlspecialchars($text_question, ENT_QUOTES, 'UTF-8');

    $timer = 300;

    if (!isset($_SESSION["start__time"]) || isset($_GET["restart"])) {
        $_SESSION["start__time"] = time();
    }

    $elapsed__time = time() - $_SESSION["start__time"];
    $remaining__time = max(0, $timer - $elapsed__time);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["restart__timer"])) {
        header("Location: index.php");
        $_SESSION["start__time"] = time();
        exit();
    }
    ?>

</head>

<body>
    <form id="quizz__form" method="post" action="<?php echo isset($_GET["success"]) ? "||" : $_SERVER["SELF_PHP"]; ?>">
        <h1>PHP Quizz</h1>
        <div id="timer">Time remaining: 5:00</div>

        <?php if (isset($_GET["success"])) {
            $score = count(explode(", ", $_GET["success"]));

            echo "<p><strong>Your score: $score / 10</strong></p>";
        } ?>

        <!-- Question 1 -->
        <div class="question">
            <p>¿Qué significa HTML?</p>
            <label><input type="radio" name="q1" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>>a) Lenguaje de marcado de hipertexto</label>
            <label><input type="radio" name="q1" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>>b) Aprendizaje automático de alta tecnología</label>
            <label><input type="radio" name="q1" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>>c) Lenguaje de transferencia hipertexto</label>
            <label><input type="radio" name="q1" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>>d) Lenguaje de mensajería de texto para el hogar</label>

            <?php
            if (in_array("q1", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q1", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>
        </div>

        <!-- Question 2 -->
        <div class="question">
            <p>¿Qué etiqueta HTML se utiliza para crear un enlace?</p>
            <label><input type="radio" name="q2" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>>a) &lt;link&gt;</label>
            <label><input type="radio" name="q2" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>>b) &lt;href&gt;</label>
            <label><input type="radio" name="q2" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>>c) &lt;a&gt;</label>
            <label><input type="radio" name="q2" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>>d) &lt;hyperlink&gt;</label>

            <?php
            if (in_array("q2", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q2", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>
        </div>

        <!-- Question 3 -->
        <div class="question">
            <p>¿Cuál es el propósito de CSS en el desarrollo web?</p>
            <label><input type="radio" name="q2" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>>a) Definir la estructura de una página web</label>
            <label><input type="radio" name="q2" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>>b) Crear contenido web dinámico</label>
            <label><input type="radio" name="q2" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>>c) Dar formato a la apariencia de los elementos web</label>
            <label><input type="radio" name="q2" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>>d) Añadir interactividad a una página web</label>

            <?php
            if (in_array("q3", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q3", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>
        </div>

        <!-- Question 4 -->
        <div class="question">
            <p>¿Cuál de las siguientes es una variable JavaScript válida?</p>
            <label><input type="radio" name="q4" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>> a) 123var</label>
            <label><input type="radio" name="q4" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>> b) _myVariable</label>
            <label><input type="radio" name="q4" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>> c) my-variable</label>
            <label><input type="radio" name="q4" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>> d) var 123</label>

            <?php
            if (in_array("q4", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q4", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>

        </div>

        <!-- Question 5 -->
        <div class="question">
            <p>¿Cuál es la función principal de un servidor web en el contexto del desarrollo web?</p>
            <label><input type="radio" name="q5" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>> a) Mostrar anuncios en un sitio web</label>
            <label><input type="radio" name="q5" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>> b) Procesar la entrada del usuario</label>
            <label><input type="radio" name="q5" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>> c) Hospedar y entregar contenido web a los clientes</label>
            <label><input type="radio" name="q5" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>> d) Encriptar el tráfico web</label>

            <?php
            if (in_array("q5", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q5", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>

        </div>

        <!-- Question 6 -->
        <div class="question">
            <p>¿Qué etiqueta HTML se utiliza para crear una lista numerada (ordenada)?</p>
            <label><input type="radio" name="q6" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>> a) &gl;list&gt;</label>
            <label><input type="radio" name="q6" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>> b) &gl;ol&gt;</label>
            <label><input type="radio" name="q6" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>> c) &gl;ul&gt;</label>
            <label><input type="radio" name="q6" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>> d) &gl;li&gt;</label>

            <?php
            if (in_array("q6", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q6", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>

        </div>

        <!-- Question 7 -->
        <div class="question">
            <p>¿Cuál es el propósito de la propiedad CSS "font-family"?</p>
            <label><input type="radio" name="q7" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>> a) Establecer el tamaño de la fuente del texto</label>
            <label><input type="radio" name="q7" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>> b) Especificar el tipo de letra o estilo de fuente para el texto</label>
            <label><input type="radio" name="q7" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>> c) Definir el color del texto</label>
            <label><input type="radio" name="q7" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>> d) Controlar la alineación del texto</label>

            <?php
            if (in_array("q7", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q7", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>

        </div>

        <!-- Question 8 -->
        <div class="question">
            <p>¿Qué lenguaje de programación se usa a menudo para el scripting del lado del servidor en el desarrollo web?</p>
            <label><input type="radio" name="q8" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>> a) Java</label>
            <label><input type="radio" name="q8" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>> b) Python</label>
            <label><input type="radio" name="q8" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>> c) PHP</label>
            <label><input type="radio" name="q8" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>> d) HTML</label>

            <?php
            if (in_array("q8", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q8", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>

        </div>

        <!-- Question 9 -->
        <div class="question">
            <p>¿Qué significa el acrónimo "URL" en español?</p>
            <label><input type="radio" name="q9" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>> a) Localizador uniforme de recursos</label>
            <label><input type="radio" name="q9" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>> b) Lenguaje de representación universal</label>
            <label><input type="radio" name="q9" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>> c) Lenguaje de referencia único</label>
            <label><input type="radio" name="q9" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>> d) Enlace de registro de usuario</label>

            <?php
            if (in_array("q9", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q9", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>

        </div>

        <!-- Question 10 -->
        <div class="question">
            <p>¿Qué código HTTP indica una solicitud exitosa en el desarrollo web?</p>
            <label><input type="radio" name="q10" value="a" <?php if (isset($_GET["success"])) echo "disabled" ?>> a) 200 OK</label>
            <label><input type="radio" name="q10" value="b" <?php if (isset($_GET["success"])) echo "disabled" ?>> b) 404 No encontrado</label>
            <label><input type="radio" name="q10" value="c" <?php if (isset($_GET["success"])) echo "disabled" ?>> c) 500 Error interno del servidor</label>
            <label><input type="radio" name="q10" value="d" <?php if (isset($_GET["success"])) echo "disabled" ?>> d) 302 Encontrado (Redirección)</label>

            <?php
            if (in_array("q10", explode(", ", $_GET["q"])) && isset($_GET["q"])) {
                echo '<p style="color: white; background-color: red;">This question must be answered.</p>';
            }
            if (isset($_GET["success"]) && in_array("q10", explode(",", $_GET["success"]))) {
                echo '<p style="color: white; background-color: green;">This question must be answered.</p>';
            }
            ?>

        </div>

        <input type="submit" value="Submit">
    </form>
</body>

<?php
// Include the Form__Handler class and quiz processing logic
include "process.php";

// Initialize the Form__Handler with correct answers
$correct__answers = ["a", "c", "c", "b", "c", "b", "b", "c", "a", "a"];
$Form__Handler = new Form__Handler($correctAnswers);

// Handle form submission
$Form__Handler->handleSubmission();
?>

</html>