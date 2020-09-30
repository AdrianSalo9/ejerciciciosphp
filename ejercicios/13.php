<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (!empty($_POST)) {?>      
        <h1>Hola <?php echo "$_POST[nombre]" ?></h1>
        <?php }else {?>
        <form action="" method="post">  
          <label>Nombre<input type="text" name="nombre"required minlength="3" placeholder="Por ejemplo Ana" value=<?php echo "$_POST[nombre]"?>>
          <label>Enviar <input type="submit">
        </form>
        <?php } ?>   
</body>
</html>