<html>
<head>
<style>
.asd{
   background-color: red;
   color:yellow;
}
.ads{
   background-color: yellow;
   color:red;
}
thead {
   color: white !important;
   background-color: blue !important;
}
 /*  td, th{
      border: solid 1px black;
   }*/
</style>
</head>
<body>
<table border="1"><thead><tr><td></td>
<?php
   $i=1;
   $booleana = false;
   while($i<=10){
      echo "<th>$i</th>";
      $booleana = !$booleana;
      $i++;
      
   }
   echo "</thead></tr><tbody>";
   $i=1;
   $booleana = false;
   $palabra = "asd";
   while($i<=10){
      
      echo "<tr><th class=$palabra>$i</th>";
      $j=1;
      while($j<=10){
         $palabra = $booleana ? "asd" : "ads";
         echo "<td class=$palabra>".$i*$j."</td>";
         $j++;
         $booleana = !$booleana;
      }
      
      $i++;
      echo "</tr>";
   }
   echo "</tbody>"

            ?>
            </table>
</body>
</html>