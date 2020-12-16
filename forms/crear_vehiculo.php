<link rel="stylesheet" href="./../css/comprobar.css">

<?php
$target_dir = "./../img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    } else {
        echo "No se ha guardado el archivo en el servidor.";
    }
}

$consulta = "INSERT INTO `vehicle`(`idVehicle`, `matricula`, `classe`, `model`, `foto`) VALUES (UUID(),'" . $_POST["matricula"] . "','" . $_POST["clase"] . "','" . $_POST["modelo"] . "','" . basename($_FILES["fileToUpload"]["name"]) . "')";

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
