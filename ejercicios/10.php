<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $basket = ["Adrián","Diego","Jorge","Javier","Luis"]; 
    $basket = array(
        'Pivot'=>"Adrian",
        'Alero'=>"Diego",
        'Ala-Pivot'=>"Jorge",
        'Base'=>"Javier",
        'Escolta'=>"Luis"
    );
    foreach ($basket as $position => $element) {
        echo $position ." : ". $element."<br>";
    }
    ?>
</body>
</html>