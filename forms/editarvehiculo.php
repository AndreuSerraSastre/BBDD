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

    $consulta = "SELECT * FROM `vehicle` WHERE idVehicle = '" . $_GET['idvehiculo'] . "'";


    include './../sql/ejecutarsql.php';

    while ($valores = mysqli_fetch_array($resultat)) {

    ?>

        <h1 class="titulo-editar">Editar el vehiculo</h1>

        <div class="div-form-editar">

            <form class="form-editar" method="post" action="./action_page.php" enctype="multipart/form-data">

                <input id="idvehiculo" name="idvehiculo" type="hidden" value="<?php echo  $_GET['idvehiculo'] ?>"></input>

                <img class="imagen-editar" src="./../img/<?php echo $valores['foto'] ?>"><img>

                Seleccione una imagen si deseas reemplazarla:
                <input class="input-file" type="file" name="fileToUpload" id="fileToUpload">

                <div class="div-propiedad">
                    <label class="div-label" for="fname">Matricula:</label><br>
                    <input class="div-input" type="text" id="matricula" name="matricula" value="<?php echo $valores['matricula'] ?>"><br>
                </div>
                <div class="div-propiedad">
                    <label class="div-label" for="lname">Clase:</label><br>
                    <select class="div-input" id="clase" name="clase" value="<?php echo '<option value="' . $valores['clase'] . '">' . $valores['clase'] . '</option>' ?>">
                        <?php
                        $consulta = "SELECT * FROM `classe`";
                        include './../sql/ejecutarsql.php';
                        while ($valores = mysqli_fetch_array($resultat)) {
                            echo '<option value="' . $valores['nom'] . '">' . $valores['nom'] . '</option>';
                        }
                        ?>
                    </select><br>
                </div>
                <div class="div-propiedad">
                    <label class="div-label" for="lname">Modelo:</label><br>
                    <select class="div-input" type="text" id="modelo" name="modelo" value="<?php echo '<option value="' . $valores['model'] . '">' . $valores['model'] . '</option>' ?>">
                        <?php
                        $consulta = "SELECT * FROM `model`";
                        include './../sql/ejecutarsql.php';
                        while ($valores = mysqli_fetch_array($resultat)) {
                            echo '<option value="' . $valores['nom'] . '">' . $valores['nom'] . '</option>';
                        }
                        ?>
                    </select><br>
                </div>

                <input class="submit-guardar" type="submit" value="Guardar">

            </form>

        </div>

    <?php
    }
    ?>

</body>

</html>