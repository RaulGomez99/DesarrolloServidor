<html>
<head>
</head>
<body>
<?php
  $palabra = "Empresa e Iniciativa Emprendedora";
  $cadenaNueva="";
  for ($i=0; $i < strlen($palabra); $i+=2) { 
    $cadenaNueva=substr($palabra,$i,2).$cadenaNueva;
  }
  echo $cadenaNueva."<br>";
  $palabra = $cadenaNueva;
  $cadenaNueva="";
  for ($i=1; $i < strlen($palabra); $i+=2) { 
    $cadenaNueva=substr($palabra,$i,2).$cadenaNueva;
  }
  if(strlen($palabra)%2!=0) $cadenaNueva.=substr($palabra, 0,1);
  echo $cadenaNueva;

            ?>
</body>
</html>