<?php

        
        /*Historial de tiradas que llega por URL"
        $resultado = $_GET["resultado"] ?? "";
        
        /*Todo los resultados estan separados y los añade a un array*/
        $historico=str_split($resultado);        
       
        $dado =rand(1,6);
        /*añade cada resultado al array*/
        $historico[]=$dado;
        /*Elementos de un array en una sola cadena texto*/ 
        $resultado = implode("",$historico);
?>

<!DOCTYPE html>
<html>
    <head>
    <head>
    <body>
        <h1>Dado</h1>

    
        <a href="parte2.php?resultado=<?php echo $resultado; ?>">Lanzar dado</a>

        <?php 
            
                echo "<p>Resultado: <strong>$dado</strong></p>";
                
        ?>

        <table border="1">
            <tr>
                <th>Tirada</th>
                <th>Resultado</th>
            </tr>
            <?php 
            
            foreach ($historico as $indice=> $resultado){
                echo "<tr>";
                echo "<td>".($indice+1)."</td>";
                echo "<td>".$resultado."</td>";
                echo "</tr>";
            }
            
            ?>

        </table>
    <body>
<html>