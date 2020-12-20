<link rel="stylesheet" href="./../../css/comprobar.css">
<?php

$consulta = "UPDATE `contracte` SET `firmat`=1 WHERE id = '" . $_GET['id'] . "'";

include './../sql/ejecutarsql.php';

if ($error != "null") {
    echo "<div class=\"alertneg\">
    <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
    <strong>ERROR!</strong> Ha habido un error, el contrato no se ha podido firmar.
    </div>";
} else {
    echo "<div class=\"alertsucc\">
    <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
    <strong>CORRECTO!</strong> Se ha firmado correctamente.
    </div>";
}

echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../../contratos.php'>";
