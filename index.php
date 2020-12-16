<html>

<link rel="stylesheet" href="./css/index.css">

<body>

    <?php
    include './header.php';
    ?>
    <div class="grid-container">

        <?php
        for ($i = 1; $i < 9; $i++) {
        ?>
            <div class="grid-item" style="background-image: url(https://periodismodelmotor.com/wp-content/uploads/2020/08/coches-de-lujo-baratos-de-segunda-mano-1-1280x720.jpg);">
                <h1 class="NombreClaseText">CLASE <?php echo $i ?></h1>
                <a href="clase.php?Clase=<?php echo $i ?>">Reservar</a>
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