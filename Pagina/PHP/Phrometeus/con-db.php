<?php 
    $cox = mysqli_connect("localhost","root", "", "registrate");
    if ($cox){
       

        if(isset($_POST['registrate'])){
            if(strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >=1 && 
            strlen($_POST['contraseña']) >= 1 &&
            strlen($_POST['fecha']) >= 1) {
                $nombre = trim($_POST['name']) ;
                $email = trim($_POST['correoelecronico']) ;
                $contraseña = trim($_POST['contraseña']) ;
                $fecha = date($_POST['dateborn']);

                $consulta = "INSERT INTO `registro`(`nombre`, `correoelecronico`, `contraseña`, `dateborn`) VALUES ('$name','$email','$contraseña','$fecha')";
                $resultado = mysqli_query($cox,$consulta);

                if($resultado){
                    ?> 
                   <h3 class="ok">Listo</h3>
                   <?php

                }else{
                    ?> 
                   <h3 class="bad">ERRor</h3>
                   <?php
                }
            }
        }
    }
        
?>