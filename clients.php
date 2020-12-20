<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./css/form.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<?php
include './header.php';
if (!isset($_SESSION["Usuario"])) {
  echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=./index.php'>";
}

?>

<body>
  <div class="custom_form">
    <div class="formulario">
      <h1>Creació de client</h1>

      <form  method="post" action="./forms/crear_client.php">
        <p class="p">
          <label for="nom" class="colocar_nom">Nom
            <span class="obligatorio">*</span>
          </label>
          <input type="text" name="introduir_nom" id="nom" required="obligatorio" placeholder="Escriu el teu nom" />
        </p>

        <p class="p">
          <label for="email" class="colocar_email">Email
            <span class="obligatorio">*</span>
          </label>
          <input type="email" name="introduir_email" id="email" required="obligatorio" placeholder="Escriu el teu Email" />
        </p>

        <p class="p">
          <label for="telefon" class="colocar_telefon">Telèfon
            <span class="obligatorio">*</span>
          </label>
          <input type="text" name="introduir_telefon" id="telefon" required="obligatorio" placeholder="Escriu el teu telèfon" />
        </p>
        <p class="p">
          <label for="dni" class="colocar_dni">DNI
            <span class="obligatorio">*</span>
          </label>
          <input type="text" name="introduir_dni" id="dni" required="obligatorio" placeholder="Escriu el teu DNI" />
        </p>
        <p class="p">
          <label for="pass" class="colocar_pass">Password
            <span class="obligatorio">*</span>
          </label>
          <input type="password" name="introduir_password" id="password" required="obligatorio"  />
        </p>
        <!-- <p class="p">
          <label for="rol" class="colocar_rol">Rol
          </label>
          <select id="rolSelect" name="introduir_rol">
          <?php
            $consulta = "SELECT nom from `rol`";
            include './sql/ejecutarsql.php';

            while ($valores = mysqli_fetch_array($resultat)) {
          ?>          
           <option value="<?php echo $valores['nom'] ?>"><?php echo $valores['nom'] ?></option>
          <?php } ?>
            </select>
        </p> -->

        <button type="submit" name="enviar_formulario" id="enviar">
          <p>Enviar</p>
        </button>

        <p class="aviso">
          <span class="obligatorio"> * </span>Els camps son obligatoris.
        </p>
      </form>
    </div>
  </div>
</body>

</html>

<script>
    $(function() {
        $("#clients-header").addClass("active");
    });
</script>