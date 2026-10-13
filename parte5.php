<?php 

    $pritext=$_GET["pritext"]??"";
    $sel=$_GET["sel"]??"";
    $sectext=$_GET["sectext"]??"";

    $a="";
?>

<!DOCTYPE html>
<html>
    <head>

    <head>

    <body>

        <form id="miform">
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
        </form>
        <button type="submit" form="miform">solucion</button>
        <?php
            if ($sel == "and"){
                $a=($pritext && $sectext) ? "true" : "false";
            }elseif($sel == "or"){
                $a=($pritext || $sectext) ? "true" : "false";
            }elseif($sel == "xor"){
                $a=($pritext != $sectext) ? "true" : "false";
            }
            if (is_numeric($pritext) && is_numeric($sectext)){
                if($sel == "+"){
                    $a=$pritext + $sectext;
                }else{
                    $a=$pritext - $sectext;
                }
            }
            
            echo "<p>Solucion:".$a."</p>";
        ?>
    </body>

</html>