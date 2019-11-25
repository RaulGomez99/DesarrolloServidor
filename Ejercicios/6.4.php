<html>
<head>
</head>
<body>
<?php
  $cadenaDeCaracteres = "Hola me llamo Raúl y tu eres un aeaeaeaaeae cara de red";
  $cadenaNueva="";
  for ($i=0; $i <strlen($cadenaDeCaracteres) ; $i++) { 
     $cadenaDeCaracteres[$i]=="a" ? $cadenaNueva.="e" : $cadenaNueva.=$cadenaDeCaracteres[$i];
  }
  echo($cadenaNueva);

            ?>
</body>
</html>