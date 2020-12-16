<?php
include 'connect.php';
$resultat = mysqli_query($con, $consulta);
$error = "null";

if (!$resultat) {
    $error = mysqli_error($con);
}


mysqli_close($con);
