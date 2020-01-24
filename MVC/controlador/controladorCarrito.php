<?php
    require_once("../modelo/modelo.php");
    $productos = devolverProductosSesion();
    require_once("../controlador/controlador.php");
    require("../vista/vistaCarrito.php")



?>