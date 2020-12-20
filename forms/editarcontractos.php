<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./../../css/editar.css">
    <link rel="stylesheet" href="./../../css/header.css">
    <link rel="stylesheet" href="./../../css/contratos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
    include './../header.php';

    $consulta = "SELECT * FROM `contracte` WHERE id = '" . $_GET['id'] . "'";


    include './../sql/ejecutarsql.php';

    while ($valores = mysqli_fetch_array($resultat)) {

    ?>

        <?php
        $datainici = $valores['dataInici'];
        $fecha = new DateTime($datainici);
        $fecha = $fecha->format('yy-m-d');

        $datafin = $valores['dataFi'];
        $fechafin = new DateTime($datafin);
        $fechafin = $fechafin->format('yy-m-d');
        ?>

        <h1 class="titulo-editar">Editar el contrato</h1>

        <div class="div-form-editar">

            <form class="form-editar" method="post" action="./../editarcontractossql.php" enctype="multipart/form-data">

                <input id="id" name="id" type="hidden" value="<?php echo  $_GET['id'] ?>"></input>

                <div class="div-propiedad">
                    <label class="div-label" for="lname">Usuario:</label><br>
                    <select class="div-input" id="usuario" name="usuario" value="<?php echo '<option value="' . $valores['idClient'] . '">' . $valores['idClient'] . '</option>' ?>">
                        <?php
                        $consulta = "SELECT * FROM `usuari`";
                        include './../sql/ejecutarsql.php';
                        while ($valores = mysqli_fetch_array($resultat)) {
                            echo '<option value="' . $valores['dni'] . '">' . $valores['nom'] . '</option>';
                        }
                        ?>
                    </select><br>
                </div>

                <div class="div-propiedad">
                    <label class="div-label" for="lname">Vehiculo:</label><br>
                    <select class="div-input" type="text" id="vehiculo" name="vehiculo" value="<?php echo '<option value="' . $valores['idVehicle'] . '">' . $valores['idVehicle'] . '</option>' ?>">
                        <?php
                        $consulta = "SELECT * FROM `vehicle`";
                        include './../sql/ejecutarsql.php';
                        while ($valores = mysqli_fetch_array($resultat)) {
                            echo '<option value="' . $valores['idVehicle'] . '">' . $valores['matricula'] . '</option>';
                        }
                        ?>
                    </select><br>
                </div>

                <div class="div-propiedad">
                    <label class="div-label" for="lname">Fecha inicio:</label><br>
                    <input class="fecha-input-clase" type="date" id="desde" name="desde" value=<?php echo $fecha ?>>
                </div>

                <div class="div-propiedad">
                    <label class="div-label" for="lname">Fecha fin:</label><br>
                    <input class="fecha-input-clase" type="date" id="hasta" name="hasta" value=<?php echo $fechafin ?>>
                </div>


                <input class="submit-guardar" type="submit" value="Guardar">

            </form>

        </div>

    <?php
    }
    ?>

</body>

</html>