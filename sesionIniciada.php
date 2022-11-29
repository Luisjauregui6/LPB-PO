<?php
 $usuario = $_POST['nombre'];

 echo "<h1>Bienvenido " , "<em>", $usuario, "</em>", "</h1>";
 ?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sesión iniciada</title>
</head>
<body>
<button onclick="backHome()">regresar</button><br><br><br>
    <h2>subir archivo</h2>
    <form action="archivoSubido.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo"><br><br>
        <input type="submit" value="enviar">
    </form> 
</body>
<script src="code.js"></script>
</html>