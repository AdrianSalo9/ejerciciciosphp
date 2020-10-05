<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (!empty($_GET)) {?>      
        <h1>Hola <?php foreach($_GET['nombres'] as $nombre){
            echo $nombre." ";
        } ?></h1>
        <?php }else {?>
        <form action="" method="get" >  
          <label>Nombre<input type="text" name="nombres[]" required >
            <br>
          <label>Nombre<input type="text" name="nombres[]" required >
          <br>
          <label>Nombre<input type="text" name="nombres[]" required >
          <br>
          <label>Enviar <input type="submit">
        </form>
        <?php } ?>

</body>
</html>