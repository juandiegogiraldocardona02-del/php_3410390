<?php
    // Configurar los idiomas de los días y meses
    $dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    // Lista de ciudades y sus zonas horarias
    $ciudades = [
        "Bogotá, Colombia" => "America/Bogota",
        "Madrid, España" => "Europe/Madrid",
        "Auckland, Nueva Zelanda" => "Pacific/Auckland",
        "Moscú, Rusia" => "Europe/Moscow",
        "Tokio, Japón" => "Asia/Tokyo"
    ];

    echo "<hr>";

    // Obtener y mostrar la hora de cada ciudad
    foreach ($ciudades as $ciudad => $zonaHoraria) {

        date_default_timezone_set($zonaHoraria);

        $numDiaSemana = date('w');
        $numDiaMes = date('d');
        $numMes = date('n');
        $ano = date('Y');
        $hora12 = date('h:i:s A');

        $diaEspanol = $dias[$numDiaSemana];
        $mesEspanol = $meses[$numMes];

        echo "Hoy es $diaEspanol $numDiaMes de $mesEspanol de $ano ";
        echo "y son las $hora12 en $ciudad.<br>";
    }

    exit;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formas de ver la Hora en PHP</title>
</head>

<body>

    <h2>Formas de ver la Hora en PHP</h2>

    <div id="resultado">
        Cargando información...
    </div>

    <script>
    // Función para actualizar la información
    function actualizar() {

        fetch('fechas.php?ajax=1')

            .then(response => {
                if (!response.ok) {
                    throw new Error('Error al consultar el servidor');
                }

                return response.text();
            })

            .then(datos => {
                document.getElementById('resultado').innerHTML = datos;
            })

            .catch(error => {
                document.getElementById('resultado').innerHTML =
                    'Error: ' + error.message;
            });
    }

    // Ejecutar inmediatamente
    actualizar();

    // Actualizar cada segundo
    setInterval(actualizar, 1000);
    </script>

</body>

</html>