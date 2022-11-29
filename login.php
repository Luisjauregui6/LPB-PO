<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
</head>
<body>
    <h1>Ingresa a tu cuenta</h1>
        <button onclick="backHome()">regresar</button><br><br><br><br>
    <form action="sesionIniciada.php" method="post">
        Nombre: <input type="text" name="nombre" placeholder="Nombre"><br><br><br>
        Email: <input type="email" name="email" placeholder="email"><br><br><br>
        Contraseña: <input type="password" name="contraseña" placeholder="Contraseña"><br><br><br>

        <input type="submit" value="enviar" name="enviar">
    </form>    
</body>
<script src="code.js"></script>
</html>