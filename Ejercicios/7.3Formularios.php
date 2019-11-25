<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <?php

  if (!isset($_POST["boton"])) {

    ?>
    <form action="7.3Formularios.php" method="post">
      Usuario:<input type="text" name="username"><br>
      Password:<input type="password" name="password"><br>
      Elige: Hombre:<input type="radio" name="genero" value="hombre"> Mujer:<input type="radio" name="genero" value="mujer"><br>
      Elija:
      <select name="jojo">
        <option value="Jonathan">Jonathan</option>
        <option value="Joseph">Joseph</option>
        <option value="Jotaro">Jotaro</option>
        <option value="Josuke">Josuke</option>
        <option value="Giorno">Giorno</option>
      </select>
      Pizza con piña:<input type="checkbox" name="pizza"><br>

      Escriba algo:<textarea name="textillo"></textarea><br>
      <input type="submit" value="Enviar" name="boton">
    </form>
  <?php
  } else {
    if (isset($_POST["pizza"])) {

      $_POST["pizza"] = "Es subnormal la quiere con piña";
    } else {
      $_POST["pizza"] = "Es superior la quiere sin piña";
    }
    echo "<table>";
    foreach ($_POST as $key => $value) {
      echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
  }
  ?>
</body>

</html>