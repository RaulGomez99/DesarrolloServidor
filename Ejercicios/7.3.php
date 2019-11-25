<html>
<head>
</head>
<body>
<?php
  $array = array('cero'=>'cero','uno'=>'uno','dos'=>'dos','tres'=>'tres','cuatro'=>'cuatro','cinco'=>'cinco','seis'=>'seis','siete'=>'siete','ocho'=>'ocho','nueve'=>'nueve');
  for ($i=0; $i < count($array) ; $i++) { 
    $elemento = each($array);
    echo ucfirst($elemento["value"]).'<br>';
  }

            ?>
</body>
</html>