<html>
<head>

</head>
<body>
<?php
$anterior=1;
$anteriorDelAnterior=0;
   echo "<table border='1'><tr>";
   for($i=0; $i<10; $i++){
      echo "<td>$anteriorDelAnterior</td>";
      if($i==9) echo "</tr> ";
      $sig=$anteriorDelAnterior+$anterior;
      $anteriorDelAnterior=$anterior;
      $anterior=$sig;
   }
   echo "</table>";

            ?>
</body>
</html>