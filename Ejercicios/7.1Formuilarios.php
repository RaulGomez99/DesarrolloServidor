<html>
<head>
</head>
<body>
  <table>
<?php
  foreach ($_POST as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
  }

?>
</table>
</body>
</html>