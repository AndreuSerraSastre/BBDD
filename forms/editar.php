<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./../css/editar.css">
    <link rel="stylesheet" href="./../css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
    $_GET['idvehiculo'];
    include './../header.php';
    ?>

    <h1 class="titulo-editar">Editar el vehiculo</h1>

    <div class="div-form-editar">

        <form class="form-editar" method="post" action="./action_page.php" enctype="multipart/form-data">

            <img class="imagen-editar" src="./../img/coches-de-lujo-baratos-de-segunda-mano-1-1280x720.jpg"><img>

            Seleccione una imagen si deseas reemplazarla:
            <input class="input-file" type="file" name="fileToUpload" id="fileToUpload">

            <div class="div-propiedad">
                <label class="div-label" for="fname">Matricula:</label><br>
                <input class="div-input" type="text" id="fname" name="fname"><br>
            </div>
            <div class="div-propiedad">
                <label class="div-label" for="lname">Clase:</label><br>
                <input class="div-input" type="text" id="lname" name="lname"><br><br>
            </div>
            <div class="div-propiedad">
                <label class="div-label" for="lname">Modelo:</label><br>
                <input class="div-input" type="text" id="lname" name="lname"><br><br>
            </div>

            <input class="submit-guardar" type="submit" value="Guardar">

        </form>

    </div>

</body>

</html>