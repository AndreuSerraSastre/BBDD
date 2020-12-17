<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./../../css/comprobar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
    $consulta = "DELETE FROM `contracte` WHERE id = '" . $_GET['id'] . "'";
    include './../sql/ejecutarsql.php';

    if ($error != "null") {
        echo "<div class=\"alertneg\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>ERROR!</strong> Ha habido un error, el contrato no se ha eliminado.
        </div>";
    } else {
        echo "<div class=\"alertsucc\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>CORRECTO!</strong> Se ha eliminado correctamente.
        </div>";
    }
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='5;URL=./../../contratos.php'>";

    ?>

</body>

</html>