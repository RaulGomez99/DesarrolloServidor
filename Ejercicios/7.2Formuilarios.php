<html>
<head>
</head>
<body>
  <table>
<?php
if(isset($_POST["pizza"])){
  
  $_POST["pizza"]= "Es subnormal la quiere con piña";

}else{
  $_POST["pizza"]= "Es superior la quiere sin piña";
}
foreach ($_POST as $key => $value) {
  echo "<tr><td>$key</td><td>$value</td></tr>";
}
  
?>
</table>
</body>
</html>