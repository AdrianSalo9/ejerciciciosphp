<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?method=auth" method="POST" >
        <label>Nombre<input type="text" name="nombre" autocomplete="off" required></label>
        <br>
        <label>Contraseña<input type="password" name="contraseña" required></label>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>