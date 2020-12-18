<link rel="stylesheet" href="./../css/comprobar.css">

<?php


    $client_nom = $_POST['introduir_nom'];
    $client_telefon = $_POST['introduir_telefon'];
    $client_email = $_POST['introduir_email'];
    $client_rol = $_POST['introduir_rol'];
    $client_pass =crypt($_POST['introduir_password'],"bd243206245d");
    $client_dni = $_POST['introduir_dni'];


    if(isset( $client_nom)&&isset( $client_telefon) && isset( $client_email) && isset( $client_pass)&& isset( $client_dni) ) {

    $consulta = "INSERT INTO bd243206245d.usuari ( nom, telefon, email, rol, dni, password) VALUES ('".$client_nom."', '".$client_telefon."', '".$client_email."', 'CLIENT', '".$client_dni."', '".$client_pass."');";
    include './../sql/ejecutarsql.php';

    if ($error != "null") {
        echo "<div class=\"alertneg\">
        <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
        <strong>ERROR!</strong> No s'ha pogut crear el client". $error."
        </div>";
    } else {
        echo "<div class=\"alertsucc\">  
        <strong>Perfecte!</strong> El client: ".$client_nom." s'ha creat correctament.
        </div>"; 
    }

    echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../index.php'>";
    }else{
            echo "<div class=\"alertneg\">
            <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
            <strong>ERROR!</strong> No se han rellenado todos los campos
            </div>";
            echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../clients.php'>";
    }




// $consulta = "INSERT INTO `vehicle`(`idVehicle`, `matricula`, `classe`, `model`, `foto`) VALUES (UUID(),'" . $_POST["matricula"] . "','" . $_POST["clase"] . "','" . $_POST["modelo"] . "','" . basename($_FILES["fileToUpload"]["name"]) . "')";

// include './../sql/ejecutarsql.php';


// if ($error != "null") {
//     echo "<div class=\"alertneg\">
//     <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
//     <strong>ERROR!</strong> Ha habido un error, el vehiculo no se ha podido modificar.
//     </div>";
// } else {
//     echo "<div class=\"alertsucc\">
//     <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
//     <strong>CORRECTO!</strong> Se ha modificado correctamente.
//     </div>";
// }

// echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=./../clients.php'>";
?>