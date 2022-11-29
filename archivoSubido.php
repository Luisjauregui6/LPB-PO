<?php
    $archivo = $_FILES['archivo']['tmp_name'];
    $nombre = $_FILES['archivo']['name'];
    $destino = "subido/".$nombre;
    $subido = move_uploaded_file($archivo, $destino); 

        if ($subido) 
        {
            echo "<h1>archivo subido correctamente</h1><br>";
            echo "<img src='subido/".$nombre."'>";
        }
        else 
        {
            echo "<h1>¡Algo salio mal al subir el archivo!</h1>";
        }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button onclick="backHome()">regresar</button><br><br><br>
    <a href="#">ver archivos subidos</a><br><br><br>
    <a href="#">agregar archivos</a><br><br><br>
    <a href="#">eliminar archivos</a>
</body>
<script src="code.js"></script>
</html>