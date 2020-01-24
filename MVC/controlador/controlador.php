<?php
    require_once("../modelo/modelo.php");
    $data = json_decode(file_get_contents('php://input'), true);
   // print_r($data);
    $metodo = $data["metodo"];
   // print_r($metodo);
    if($metodo=="addProductoSesion"){
        addProductoSesion($data["id"]);

    }

?>