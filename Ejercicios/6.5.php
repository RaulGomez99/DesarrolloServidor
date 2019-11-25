<html>
<head>
</head>
<body>
<?php
  $cadenaDeCaracteres = "Hola me llamo Raul y tu eres un aeaeaeaaeae cara de red";
  $cadenaNueva="";
  $traductor["a"]="e";
  $traductor["e"]="i";
  $traductor["i"]="o";
  $traductor["o"]="u";
  $traductor["u"]="a";
  for ($i=0; $i <strlen($cadenaDeCaracteres) ; $i++) { 
     $cadenaDeCaracteres[$i]=="a" || $cadenaDeCaracteres[$i]=="e" || $cadenaDeCaracteres[$i]=="i" || $cadenaDeCaracteres[$i]=="o" || $cadenaDeCaracteres[$i]=="u" ? $cadenaNueva.=$traductor[$cadenaDeCaracteres[$i]] : $cadenaNueva.=$cadenaDeCaracteres[$i];
  }
  echo($cadenaNueva."<br>");
  $traductor["e"]="a";
  $traductor["i"]="e";
  $traductor["o"]="i";
  $traductor["u"]="o";
  $traductor["a"]="u";
  $cadenaDeCaracteres=$cadenaNueva;
  $cadenaNueva="";
  for ($i=0; $i <strlen($cadenaDeCaracteres) ; $i++) { 
   $cadenaDeCaracteres[$i]=="a" || $cadenaDeCaracteres[$i]=="e" || $cadenaDeCaracteres[$i]=="i" || $cadenaDeCaracteres[$i]=="o" || $cadenaDeCaracteres[$i]=="u" ? $cadenaNueva.=$traductor[$cadenaDeCaracteres[$i]] : $cadenaNueva.=$cadenaDeCaracteres[$i];
}
  echo($cadenaNueva);

            ?>
</body>
</html>