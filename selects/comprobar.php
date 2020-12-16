<html>

<head>

    <link rel="stylesheet" href="./../css/comprobar.css">

</head>

<body>

    <?php
    session_start();

    $usuario = $_POST['uname'];
    $pass = $_POST['psw'];

    include './../sql/comprobarUsario.php';

    if (!isset($contraseña) || $contraseña != $pass) {
        echo "<div class=\"alertneg\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>ERROR!</strong> Ha habido un error de autentificación.
        </div>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../index.php'>";
        unset($_SESSION["Usuario"]);
    } else {
        echo "<div class=\"alertsucc\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>CORRECTO!</strong> Has iniciado sesión correctamente.
        </div>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../index.php'>";
        setcookie("Usuario", $usuario, time() + (86400 * 30), "/");
        setcookie("Role", "Admin", time() + (86400 * 30), "/");
    }
    ?>

</body>

</html>