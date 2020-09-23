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
    $n1=1;
    $n2=0;
    echo $n2." ";  
    for ($i=0; $i < SIZE ; $i++) { 
        $suma=$n1+$n2;
        $n1=$n2;
        $n2=$suma;
        echo $suma." ";
    }
    
    ?>
</body>
</html>