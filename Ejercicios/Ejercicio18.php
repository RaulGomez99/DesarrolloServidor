<html>
<head>

</head>
<body>
<?php
$fibonachi[0]=1;
$fibonachi[1]=1;
   for($i=2; $i<10; $i++){
      $fibonachi[$i]=$fibonachi[$i-1]+$fibonachi[$i-2];
   }
   for($i=0; $i<10; $i++){
      echo $fibonachi[$i];
      if($i!=9) echo ", ";
   }

            ?>
</body>
</html>