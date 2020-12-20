<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <div class="header">
        <a href="./" class="logo">AlquilaCar.com</a>
        <div class="header-right">
            <a id="home-header" href="./">Home</a>
            <a id="contactar-header" href="contact.php">Contactar</a>
            <?php
            session_start();

            if (isset($_GET['CerrarSesion'])) {
                unset($_SESSION["Usuario"]);
                unset($_SESSION["Role"]);
                unset($_SESSION["DNI"]);
                echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=./index.php'>";
            }

            if (isset($_SESSION["Usuario"])) {
                if (isset($_SESSION["Role"]) && $_SESSION["Role"] == "ADMINISTRADOR") {
                    echo "<a href=\"reservas.php?filtrar=false\">Reservas</a>";
                    echo "<a href=\"vehiculos.php\">Vehiculos</a>";
                    echo "<a id=\"clients-header\" href=\"clients.php\">Clientes</a>";
                    echo "<a href=\"contratos.php\">Contratos</a>";
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