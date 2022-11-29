<?php
    $nombre = $_POST['nombre'];
    $correolElectronico = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $fechaDeNacimiento = $_POST['fechaNacimiento'];

        $usuario = array();
        $usuario["user"] = array("nombre: ", $nombre, "email: ", $correolElectronico, "contraseña: ", $contraseña, "fecha de nacimiento: ", $fechaDeNacimiento);

        echo json_encode($usuario);    
 ?>