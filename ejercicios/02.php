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
    echo "<table border = 1; bgcolor=lightblue>";
    $number=8;
    for ($i=0; $i <= SIZE; $i++) { 
        echo" El número ".$number." multiplicado por ".$i." da ".$number*$i;  
        echo "<br>";    
    }  
    ?>
</body>
</html>
