<?php
    function crearConexion(){
        $servidor = "localhost"; 
        $username = "admin";
        $password = "admin";
        $basedatos = "tienda";

        return mysqli_connect($servidor, $username, $password, $basedatos);
    } 

    function cerrarConexion($link){
        mysqli_close($link);
    }

    function consultaDataBase($conn, $consulta){
        $resultado = mysqli_query($conn, $consulta);
        return $resultado;

    }

    function devolverProductosBaseDeDatos(){
        $conn = crearConexion();
        $resultado = consultaDataBase($conn,'SELECT * FROM productos');
        $devolver = array();
        while($fila = mysqli_fetch_array($resultado)){
            $devolver[] = $fila;
        }
        cerrarConexion($conn);
        return $devolver;
    }

    function devolverProductosSesion(){
        $conn = crearConexion();
        session_start();
        $devolver = array();
        foreach($_SESSION["productos"] as $idProducto){
            $resp = consultaDataBase($conn,"SELECT * FROM productos WHERE id=".$idProducto);
            $resp = mysqli_fetch_array($resp);
            $devolver[]=$resp;
        }
        
        return $devolver;
    }

    function addProductoSesion($idProducto){
        session_start();
        if (!isset($_SESSION["productos"])){
            $_SESSION["productos"] = array();
        } 
        $_SESSION["productos"][] = $idProducto;
        die(var_dump($_SESSION));
    }

    function addToBaseDeDatos($nombre, $precio){
        
    }




?>