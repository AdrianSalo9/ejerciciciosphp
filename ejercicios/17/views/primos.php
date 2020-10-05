<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista con los números primos</h1>
    <?php
    foreach ($primos as $num) {
        echo "Los primos son $num"." "."<br>";
    }
    foreach ($noPrimos as $nume) {
        echo "Los no primos son $nume"." "."<br>";
    }
    ?>
</body>
</html>