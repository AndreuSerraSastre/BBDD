<html>

<link rel="stylesheet" href="./css/index.css">

<body>

    <?php
    include './header.php';
    ?>
    <div class="grid-container">

        <?php
        $consulta = "SELECT * FROM `classe` inner join vehicle on vehicleReferencia = vehicle.idVehicle";


        include './sql/ejecutarsql.php';

        while ($valores = mysqli_fetch_array($resultat)) {
        ?>
            <div class="grid-item" style="background-image: url(./img/<?php echo $valores['foto'] ?>);">
                <h1 class="NombreClaseText"><?php echo $valores['nom'] ?></h1>
                <a href="clase.php?Clase=<?php echo $valores['nom'] ?>">Reservar</a>
            </div>

        <?php
        }
        ?>

    </div>

    <div class="TextAyuda-main">
        <h1 class="TextAyuda">Selecciona el coche que más te guste</h1>
    </div>

</body>

</html>

<script>
    $(function() {
        $("#home-header").addClass("active");
    });
</script>