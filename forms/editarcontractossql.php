<link rel="stylesheet" href="./../css/comprobar.css">

<?php
$consulta = "UPDATE `contracte` SET `idVehicle`='" . $_POST["vehiculo"] . "',`idClient`='" . $_POST["usuario"] . "',`dataFi`='" . $_POST["hasta"] . "',`dataInici`='" . $_POST["desde"] . "' WHERE id = '" . $_POST["id"] . "'";

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

echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../index.php'>";
