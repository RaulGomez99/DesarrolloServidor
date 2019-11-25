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
   $booleana = false;
   for($i=1; $i<=10; $i++){
      echo "<th>$i</th>";
      $booleana = !$booleana;
      
   }
   echo "</thead></tr><tbody>";
   $i=1;
   $booleana = false;
   $palabra = "asd";
   for($i=1;$i<=10;$i++){
      
      echo "<tr><th class=$palabra>$i</th>";
      $j=1;
      for($j=1;$j<=10;$j++){
         $palabra = $booleana ? "asd" : "ads";
         echo "<td class=$palabra>".$i*$j."</td>";
         $booleana = !$booleana;
      }
      
      echo "</tr>";
   }
   echo "</tbody>"

            ?>
            </table>
</body>
</html>