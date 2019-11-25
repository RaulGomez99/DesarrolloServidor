<html>
<head>
<style>
   td{
      border: solid 1px black;
   }
</style>
</head>
<body>
<table>
<?php
   $i=1;
   do{
      echo "<tr><td>$i</td><td>";
      echo($i%2==0) ? "par</td><td>":"impar</td><td>";
      echo($i==1 || $i==2 || $i==3 || $i==5 || $i==7) ? "primo</td>":"no primo</td>";

      $i++;
      echo "</tr>";
   }while($i<=10);

            ?>
            </table>
</body>
</html>