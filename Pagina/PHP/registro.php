<?php 
    include("con-db.php");

    if(isset($_POST['registrate'])){
        if(strlen($_POST['nombre']) < 1 &&
        strlen($_POST['email']) < 1 && 
        strlen($_POST['contraseña']) < 1 &&
        strlen($_POST['fecha']) < 1) {
            $nombre = $_POST['nombre'];
            $email = $_POST['correoelectronico'];
            $contraseña = $_POST['contraseña'];
            $fecha = $_POST['dateborn'];
    }
    }

    if($cox){
        echo "Listo";
    } else {
        echo "Error"; }
?>
