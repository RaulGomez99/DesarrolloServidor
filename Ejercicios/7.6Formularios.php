<html>

<head>
  <meta charset="utf-8">
</head>

<body>

<?php
  mkdir("".$_POST["nombre"],0777);
  move_uploaded_file ( $_FILES["archivo"]["tmp_name"], "./".$_POST["nombre"]."/".$_FILES["archivo"]["name"]);
  ?>
</body>

</html>