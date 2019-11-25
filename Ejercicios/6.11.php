<html>
<head>
</head>
<body>
<?php
  $frase = "el coche es azul el tiene mi coche y pelea por el";
  do{
    $frase=substr($frase,0,strpos($frase,"el"))."the".substr($frase,strpos($frase,"el")+2);
  }while(strpos($frase,"el"));
  
  echo $frase;

  


            ?>
</body>
</html>