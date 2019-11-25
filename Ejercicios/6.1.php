<html>
<head>
</head>
<body>
<?php
   $anyo =1004;
   echo (strlen($anyo)==4)?(($anyo%4==0 && $anyo%100!=0) || $anyo%400==0) ? "Si es bisiesto" : "No es bisiesto":"Error no tiene 4 cifras";

            ?>
</body>
</html>