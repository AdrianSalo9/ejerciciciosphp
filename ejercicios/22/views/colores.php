<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="colorescss.css">
</head>

<body class="$_SESSION['colores']">
    <h1>Este es el color elegido:
        <?php echo $_SESSION['colores']?>
    </h1>
</body>

</html>