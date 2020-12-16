<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./css/reservas.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php

    include './header.php';

    if (!isset($_SESSION["Usuario"])) {
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=./index.php'>";
    }

    ?>

    <div class="reservas-main">

        <?php

        if (isset($_GET['idvehiculo'])) {
            $consulta = "SELECT reservarecollida.dataFi, reservarecollida.dataInici, reservarecollida.dataReserva, reservarecollida.idClient, reservarecollida.classeReserva FROM `reservarecollida`
inner join contracte on contracte.idReservaRecollida = reservarecollida.id
WHERE contracte.idVehicle = '" . $_GET['idvehiculo'] . "'";


            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
        ?>
                <div class="reserva-main">
                    <div>
                        <h2>Reserva recogida</h2>
                        <h2>IdCliente: <?php echo $valores['idClient'] ?></h2>
                        <h2>Clase: <?php echo $valores['classeReserva'] ?></h2>
                        <h2>Fecha reserva:<?php echo $valores['dataReserva'] ?></h2>
                    </div>
                    <div class="fechas-reservas">
                        <h2>Fecha inicio: <?php echo $valores['dataInici'] ?></h2>
                        <h2 class="fechas-reservas-space">-</h2>
                        <h2>Fecha fin: <?php echo $valores['dataFi'] ?></h2>
                    </div>
                </div>

            <?php
            }


            $consulta = "SELECT reservafinalitzada.dataFi, reservafinalitzada.dataInici, reservafinalitzada.dataReserva, reservafinalitzada.idClient, reservafinalitzada.classeReserva FROM `reservafinalitzada`
            inner join contracte on contracte.idreservafinalitzada = reservafinalitzada.id
            WHERE contracte.idVehicle = '" . $_GET['idvehiculo'] . "'";

            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
            ?>
                <div class="reserva-main">
                    <div>
                        <h2>Reserva finalizada</h2>
                        <h2>IdCliente: <?php echo $valores['idClient'] ?></h2>
                        <h2>Clase: <?php echo $valores['classeReserva'] ?></h2>
                        <h2>Fecha reserva:<?php echo $valores['dataReserva'] ?></h2>
                    </div>
                    <div class="fechas-reservas">
                        <h2>Fecha inicio: <?php echo $valores['dataInici'] ?></h2>
                        <h2 class="fechas-reservas-space">-</h2>
                        <h2>Fecha fin: <?php echo $valores['dataFi'] ?></h2>
                    </div>
                </div>

            <?php
            }
        } else {
            $consulta = "SELECT reservarecollida.dataFi, reservarecollida.dataInici, reservarecollida.dataReserva, reservarecollida.idClient, reservarecollida.classeReserva FROM `reservarecollida`";
            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
            ?>
                <div class="reserva-main">
                    <div>
                        <h2>Reserva</h2>
                        <h2>IdCliente: <?php echo $valores['idClient'] ?></h2>
                        <h2>Clase: <?php echo $valores['classeReserva'] ?></h2>
                        <h2>Fecha reserva:<?php echo $valores['dataReserva'] ?></h2>
                    </div>
                    <div class="fechas-reservas">
                        <h2>Fecha inicio: <?php echo $valores['dataInici'] ?></h2>
                        <h2 class="fechas-reservas-space">-</h2>
                        <h2>Fecha fin: <?php echo $valores['dataFi'] ?></h2>
                    </div>
                </div>

            <?php
            }
            $consulta = "SELECT reservafinalitzada.dataFi, reservafinalitzada.dataInici, reservafinalitzada.dataReserva, reservafinalitzada.idClient, reservafinalitzada.classeReserva FROM `reservafinalitzada`";
            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
            ?>
                <div class="reserva-main">
                    <div>
                        <h2>Reserva</h2>
                        <h2>IdCliente: <?php echo $valores['idClient'] ?></h2>
                        <h2>Clase: <?php echo $valores['classeReserva'] ?></h2>
                        <h2>Fecha reserva:<?php echo $valores['dataReserva'] ?></h2>
                    </div>
                    <div class="fechas-reservas">
                        <h2>Fecha inicio: <?php echo $valores['dataInici'] ?></h2>
                        <h2 class="fechas-reservas-space">-</h2>
                        <h2>Fecha fin: <?php echo $valores['dataFi'] ?></h2>
                    </div>
                </div>

        <?php
            }
        }
        ?>

    </div>

</body>

</html>