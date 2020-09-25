<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $array[]="Adrian";
    $array[]="Koby";
    $array[]="Rafa";
    $array[]="Jorge";
    $array[]="Jaime";
    foreach ($array as $element) {
        echo "<ul><li>".$element."</li></ul>";
    }
    ?>
</body>
</html>