<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ejercicios/17/css/css.css">
    <title>Document</title>
</head>
<body>
    <h1>Lista de los números pares en los primeros 100 números</h1>
    <?php
    foreach ($pares as $par) {
        echo $par." ";
    }
    ?>
    <p><a href="/ejercicios/17/views/index.php">Volver</p>
</body>
</html>