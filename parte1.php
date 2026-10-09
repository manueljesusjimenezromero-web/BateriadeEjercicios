<?php

        $dado =rand(1,6);
        $Resultado =$_GET("resultado") ??"No esta definida";

?>

<!DOCTYPE html>
<html>
    <head>
    <head>
    <body>
        <h1>Dado</h1>

    
        <a href="parte1.php?dado">Lanzar dado</a>

        <?php 
            
                echo "<p>Resultado: <strong>$dado</strong></p>";
            
        ?>
    <body>
<html>