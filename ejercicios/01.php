<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    <?php 
    $nombre="Adrian";
    $apellido="Salo";
    $apellido2="Herrero";
    $edad=22;
    $nacionalidad="Española";
    ?>
    <table>
    <tr>     
        <th>nombre</th>
        <td><?= "<em> $nombre</em>" ?></td> 
    </tr>
    <tr>
        <th>apellido</th>
        <td><?= "$apellido $apellido2"?></td>  
    </tr>
    <tr>
        <th>edad</th>
        <td><?print($edad)?></td>
    </tr>
    <tr>     
        <th>nacionalidad</th>
        <td><?php echo $nacionalidad ?></td> 
    </tr>
    </table>
</body>
</html>