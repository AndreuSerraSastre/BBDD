<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./../css/comprobar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <?php

    $consulta = "call finalitza_reserva('" . $_POST["id"] . "')";

    include './../sql/ejecutarsql.php';

    if ($error != "null") {
        echo "<div class=\"alertneg\">
  <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
  <strong>ERROR!</strong> Ha habido un error, la reserva no se ha podido finalizar.
  </div>";
    } else {
        echo "<div class=\"alertsucc\">
  <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
  <strong>CORRECTO!</strong> Se ha finalizado correctamente.
  </div>";
    }

    echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../reservas.php'>";

    ?>

</body>

</html>