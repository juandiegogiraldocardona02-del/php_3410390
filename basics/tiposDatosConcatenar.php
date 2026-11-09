<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //TIPOS DE VARIABLES
    //En PHP no es necesario declarar el tipo de Datos
    $dia = 4; //TIPO INT
    $salario = 2000000.50; //TIPO DOUBLE
    $nombre = "Juan"; //TIPO STRING
    $estado = true; //TIPO BOOLEAN

    //Impresion de variables
    echo "<br>Vbl tipo entero: ".$dia;
    echo "<br>Vbl tipo double: ".$salario;
    echo "<br>Vbl tipo string: ".$nombre;
    echo "<br>Vbl tipo boolean: ".$estado;
    echo "<hr>";

    echo "{$nombre} gana \$$salario"; // Interpolacion y escape de caracteres
    echo "<br>";
    $texto = sprintf("Hoy es %d",$dia);
    echo $texto;
    $peras = 3;
    $manzanas = 5;
    $mango = 4;
    $precioFrutas = 25500.30;
    $texto = sprintf("soy %s y tengo %d peras, %d manzanas y %d mangos y costaron $%.2f", $nombre,$peras,$manzanas,$mango,$precioFrutas);
    echo "<br>".$texto;

    //Uso de Heredoc
    echo "<hr>";
    $texto = "Análisis y Desarrollo de Software";
    $html = <<<HTML
    <div class="card">
           <h2>$titulo</h2>
           <p>$texto</p>
    </div>
    HTML;
    echo $html;

    /******************************/

    
    ?>
</body>
</html>