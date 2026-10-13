<?php 

    $pritext=$_GET["pritext"]??"";
    $sel=$_GET["sel"]??"";
    $sectext=$_GET["sectext"]??"";

?>

<!DOCTYPE html>
<html>
    <head>

    <head>

    <body>
        <input name="pritext">
        <br>
        <select name="sel" >
            <option>and</option>
            <option>or</option>
            <option>xor</option>
            <option>+</option>
            <option>-</option>
        </select>
        <br>
        <input name="sectext">
    </body>

</html>