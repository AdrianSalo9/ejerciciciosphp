<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   echo '<meta charset="UTF-8">';
    if(isset($_POST) && !empty($_POST)){
        echo "Recibido!!<hr>";
        echo "titulo: $_POST[titulo]<br>autor: $_POST[autor]<br>editorial: $_POST[editorial]<br>paginas: $_POST[paginas]";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        echo "<hr><pre>";
        var_dump($_POST);
    }
     else {
         echo "No hemos recibido nada!";
    }?>
</body>