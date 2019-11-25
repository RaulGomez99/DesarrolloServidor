<html>
<head>
</head>
<body>
<?php
$hora = getDate()["hours"];
     if($hora<12 && $hora>=8){
        echo "Buenos días";
     }elseif($hora<20 && $hora>=12){
        echo "Buenas tardes";
     }else{
        echo "Buenas noches";
     }

            ?>
</body>
</html>