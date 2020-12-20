<?php
$consulta = "SELECT * FROM `usuari` WHERE nom = '" . $usuario . "'";

include 'ejecutarsql.php';

while ($valores = mysqli_fetch_array($resultat)) {
    $contraseña = $valores['password'];
    $_SESSION["Usuario"] = $usuario;
    $_SESSION["Role"] = $valores['rol'];
    $_SESSION["DNI"] = $valores['dni'];
}
