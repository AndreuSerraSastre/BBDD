<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./css/clase.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
    include './header.php';
    if (isset($_GET['Clase'])) {
    ?>
        <h1 class="titulo-clase">Clase <?php echo $_GET['Clase']; ?></h1>

        <div class="vehiculo-clase">
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
            <form class="form-selecionar" action="./selects/reservar.php" method="post">

                <input type="hidden" name="clase" value="<?php echo $_GET['Clase']; ?>">

                <div class="fecha-texto">
                    <label class="label-fecha-clase" for="start">FECHA DE RECOGIDA</label>
                    <input class="fecha-input-clase" type="date" id="desde" name="trip-start" value="2020-07-22" min="2020-01-01" max="2021-12-31">
                </div>

                <h1>-</h1>

                <div class="fecha-texto">
                    <label class="label-fecha-clase" for="start">FECHA DE DEVOLUCIÓN</label>
                    <input class="fecha-input-clase" type="date" id="hasta" name="trip-start" value="2020-07-22" min="2020-01-01" max="2021-12-31">
                </div>

                <button type="summit" class="boton-seleccionar">Seleccionar</button>
            </form>
        </div>

    <?php
    }
    ?>

    <?php
    ?>

</body>

</html>