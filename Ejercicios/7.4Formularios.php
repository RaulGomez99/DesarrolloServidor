<html>

<head>
  <meta charset="utf-8">
</head>

<body>

  <form action="7.4Formularios.php" method="post">
    Numero 1:<input type="text" name="num1"><br>
    Numero 2:<input type="text" name="num2"><br>
    Elija:
    <select name="operacion">
      <option value="sum">Suma</option>
      <option value="rest">Resta</option>
      <option value="mult">Multiplicación</option>
      <option value="div">Division</option>
    </select><br>
    <input type="submit" value="Enviar" name="boton"><br>
  </form>
  <?php
  if (isset($_POST["operacion"])) {
    echo "Resultado:";
    switch ($_POST["operacion"]) {
      case 'sum':
        echo $_POST["num1"]+$_POST["num2"];
        break;
      case 'rest':
        echo $_POST["num1"]-$_POST["num2"];
        break;
      case 'mult':
        echo $_POST["num1"]*$_POST["num2"];
        break;
      case 'div':
        echo $_POST["num1"]/$_POST["num2"];
        break;
    }
  }


  ?>
</body>

</html>