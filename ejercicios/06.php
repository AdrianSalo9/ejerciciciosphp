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
        'Ala'=>"Diego",
        'Ala-Pivot'=>"Jorge",
        'Base'=>"Javier",
        'Escolta'=>"Luis"
    );
    foreach ($basket as $element) {
        echo "<ul><li>".$element."</li></ul>";
    }
    foreach ($basket as $position => $element) {
        echo "<ul><li>".$position." : ".$element."</li></ul>";
    }
    ?>
</body>
</html>