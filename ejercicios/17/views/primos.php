<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ejercicios/17/css/css.css">
    <title>Document</title>
</head>
<body>
    <h1>Lista con los números primos</h1>
    <?php
    foreach ($primosbuenos as $num) {
        echo "Los primos son $num"." "."<br>";
    }
    foreach ($primosmalos as $numm) {
        echo "Los no primos son $numm"." "."<br>";
    }
    ?>
    <p><a href="/ejercicios/17/views/index.php">Volver</p>
</body>
</html>