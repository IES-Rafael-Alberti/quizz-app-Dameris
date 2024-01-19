<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del cuestionario</title>
</head>

<body>

    <h1>Resultados del Cuestionario</h1>

    <?php
    phpinfo();

    include("logic.php");

    // Procesar respuestas
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar respuestas
        $respuestas = $_POST;
        $cuestionario = new Quiz();
        $resultados = $cuestionario->calcularResultados($respuestas);

        echo "<p>Resultado de la pregunta 1: " . $resultados["q1"] . "</p>";
    }
    ?>

    <a href="index.php">Repetir Cuestionario</a>

</body>

</html>