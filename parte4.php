<?php 
    $primFra = $_GET["primFra"] ?? "";
    $secFra  = $_GET["secFra"] ?? "";
    $terFra  = $_GET["terFra"] ?? "";
    $primFra1 = $_GET["primFra1"] ?? "";
    $secFra2  = $_GET["secFra2"] ?? "";
    $terFra3  = $_GET["terFra3"] ?? "";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Frases</title>
    </head>
    <body>

        <form id="miForm" >
            <select name="primFra">
                <option>Yo en tu lugar</option>
                <option>La verdad es que</option>
                <option>Tú sabes que</option>
                <option>No hay duda de que</option>
                <option>Al final</option>
            </select>
            <br>
            <input></input>
            <br>
            <h3></h3>
            <select name="secFra">
                <option>siempre hay que invertir en</option>
                <option>lo importante es</option>
                <option>nunca subestimes</option>
                <option>yo siempre digo que</option>
                <option>el secreto está en</option>
            </select>
            <br>
            <input></input>
            <br>
            <h3>desenlace</h3>
            <select name="terFra">
                <option>la bolsa de valores</option>
                <option>el no tener dinero congelado en el banco</option>
                <option>los chemtrails</option>
                <option>la nube</option>
                <option>las crypto</option>
            </select>
        </form>
        <br>
        <input></input>
        <br>
        <button type="submit" form="miForm">Crear</button>

        <?php 
            if ($primFra && $secFra && $terFra) {
                echo "<p>" . htmlspecialchars("$primFra $secFra $terFra.") . "</p>";
            }
        ?>

    </body>
</html>