<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //TIPOS DE VARIABLES
    // En PHP no es necesario declarar el tipo de Datos
    $dia = 4; // Tipo INT
    $salario = 2000000.50; // Tipo DOUBLE
    $nombre = "Juan"; // Tipo STRING
    $estado = true; // Tipo BOOLEAN

    // Impresión de Variables
    echo "<br> Variable tipo entero: $dia";
    echo "<br> Variable tipo double: " . $salario;
    echo "<br> Variable tipo string: " . $nombre;
    echo "<br> Variable tipo boolean: " . $estado;
    echo "<hr>";

    echo "$nombre tiene un salario de \$$salario"; //Interpolación y escape de caracteres
    echo "<br>";
    $texto = sprintf("Hoy es %d", $dia);
    echo $texto;
    echo "<br>";
    $peras = 3;
    $manzana = 5;
    $mango = 4;
    $precioFrutas = 25500.30;

    // Uso de Sprintf 
    $texto = sprintf("Soy %s y tengo %d peras, %d manzanas y %d mangos y costaron $%.2f", $nombre, $peras, $manzana, $mango, $precioFrutas);
    echo "<br>" . $texto;

    // Uso de Heredoc
    echo "<hr>";
    $titulo = "Programa de Formación";
    $texto = "Análisis y Desarrollo de Software";
    $html = <<<HTML
        <div class = "card">
            <h2>$titulo</h2>
            <p>$texto</p>
        </div>
    HTML;
    echo $html;

    //Solución Ejercicio 1
    echo "<hr>";
    $numAleatorio = rand(10, 15);
    $numerosTexto = ["Diez", "Once", "Doce", "Trece", "Catorce", "Quince"];
    $textoNumero = $numerosTexto[$numAleatorio - 10];
    echo "El número aleatorio es: $numAleatorio, que en texto es: $textoNumero";
    ?>
</body>

</html>