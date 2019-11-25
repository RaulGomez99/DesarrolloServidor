<html>
<head>
</head>
<body>
<?php
   $anyo = 1000;
   echo(($anyo%4==0 && $anyo%100!=0) || $anyo%400==0) ? "Si es bisiesto" : "No es bisiesto";

            ?>
</body>
</html>