<?php 
    $primFra = $_GET["primFra"] ?? "";
    $secFra  = $_GET["secFra"] ?? "";
    $terFra  = $_GET["terFra"] ?? "";
    
    $primFra2 = $_GET["primFra2"] ?? "";
    $secFra2  = $_GET["secFra2"] ?? "";
    $terFra2  = $_GET["terFra2"] ?? "";

    $alea = $_GET["alea"] ?? "";

    $primFra3 = ["Yo en tu lugar", "La verdad es que", "Tú sabes que", "No hay duda de que", "Al final"];
    $secFra3 = ["siempre hay que invertir en", "lo importante es", "nunca subestimes", "yo siempre digo que", "el secreto está en"];
    $terFra3 = ["la bolsa de valores", "el no tener dinero congelado en el banco", "los chemtrails", "la nube", "las crypto"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Frases</title>
    </head>
    <body>

        <form id="miForm" >
            <h3>inicio</h3>
            <select name="primFra">
                <option></option>
                <option>Yo en tu lugar</option>
                <option>La verdad es que</option>
                <option>Tú sabes que</option>
                <option>No hay duda de que</option>
                <option>Al final</option>
            </select>
            <br>
            <input name="primFra2"></input>
            <br>
            <h3>nudo</h3>
            <select name="secFra">
                <option></option>
                <option>siempre hay que invertir en</option>
                <option>lo importante es</option>
                <option>nunca subestimes</option>
                <option>yo siempre digo que</option>
                <option>el secreto está en</option>
            </select>
            <br>
            <input name="secFra2"></input>
            <br>
            <h3>desenlace</h3>
            <select name="terFra">
                <option></option>
                <option>la bolsa de valores</option>
                <option>el no tener dinero congelado en el banco</option>
                <option>los chemtrails</option>
                <option>la nube</option>
                <option>las crypto</option>
            </select>
            <br>
            <input name="terFra2"></input>
            <br>
        </form>
        
        <button type="submit" form="miForm">Crear</button>
         <button type="submit" form="miForm" name="alea" value="1">Aleatoria</button>
        <?php 
            if ($alea!=""){


                $a=$primFra3[array_rand($primFra3)];
                $b=$secFra3[array_rand($secFra3)];
                $c=$terFra3[array_rand($terFra3)];


                echo "<p>" . htmlspecialchars("$a $b $c."). "</p>";
            } elseif ($primFra2 ==null && $secFra2 ==null && $terFra2 ==null) {
                echo "<p>" . htmlspecialchars("$primFra $secFra $terFra."). "</p>";
            }else{
                 echo "<p>" . htmlspecialchars("$primFra2 $secFra2 $terFra2."). "</p>";
            }
        ?>

    </body>
</html>