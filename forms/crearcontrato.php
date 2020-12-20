<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./../css/editar.css">
    <link rel="stylesheet" href="./../css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
    include './../header.php';

    $consulta = "SELECT * FROM `reservapagada` WHERE id = '" . $_POST["id"] . "'";

    include './../sql/ejecutarsql.php';

    while ($valores = mysqli_fetch_array($resultat)) {
    ?>

        <h1 class="titulo-editar">Crear un contrato</h1>

        <div class="div-form-editar">

            <form class="form-editar" method="post" action="./crear_contrato_sql.php" enctype="multipart/form-data">

                <div class="div-propiedad">
                    <label class="div-label" for="fname">Reserva:</label>
                    <input class="div-input" type="text" id="id" name="id" value="<?php echo $_POST["id"]; ?>" readonly>
                </div>

                <div class="div-propiedad">
                    <label class="div-label" for="fname">Fecha inici:</label>
                    <input class="div-input" type="text" id="dataInici" name="dataInici" value="<?php echo $valores["dataInici"]; ?>" readonly>
                </div>

                <div class="div-propiedad">
                    <label class="div-label" for="fname">Fecha final:</label>
                    <input class="div-input" type="text" id="dataFi" name="dataFi" value="<?php echo $valores["dataFi"]; ?>" readonly>
                </div>

                <div class="div-propiedad">
                    <label class="div-label" for="fname">Clase:</label>
                    <input class="div-input" type="text" id="clase" name="clase" value="<?php echo $valores["classeReserva"]; ?>" readonly>
                </div>

                <input class="div-input" type="hidden" id="client" name="client" value="<?php echo $valores["idClient"]; ?>" readonly>

                <div class="div-propiedad">
                    <label class="div-label" for="lname">Vehiculo:</label>
                    <select class="div-input" id="vehiculo" name="vehiculo">
                        <?php
                        $consulta = "SELECT * FROM `vehicle` WHERE classe = '" . $valores["classeReserva"] . "'";
                        include './../sql/ejecutarsql.php';
                        while ($valores1 = mysqli_fetch_array($resultat)) {
                            echo '<option value="' . $valores1['idVehicle'] . '">' . $valores1['matricula'] . ' - ' . $valores1['model'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <input class="submit-guardar" type="submit" value="Crear contrato">

            </form>

        </div>
    <?php
    }
    ?>


</body>

</html>