<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz PHP</title>
    <link rel="stylesheet" href="/src/quizz.css">
    
    <?php
    session_start();

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
    <form action="/src/php/process.php" method="post">
        <h1>PHP Quiz</h1>

        <!-- Question 1 -->
        <div class="question">
            <p>¿Qué significa HTML?</p>
            <label><input type="radio" name="q1" value="a"> a) Lenguaje de marcado de hipertexto (Correcta)</label>
            <label><input type="radio" name="q1" value="b"> b) Aprendizaje automático de alta tecnología</label>
            <label><input type="radio" name="q1" value="c"> c) Lenguaje de transferencia hipertexto</label>
            <label><input type="radio" name="q1" value="d"> d) Lenguaje de mensajería de texto para el hogar</label>
        </div>

        <!-- Question 2 -->
        <div class="question">
            <p>¿Qué etiqueta HTML se utiliza para crear un enlace?</p>
            <label><input type="radio" name="q2" value="a"> a) &lt;link&gt;</code></label>
            <label><input type="radio" name="q2" value="b"> b) &lt;href&gt;</label>
            <label><input type="radio" name="q2" value="c"> c) &lt;a&gt; (Correcta)</label>
            <label><input type="radio" name="q2" value="d"> d) &lt;hyperlink&gt;</label>
        </div>

        <!-- Question 3 -->
        <div class="question">
            <p>¿Cuál es el propósito de CSS en el desarrollo web?</p>
            <label><input type="radio" name="q3" value="a"> a) Definir la estructura de una página web</label>
            <label><input type="radio" name="q3" value="b"> b) Crear contenido web dinámico</label>
            <label><input type="radio" name="q3" value="c"> c) Dar formato a la apariencia de los elementos web (Correcta)</label>
            <label><input type="radio" name="q3" value="d"> d) Añadir interactividad a una página web</label>
        </div>

        <!-- Question 4 -->
        <div class="question">
            <p>¿Cuál de las siguientes es una variable JavaScript válida?</p>
            <label><input type="radio" name="q4" value="a"> a) 123var</label>
            <label><input type="radio" name="q4" value="b"> b) _myVariable (Correcta)</label>
            <label><input type="radio" name="q4" value="c"> c) my-variable</label>
            <label><input type="radio" name="q4" value="d"> d) var 123</label>
        </div>

        <!-- Question 5 -->
        <div class="question">
            <p>¿Cuál es la función principal de un servidor web en el contexto del desarrollo web?</p>
            <label><input type="radio" name="q5" value="a"> a) Mostrar anuncios en un sitio web</label>
            <label><input type="radio" name="q5" value="b"> b) Procesar la entrada del usuario</label>
            <label><input type="radio" name="q5" value="c"> c) Hospedar y entregar contenido web a los clientes (Correcta)</label>
            <label><input type="radio" name="q5" value="d"> d) Encriptar el tráfico web</label>
        </div>

        <!-- Question 6 -->
        <div class="question">
            <p>¿Qué etiqueta HTML se utiliza para crear una lista numerada (ordenada)?</p>
            <label><input type="radio" name="q6" value="a"> a) &gl;list&gt;</label>
            <label><input type="radio" name="q6" value="b"> b) &gl;ol&gt; (Correcta)</label>
            <label><input type="radio" name="q6" value="c"> c) &gl;ul&gt;</label>
            <label><input type="radio" name="q6" value="d"> d) &gl;li&gt;</label>
        </div>

        <!-- Question 7 -->
        <div class="question">
            <p>¿Cuál es el propósito de la propiedad CSS `font-family`?</p>
            <label><input type="radio" name="q7" value="a"> a) Establecer el tamaño de la fuente del texto</label>
            <label><input type="radio" name="q7" value="b"> b) Especificar el tipo de letra o estilo de fuente para el texto (Correcta)</label>
            <label><input type="radio" name="q7" value="c"> c) Definir el color del texto</label>
            <label><input type="radio" name="q7" value="d"> d) Controlar la alineación del texto</label>
        </div>

        <!-- Question 8 -->
        <div class="question">
            <p>¿Qué lenguaje de programación se usa a menudo para el scripting del lado del servidor en el desarrollo web?</p>
            <label><input type="radio" name="q8" value="a"> a) Java</label>
            <label><input type="radio" name="q8" value="b"> b) Python</label>
            <label><input type="radio" name="q8" value="c"> c) PHP (Correcta)</label>
            <label><input type="radio" name="q8" value="d"> d) HTML</label>
        </div>

        <!-- Question 9 -->
        <div class="question">
            <p>¿Qué significa el acrónimo "URL" en español?</p>
            <label><input type="radio" name="q9" value="a"> a) Localizador uniforme de recursos (Correcta)</label>
            <label><input type="radio" name="q9" value="b"> b) Lenguaje de representación universal</label>
            <label><input type="radio" name="q9" value="c"> c) Lenguaje de referencia único</label>
            <label><input type="radio" name="q9" value="d"> d) Enlace de registro de usuario</label>
        </div>

        <!-- Question 10 -->
        <div class="question">
            <p>¿Qué código HTTP indica una solicitud exitosa en el desarrollo web?</p>
            <label><input type="radio" name="q10" value="a"> a) 200 OK (Correcta)</label>
            <label><input type="radio" name="q10" value="b"> b) 404 No encontrado</label>
            <label><input type="radio" name="q10" value="c"> c) 500 Error interno del servidor</label>
            <label><input type="radio" name="q10" value="d"> d) 302 Encontrado (Redirección)</label>
        </div>

        <input type="submit" value="Submit">
    </form>
</body>

</html>