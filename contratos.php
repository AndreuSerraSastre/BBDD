<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./css/contratos.css">
    <link rel="stylesheet" href="./css/comprobar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    include './header.php';
    $consulta = "SELECT *, client.nom as client, admin.nom as admin,
    CASE 
    WHEN firmat = 0 THEN 'No firmado' 
    WHEN firmat = 1 THEN 'Firmado' 
    END as firmado,
    
    CASE 
    WHEN idReservaRecollida != 'NULL' THEN idReservaRecollida
    WHEN idReservaFinalitzada != 'NULL' THEN idReservaFinalitzada
    END as reserva
    
    FROM `contracte`
    INNER JOIN usuari as client on client.dni = idClient
    INNER JOIN usuari as admin on admin.dni = idAdministrador";

    include './sql/ejecutarsql.php';

    echo '<table>
    <tr>
        <th>id</th>
        <th>Firmado</th>
        <th>Vehiculo</th>
        <th>Cliente</th>
        <th>Administrador</th>
        <th>Reserva</th>
        <th>Fecha inicio</th>
        <th>Fecha final</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>';

    while ($valores = mysqli_fetch_array($resultat)) {
        echo '<tr>';
        echo '<td>' . $valores['id'] . "</td>";
        echo '<td>' . $valores['firmado'] . "</td>";
        echo '<td>' . $valores['idVehicle'] . '</td>';
        echo '<td>' . $valores['client'] . "</td>";
        echo '<td>' . $valores['admin'] . "</td>";
        echo '<td>' . $valores['reserva'] . "</td>";
        echo '<td>' . $valores['dataInici'] . "</td>";
        echo '<td>' . $valores['dataFi'] . '</td>';
        echo '<td><a href=./sql/firmarcontractos.php/?id=' . $valores['id'] . '>Firmar</a></td>';
        echo '<td><a href=./forms/editarcontractos.php/?id=' . $valores['id'] . '>Editar</a></td>';
        echo '<td><a class="a-ref-eliminar" href=./selects/eliminarcontractos.php/?id=' . $valores['id'] . '>Eliminar</a></td>';
        echo '</tr>';
    }
    echo '</table>';

    ?>

    <!-- <a href="./forms/crearcontrato.php" class="float">
        <i class="fa fa-plus my-float"></i>
    </a>
    <div class="label-container">
        <div class="label-text">Crear un contrato</div>
        <i class="fa fa-play label-arrow"></i>
    </div> -->

</body>

</html>