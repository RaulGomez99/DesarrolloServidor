<html>
<head>
</head>
<body>
<?php
  $cadenaDeCaracteres = "abcdefghijklmnopqrstuvwxyz";
  $cadenaAlreves="";
  for ($i=strlen($cadenaDeCaracteres); $i >=0 ; $i--) { 
     $cadenaAlreves.=$cadenaDeCaracteres[$i];
  }
  echo($cadenaAlreves);

            ?>
</body>
</html>