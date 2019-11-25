<html>
<head>
</head>
<body>
<?php
  $correo = "gomezlopezraul1999xd@gmail.com";

  echo $correo."<br>";
  echo (preg_match("/.com$/",$correo) ? "Encontrado" : "No encontrado");



            ?>
</body>
</html>