<?php
$target_dir = "./../img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if ($_FILES['fileToUpload']['size'] == 0) {
  echo "No se ha introducido ninguna imagne";
} else {

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      echo "El archivo no es una imagen.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "El archivo ya existe.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Solo JPG, JPEG, PNG y GIF son tipos de archivo válidos.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Ha habido un error al subir el archivo.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "El archivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " se ha subido.";
    } else {
      echo "No se ha guardado el archivo en el servidor.";
    }
  }
}
