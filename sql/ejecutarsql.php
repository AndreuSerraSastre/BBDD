<?php
include 'connect.php';
$resultat = mysqli_query($con, $consulta);

if (!$resultat) {
    printf("Error\n");
}


mysqli_close($con);
