<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./css/clase.css">
    <link rel="stylesheet" href="./css/vehiculo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
    include './header.php';
    ?>
    <?php
    for ($i = 1; $i < 8; $i++) {
    ?>

        <div class="vehiculo-main">
            <div>
                <img class="imagen-vehiculo" src="https://periodismodelmotor.com/wp-content/uploads/2020/08/coches-de-lujo-baratos-de-segunda-mano-1-1280x720.jpg"><img>
                <div class="opciones-vehiculo">
                    <div class="icono-texto-clase">
                        <img src="./img/doors.png"></img>
                        <h3 class="texto-opcion-clase">5</h3>
                    </div>
                    <div class="icono-texto-clase">
                        <img src="./img/plazas.png"></img>
                        <h3 class="texto-opcion-clase">7</h3>
                    </div>
                    <div class="icono-texto-clase">
                        <img src="./img/cambio.png"></img>
                        <h3 class="texto-opcion-clase">Manual</h3>
                    </div>
                    <div class="icono-texto-clase">
                        <img src="./img/air.png"></img>
                        <h3 class="texto-opcion-clase">Sí</h3>
                    </div>
                    <div class="icono-texto-clase">
                        <img src="./img/bag.png"></img>
                        <h3 class="texto-opcion-clase">2</h3>
                    </div>
                </div>
            </div>
            <h1>Clase 1</h1>
            <div class="botones-vehiculos">
                <a class="boton-vehiculos" href="reservas.php?filtrar=true&idvehiculo=1354">Ver reservas</a>
                <a class="boton-vehiculos" href="./forms/editar.php?idvehiculo=1354">Editar</a>
                <a class="boton-vehiculos-neg" href="./selects/eliminar.php?idvehiculo=1354">Eliminar</a>
            </div>
        </div>

    <?php
    }
    ?>

</body>

</html>