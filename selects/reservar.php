<html>

<head>

    <link rel="stylesheet" href="./../css/comprobar.css">

</head>

<body>

    <?php
    if (isset($_COOKIE["Usuario"])) {
        echo "<div class=\"alertsucc\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>CORRECTO!</strong> Se ha hecho la reserva correctamente.
        </div>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../index.php'>";
    } else {
        echo "<div class=\"alertneg\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>ERROR!</strong> Es necesario estar registrado para poder hacer reservas.
        </div>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../clase.php?Clase=";
        echo $_POST['clase'];
        echo "'>";
    }
    ?>

</body>

</html>