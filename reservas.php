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
            INNER JOIN usuari on usuari.dni = idClient
            WHERE contracte.idVehicle = '" . $_GET['idvehiculo'] . "'";


            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
        ?>
                <div class="reserva-main">
                    <div>
                        <h2>Reserva recogida</h2>
                        <h2>Cliente: <?php echo $valores['nom'] ?></h2>
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
            INNER JOIN usuari on usuari.dni = idClient
            WHERE contracte.idVehicle = '" . $_GET['idvehiculo'] . "'";

            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
            ?>
                <div class="reserva-main">
                    <div>
                        <h2>Reserva finalizada</h2>
                        <h2>Cliente: <?php echo $valores['nom'] ?></h2>
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
            $consulta = "SELECT * FROM `reservareservada` INNER JOIN usuari on usuari.dni = idClient";
            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
            ?>
                <form class="reserva-main" action="./sql/pagarReserva.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $valores['id']; ?>">
                    <div>
                        <h2>Reserva reservada</h2>
                        <h2>Cliente: <?php echo $valores['nom'] ?></h2>
                        <h2>Clase: <?php echo $valores['classeReserva'] ?></h2>
                        <h2>Fecha reserva:<?php echo $valores['dataReserva'] ?></h2>
                    </div>
                    <div class="fechas-reservas">
                        <h2>Fecha inicio: <?php echo $valores['dataInici'] ?></h2>
                        <h2 class="fechas-reservas-space">-</h2>
                        <h2>Fecha fin: <?php echo $valores['dataFi'] ?></h2>
                    </div>
                    <button class="boton-reservas">Pagar</button>
                </form>
            <?php
            }
            $consulta = "SELECT * FROM `reservapagada` INNER JOIN usuari on usuari.dni = idClient";
            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
            ?>
                <form class="reserva-main" action="./forms/crearcontrato.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $valores['id']; ?>">
                    <div>
                        <h2>Reserva pagada</h2>
                        <h2>Cliente: <?php echo $valores['nom'] ?></h2>
                        <h2>Clase: <?php echo $valores['classeReserva'] ?></h2>
                        <h2>Fecha reserva:<?php echo $valores['dataReserva'] ?></h2>
                    </div>
                    <div class="fechas-reservas">
                        <h2>Fecha inicio: <?php echo $valores['dataInici'] ?></h2>
                        <h2 class="fechas-reservas-space">-</h2>
                        <h2>Fecha fin: <?php echo $valores['dataFi'] ?></h2>
                    </div>
                    <button class="boton-reservas">Contrato</button>
                </form>

            <?php
            }
            $consulta = "SELECT * FROM `reservarecollida` INNER JOIN usuari on usuari.dni = idClient";
            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
            ?>
                <form class="reserva-main" action="./sql/finalizarReserva.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $valores['id']; ?>">
                    <div>
                        <h2>Reserva recogida</h2>
                        <h2>Cliente: <?php echo $valores['nom'] ?></h2>
                        <h2>Clase: <?php echo $valores['classeReserva'] ?></h2>
                        <h2>Fecha reserva:<?php echo $valores['dataReserva'] ?></h2>
                    </div>
                    <div class="fechas-reservas">
                        <h2>Fecha inicio: <?php echo $valores['dataInici'] ?></h2>
                        <h2 class="fechas-reservas-space">-</h2>
                        <h2>Fecha fin: <?php echo $valores['dataFi'] ?></h2>
                    </div>
                    <button class="boton-reservas">Finalizar</button>
                </form>

            <?php
            }
            $consulta = "SELECT * FROM `reservafinalitzada` INNER JOIN usuari on usuari.dni = idClient";
            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
            ?>
                <div class="reserva-main">
                    <div>
                        <h2>Reserva finalizada</h2>
                        <h2>Cliente: <?php echo $valores['nom'] ?></h2>
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