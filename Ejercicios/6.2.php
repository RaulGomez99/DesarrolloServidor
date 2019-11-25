<html>
<head>
</head>
<body>
<?php
  $cadenaDeCaracteres = "abcdefghij";
  $cadenaAlreves="";
  for ($i=9; $i >=0 ; $i--) { 
     $cadenaAlreves.=$cadenaDeCaracteres[$i];
  }
  echo($cadenaAlreves);

            ?>
</body>
</html>