<html>

<head>

    <link rel="stylesheet" href="./../css/comprobar.css">

</head>

<body>

    <?php
    session_start();

    $usuario = $_POST['uname'];
    $pass = crypt($_POST['psw'], "bd243206245d");

    include './../sql/comprobarUsario.php';

    if (!isset($contraseña) || $contraseña != $pass) {
        echo "<div class=\"alertneg\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>ERROR!</strong> Ha habido un error de autentificación.
        </div>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../index.php'>";
        unset($_SESSION["Usuario"]);
        unset($_SESSION["Usuario"]);
        unset($_SESSION["Role"]);
        unset($_SESSION["DNI"]);
    } else {
        echo "<div class=\"alertsucc\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>CORRECTO!</strong> Has iniciado sesión correctamente.
        </div>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../index.php'>";
    }
    ?>

</body>

</html>