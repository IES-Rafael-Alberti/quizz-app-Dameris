<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lógica del cuestionario</title>
</head>

<body>

    <?php
    class Quiz
    {
        public function calcularResultados($respuestas)
        {
            $resultados = array();

            if (isset($respuestas["q1"])) {
                $resultados["q1"] = $respuestas["q1"] == "a" ? "Correcta" : "Incorrecta";
            }



            return $resultados;
        }
    }
    ?>

</body>

</html>