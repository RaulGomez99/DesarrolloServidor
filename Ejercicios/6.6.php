<html>
<head>
</head>
<body>
<?php
  $cadenaDeCaracteres = "jonat";
  $cadenaNueva="";
  $cadenaNueva2="";
  $traductor["a"]="e";
  $traductor["e"]="i";
  $traductor["i"]="o";
  $traductor["o"]="u";
  $traductor["u"]="a";
  for ($i=0; $i <strlen($cadenaDeCaracteres) ; $i++) { 
     $cadenaDeCaracteres[$i]=="a" || $cadenaDeCaracteres[$i]=="e" || $cadenaDeCaracteres[$i]=="i" || $cadenaDeCaracteres[$i]=="o" || $cadenaDeCaracteres[$i]=="u" ? $cadenaNueva.=$traductor[$cadenaDeCaracteres[$i]] : $cadenaNueva.=$cadenaDeCaracteres[$i];
  }
  for ($i=0; $i <strlen($cadenaDeCaracteres) ; $i+=2) { 
      $cadenaNueva2.=$cadenaNueva[$i+1].$cadenaNueva[$i];
  }
  echo($cadenaNueva2."<br>");
  $traductor["e"]="a";
  $traductor["i"]="e";
  $traductor["o"]="i";
  $traductor["u"]="o";
  $traductor["a"]="u";
  $cadenaDeCaracteres=$cadenaNueva2;
  $cadenaNueva="";
  $cadenaNueva2="";
  for ($i=0; $i <strlen($cadenaDeCaracteres) ; $i++) { 
   $cadenaDeCaracteres[$i]=="a" || $cadenaDeCaracteres[$i]=="e" || $cadenaDeCaracteres[$i]=="i" || $cadenaDeCaracteres[$i]=="o" || $cadenaDeCaracteres[$i]=="u" ? $cadenaNueva.=$traductor[$cadenaDeCaracteres[$i]] : $cadenaNueva.=$cadenaDeCaracteres[$i];
  }
  //echo($cadenaNueva);
  for ($i=0; $i <strlen($cadenaDeCaracteres) ; $i+=2) { 
    $cadenaNueva2.=$cadenaNueva[$i+1].$cadenaNueva[$i];
  }
  echo($cadenaNueva2);

            ?>
</body>
</html>