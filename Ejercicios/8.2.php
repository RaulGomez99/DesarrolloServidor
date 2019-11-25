<html>
    <head>
        <meta charset="utf-8">
        <style>
            tr:nth-child(odd){
                background-color: red;
            }
            tr:nth-child(even){
                background-color: yellow;
            }
        </style>
    </head>
    <body>
        <?php
            $servidor = "localhost"; 
            $username = "admin";
            $password = "admin";
            $basedatos = "bdprueba";
            $basedatos2 = "bdprueba2";

            $conn = mysqli_connect($servidor, $username, $password, $basedatos);
            $conn2 = mysqli_connect($servidor, $username, $password, $basedatos2);

            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito <br><br>";

            $consulta = "SELECT * FROM empleados";

            $result = mysqli_query($conn, $consulta);
            while ($fila = mysqli_fetch_array($result)) {
                $consulta2 = "INSERT INTO empleados VALUES(".$fila[0].",'".$fila[1]."',".$fila[2].")";
                echo $consulta2;
                mysqli_query($conn2,$consulta2);
            }
            echo "Hecho";
           

           
            mysqli_free_result($result);
           
           
            mysqli_close($conn);
                                    
        ?>
       
    </body>
   
</html>