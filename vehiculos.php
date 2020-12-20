<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./css/clase.css">
    <link rel="stylesheet" href="./css/vehiculo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>

    <?php
    include './header.php';

    if (!isset($_SESSION["Usuario"])) {
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=./index.php'>";
    }

    $consulta = "SELECT * FROM `vehicle`
    INNER JOIN classe on classe.nom = vehicle.classe";


    include './sql/ejecutarsql.php';

    while ($valores = mysqli_fetch_array($resultat)) {
    ?>

        <div class="vehiculo-main">
            <div>
            <img class="imagen-vehiculo" src="./img/<?php echo $valores['foto'] ?>"><img>
                <img class="imagen-vehiculo" src="<?php echo $valores['foto'] ?>"><img>
                <div class="opciones-vehiculo">
                    <div class="icono-texto-clase">
                        <img src="./img/doors.png"></img>
                        <h3 class="texto-opcion-clase"><?php echo $valores['portes'] ?></h3>
                    </div>
                    <div class="icono-texto-clase">
                        <img src="./img/plazas.png"></img>
                        <h3 class="texto-opcion-clase"><?php echo $valores['passatger'] ?></h3>
                    </div>
                    <div class="icono-texto-clase">
                        <img src="./img/cambio.png"></img>
                        <h3 class="texto-opcion-clase"><?php if ($valores['automatic'] == 0) {
                                                            echo "Manual";
                                                        } else {
                                                            echo "Automático";
                                                        } ?></h3>
                    </div>
                    <div class="icono-texto-clase">
                        <img src="./img/air.png"></img>
                        <h3 class="texto-opcion-clase"><?php if ($valores['aireAcondicionat'] == 1) {
                                                            echo "Sí";
                                                        } else {
                                                            echo "No";
                                                        } ?></h3>
                    </div>
                    <div class="icono-texto-clase">
                        <img src="./img/bag.png"></img>
                        <h3 class="texto-opcion-clase"><?php echo $valores['capacitatEnMaletes'] ?></h3>
                    </div>
                </div>
            </div>
            <h1><?php echo $valores['nom'] ?></h1>
            <div class="botones-vehiculos">
                <a class="boton-vehiculos" href="reservas.php?filtrar=true&idvehiculo=<?php echo $valores['idVehicle'] ?>">Ver reservas</a>
                <a class="boton-vehiculos" href="./forms/editarvehiculo.php?idvehiculo=<?php echo $valores['idVehicle'] ?>">Editar</a>
                <a class="boton-vehiculos-neg" href="./selects/eliminar.php?idvehiculo=<?php echo $valores['idVehicle'] ?>">Eliminar</a>
            </div>
        </div>

    <?php
    }
    ?>


    <a href="./forms/crearvehiculo.php" class="float">
        <i class="fa fa-plus my-float"></i>
    </a>
    <div class="label-container">
        <div class="label-text">Crear un vehículo</div>
        <i class="fa fa-play label-arrow"></i>
    </div>

</body>

</html>