<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ejercicios/17/css/css.css">
    <title>Document</title>
</head>
<body>
    <h1>Lista de las potencias de 2</h1>
    <?php
    foreach ($potencias as $num) {
        echo $num." ";
    }

    ?>
    <p><a href="/ejercicios/17/views/index.php">Volver</p>
</body>
</html>