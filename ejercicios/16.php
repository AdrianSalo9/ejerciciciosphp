<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Inserta tu nombre:</h2>
  <form action="">
    <input type="text" name="nombres[]">
    <input type="submit" value="Nuevo">
    <input type="hidden" name="repetido">
    <hr>
    <?php
    if (isset($_GET['nombres'])) {
      foreach($_GET['nombres'] as $nombre) {
        echo '<ul><li><input type="text" name="nombres[]" value="' .$nombre . '"></li></ul>';
      }
    }
    ?>
  </form>
</body>
</html>