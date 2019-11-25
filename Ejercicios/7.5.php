<html>
<head>
</head>
<body>
<?php
  $libro1=array(
    "titulo"=>"Don Quijote",
    "autor"=>"Cervantes",
    "fecha"=>1615);
$libro2=array(
    "titulo"=>"El hobbit",
    "autor"=>"Tolkien",
    "fecha"=>1937);

$biblioteca=array("lib1"=>$libro1,"lib2"=>$libro2);
foreach ($biblioteca as $value) {
  echo "Libro<br>";
    foreach ($value as $key => $valor) {
        echo "\t".$key." -> ".$valor."<br>";
    }
}


            ?>
</body>
</html>