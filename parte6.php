<?php
    $frase = "Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío";
    $palabras = explode(" ", $frase);
    $a = [];
    /*seleccion de palabras impares*/
    for ($i = 0; $i < count($palabras); $i += 2) {
        $a[] = $palabras[$i];
    }
    /*quitar frio*/
    $b = [];
    foreach ($palabras as $p) {
        if ($p != "frío") {
            $b[] = $p;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Strings cachondas</title>
    </head>
    <body>
        <p><?php echo $frase; ?></p>
        <p><?php echo implode(" ", $a); ?></p>
        <p><?php echo implode(" ", $b); ?></p>
    </body>
</html>