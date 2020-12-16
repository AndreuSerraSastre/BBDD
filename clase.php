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
        $consulta = "SELECT * FROM `classe`
        INNER JOIN vehicle on classe.vehicleReferencia = vehicle.idVehicle
        WHERE classe.nom = 'TURISME'";


        include './sql/ejecutarsql.php';

        while ($valores = mysqli_fetch_array($resultat)) {

    ?>
            <h1 class="titulo-clase">Clase <?php echo $_GET['Clase']; ?></h1>

            <div class="vehiculo-clase">
                <div>
                    <img class="imagen-vehiculo" src="./img/<?php echo $valores['foto'] ?>"><img>
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
                <form class="form-selecionar" action="./selects/reservar.php" method="post">

                    <input type="hidden" name="clase" value="<?php echo $_GET['Clase']; ?>">

                    <div class="fecha-texto">
                        <label class="label-fecha-clase" for="start">FECHA DE RECOGIDA</label>
                        <input class="fecha-input-clase" type="date" id="desde" name="desde" value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d", strtotime("+1 year")) ?>">
                    </div>

                    <h1>-</h1>

                    <div class="fecha-texto">
                        <label class="label-fecha-clase" for="start">FECHA DE DEVOLUCIÓN</label>
                        <input class="fecha-input-clase" type="date" id="hasta" name="hasta" value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="<?php echo date("Y-m-d", strtotime("+1 year")) ?>">
                    </div>

                    <button type="summit" class="boton-seleccionar">Seleccionar</button>
                </form>
            </div>

    <?php
        }
    }
    ?>

    <?php
    ?>

</body>

</html>