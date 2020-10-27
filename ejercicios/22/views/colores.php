<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="colores.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>    
<h1>El color elegido es: <?php echo $_SESSION['colores']?></h1>
        <?php 
        if ($_SESSION['colores']=='rojo') {?>     
         <body id=rojo> <?php }       
         ?></body>   
         <?php 
        if ($_SESSION['colores']=='azul') {?>     
         <body id=azul> <?php }
         ?></body>  
        <?php
        if ($_SESSION['colores']=='amarillo') {?>     
        <body id=amarillo> <?php }
        ?></body> 
        <?php
        if ($_SESSION['colores']=='verde') {?>     
        <body id=verde> <?php }
        ?></body> 
<a href="?method=close">Elegir otro color</a>
        
</html>