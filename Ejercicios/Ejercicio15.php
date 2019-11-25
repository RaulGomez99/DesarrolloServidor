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
   do{
      echo "<th>$i</th>";
      $booleana = !$booleana;
      $i++;
      
   }while($i<=10);
   echo "</thead></tr><tbody>";
   $i=1;
   $booleana = false;
   $palabra = "asd";
   do{
      
      echo "<tr><th class=$palabra>$i</th>";
      $j=1;
      do{
         $palabra = $booleana ? "asd" : "ads";
         echo "<td class=$palabra>".$i*$j."</td>";
         $j++;
         $booleana = !$booleana;
      }while($j<=10);
      
      $i++;
      echo "</tr>";
   }while($i<=10);
   echo "</tbody>"

            ?>
            </table>
</body>
</html>