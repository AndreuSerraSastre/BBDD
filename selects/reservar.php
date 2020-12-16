<html>

<head>

    <link rel="stylesheet" href="./../css/comprobar.css">

</head>

<body>

    <?php
    session_start();

    if (!isset($_SESSION["Usuario"])) {
        echo "<div class=\"alertneg\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>ERROR!</strong> Es necesario estar registrado para poder hacer reservas.
        </div>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../clase.php?Clase=";
        echo $_POST['clase'];
        echo "'>";
    } else {

        $objDateTime = new DateTime('NOW');
        $objDateTimeprint = $objDateTime->format('Y-m-d H:i');

        $consulta = "INSERT INTO `reservareservada`(`id`,`dataFi`, `dataInici`, `idClient`, `classeReserva`, `dataReserva`) VALUES (UUID(), '" . $_POST["hasta"] . "','" . $_POST["desde"] . "','" . $_SESSION['ID'] . "','" . $_POST['clase'] . "','" . $objDateTimeprint . "')";
        include './../sql/ejecutarsql.php';

        if ($error == "null") {
            echo "<div class=\"alertsucc\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>CORRECTO!</strong> Se ha hecho la reserva correctamente.
        </div>";
            echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../index.php'>";
        } else {
            echo "<div class=\"alertneg\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>ERROR!</strong> Ha habido un error al crear la tarea: " . $error . ".
        </div>";
            echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../clase.php?Clase=";
            echo $_POST['clase'];
            echo "'>";
        }
    }
    ?>

</body>

</html>