<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear nuevo usuario</title>
</head>
<body>
    <h1 class="#">Crear nuevo usuario</h1><br><br><br>
        <button onclick="backHome()">regresar</button><br><br><br><br>
    <form action="usuarioCreado.php" method="post">
        Nombre completo: <input type="text" name="nombre" placeholder="nombre"><br><br><br>         
        Email: <input type="email" name="email" placeholder="email"><br><br><br>          
        Contraseña: <input type="password" name="contraseña" placeholder="contraseña"><br><br><br> 
        Fecha de nacimiento: <input type="date" name="fechaNacimiento" placeholder="día/mes/año"><br><br><br> 
        
        <input type="submit" value="enviar" name="enviar">
    </form>    
</body>
<script src="code.js"></script>
</html>