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

    ?>

    <h1 class="titulo-editar">Crear un vehiculo</h1>

    <div class="div-form-editar">

        <form class="form-editar" method="post" action="./crear_vehiculo.php" enctype="multipart/form-data">


            Seleccione una imagen:
            <input class="input-file" type="file" name="fileToUpload" id="fileToUpload">

            <div class="div-propiedad">
                <label class="div-label" for="fname">Matricula:</label><br>
                <input class="div-input" type="text" id="matricula" name="matricula"><br>
            </div>
            <div class="div-propiedad">
                <label class="div-label" for="lname">Clase:</label><br>
                <select class="div-input" id="clase" name="clase">
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
                <select class="div-input" type="text" id="modelo" name="modelo">
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


</body>

</html>