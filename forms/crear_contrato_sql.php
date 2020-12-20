<link rel="stylesheet" href="./../css/comprobar.css">
<?php
session_start();

$consulta = "INSERT INTO `contracte`(`firmat`, `idVehicle`, `idClient`, `idAdministrador`, `idReservaRecollida`, `dataFi`, `dataInici`) VALUES (0,'" . $_POST["vehiculo"] . "','" . $_POST["client"] . "','" . $_SESSION["DNI"] . "','" . $_POST["id"] . "','" . $_POST["dataInici"] . "','" . $_POST["dataFi"] . "')";

echo $consulta;

include './../sql/ejecutarsql.php';

if ($error != "null") {
    echo "<div class=\"alertneg\">
    <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
    <strong>ERROR!</strong> Ha habido un error, el vehiculo no se ha podido modificar.
    </div>";
} else {
    echo "<div class=\"alertsucc\">
    <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
    <strong>CORRECTO!</strong> Se ha modificado correctamente.
    </div>";
}

echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../reservas.php'>";
