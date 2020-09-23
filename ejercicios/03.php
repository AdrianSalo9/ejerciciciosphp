<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define ('SIZE',10);
    for ($i=1; $i <= SIZE; $i++) { 
        if ($i%3==0) {
            echo $i . " es un múltiplo de tres <br>";
        }    
    } 
    ?>
</body>
</html>