<?php
$consulta = "SELECT * FROM `usuario` WHERE nom = '" . $usuario . "'";

include 'ejecutarsql.php';

while ($valores = mysqli_fetch_array($resultat)) {
    $contraseña = $valores['password'];
}
