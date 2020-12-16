<!DOCTYPE html>
<html>
<?php
if (isset($_GET['CerrarSesion'])) {
    setcookie("Usuario", "", time() + (86400 * 30), "/");
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=./index.php'>";
}
?>

<head>

    <link rel="stylesheet" href="./css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <div class="header">
        <a href="./" class="logo">AlquilaCar.com</a>
        <div class="header-right">
            <a class="active" href="./">Home</a>
            <a href="contact.php">Contactar</a>
            <?php
            if (isset($_COOKIE["Usuario"])) {
                if (isset($_COOKIE["Role"]) && $_COOKIE["Role"] == "Admin") {
                    echo "<a href=\"reservas.php?filtrar=false\">Reservas</a>";
                    echo "<a href=\"vehiculos.php\">Vehiculos</a>";
                    echo "<a href=\"clientes.php\">Clientes</a>";
                    echo "<a href=\"contractos.php\">Contratos</a>";
                }
                echo "<a href=\"index.php?CerrarSesion=true\" class=\"cerrarSession\" >Cerrar Sesión</a>";
            } else {
                echo "<a onclick=\"document.getElementById('id01').style.display = 'block'\" class=\"iniciarSession\">Login</a>";
            }
            ?>
        </div>
    </div>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="./selects/comprobar.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                <img src="./img/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Usuario</b></label>
                <input class="entrada" type="text" placeholder="Nombre del usuario" name="uname" required>

                <label for="psw"><b>Contraseña</b></label>
                <input class="entrada" type="password" placeholder="Contraseña" name="psw" required>

                <button class="boton" type="submit">Login</button>
                <label>
                    <input class="remember" type="checkbox" checked="checked" name="remember"> Recordar credenciales
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancelar</button>
                <span class="psw">¿Contraseña <a href="#">olvidada?</a></span>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    </script>

</body>

</html>