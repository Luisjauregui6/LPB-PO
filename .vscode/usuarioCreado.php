<?php
    $nombre = $_POST['nombre'];
    $correoElectronico = $_POST['correoElec'];
    $contraseña = $_POST['constraseña'];
    $fechaDeNacimiento = $_POST['fechaNacimiento'];

        $usuario = array();
        $usuario["user"] = array("nombre: ", $nombre, "email: ", $correoElectronico, "contraseña ", $contraseña, "fecha de nacimiento: ", $fechaDeNacimiento )

    
 ?>