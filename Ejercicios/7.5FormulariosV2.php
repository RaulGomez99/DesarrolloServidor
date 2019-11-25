<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <?php
  if(!isset($_POST["vehiculo"]))
  {
  ?>
  <form action="7.5FormulariosV2.php" method="post">
    Vehiculo:<input type="text" name="vehiculo"><br><input type="hidden" name="nombre" value=<?php echo $_POST["nombre"] ?>>
    <input type="submit" value="Enviar" name="boton"><br>
  </form>
  <?php
  }else{
    echo "Hola ".$_POST['nombre']." con vehiculo ".$_POST["vehiculo"];
  }
  ?>
</body>

</html>