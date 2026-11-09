<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>

<body>
    <?php
    $dia = date('d');
    echo "Día: " . $dia;
    $diaLetras = date('D');
    echo "<br>Día en letras: " . $diaLetras; //Concatenación con punto
    $diaSemana = date('N');
    echo "<br>Día de la semana: " . $diaSemana; //Concatenación con comillas
    echo "<br>Día semana: $diaSemana"; //No se concatena la variable
    //Mostrar Miércoles
    $diasVector = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    $diasVector = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    echo "<br><hr> Día Semana: " . $diasVector[$diaSemana - 1];
    echo "<br> Día Semana { $diasVector [$diaSemana - 1 ]}"; //Interpolación
    /********************************************* */
    $mesesVector = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $mesNumero = date('n');
    echo "<br><hr> Mes:  {$mesesVector[$mesNumero - 1]}";
    /********************************************* */
    if ($diaSemana <= 15 && $mesesVector[$mesNumero - 1] == "Noviembre") {
        echo "<br><hr>Ahorrando para Black Friday";
    } else {
        echo "<br><hr>Gastandome el dinero en Blak Friday";
    }
    /********************************************* */
    $numAleatorio = rand(1, 3000);
    echo "<hr> Número aleatorio: $numAleatorio";
    if ($numAleatorio < 1000) {
        echo "<br>El número es menor a 1000";
    } elseif ($numAleatorio < 1500) {
        echo "<br>El número esta entre 1000 y 1500";
    } elseif ($numAleatorio <= 2000) {
        echo "<br>El número esta entre 1500 y 2000";
    } else {
        echo "<br>El número es mayor a 2000";
    }
    ?>
</body>

</html>