<html>
<head>
</head>
<body>
<?php
  $correo = "gomezlopezraul1999xd@gmail.com";

  echo $correo."<br>";
  $respuesta = strpos($correo,"@");
  if($respuesta){
      $despues = substr($correo,$respuesta+1);
      echo "Despues $despues<br>";
      $antes = substr($correo,0,$respuesta);
      echo "Antes $antes<br>";
  }else{
    echo "No encontrada";
  }
  


            ?>
</body>
</html>