<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $divisor=20;  
    $primo=false; 
    echo "Los divisores de ".$divisor." son: ";     
        for ($i=1; $i <= $divisor; $i++) { 
            if ($divisor%$i==0) {
                echo $i." ";         
            }          
        }

    
    
    ?>
</body>
</html>