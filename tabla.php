<DOCTYPE html>
<html>
  <head>
    <title>Tabla de Multiplicar - Versión 1</title>
  </head>
    <body>
    
<?php
     // Recuperamos el numero escrito en el formulario 
     $n= $_REQUEST["numero"];
     // Mostramos la tabla de multipliar en una tabla HTML
     echo "<table border='1'>";
     echo "<tr><td colspan='5'>Tabla de multiplicar del número
$n</td></tr>";
     echo "<tr>";
     for ($i = 1; $i <= 25; $i++) {
         if (($i-1) % 5 == 0) echo "</tr><tr>";
         echo "<td>$n x $i = " . $n * $i . "</td>";

     }
     echo "</tr>"; 
     echo "</table>";
?>

    </body>
</html>