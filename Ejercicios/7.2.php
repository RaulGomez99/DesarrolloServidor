<html>
<head>
</head>
<body>
<?php
  $array = array('cero'=>'0','uno'=>'1','dos'=>'2','tres'=>'3','cuatro'=>'4','cinco'=>'5','seis'=>'6','siete'=>'7','ocho'=>'8','nueve'=>'9');
  end($array);
  for ($i=count($array)-1; $i >=0 ; $i--) { 
    echo current($array).'<br>';
    prev($array);
  }

            ?>
</body>
</html>