<html>
<head>
<style>
*{
  background: red;
}
</style>
</head>
<body>
<?php
  $cadena="Hola me llamo Raul";
  for ($i=0; $i < strlen($cadena); $i++) { 
    if(ctype_alpha($cadena[$i]))$letras[strtolower($cadena[$i])]++;
  }
  echo "<table border=1>";
  foreach ($letras as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
  }
  echo "</table>";

            ?>
</body>
</html>