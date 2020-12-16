<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./../css/comprobar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
    $consulta = "DELETE FROM `vehicle` WHERE idVehicle = '" . $_GET['idvehiculo'] . "'";
    include './../sql/ejecutarsql.php';

    if ($error != "null") {
        echo "<div class=\"alertneg\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>ERROR!</strong> Ha habido un error, el vehiculo tiene una reserva en curso o pertenece a un vehiculo de referencia.
        </div>";
    }else{
        echo "<div class=\"alertsucc\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>CORRECTO!</strong> Se ha eliminado correctamente.
        </div>";
    }
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='5;URL=./../vehiculos.php'>";

    ?>

</body>

</html>