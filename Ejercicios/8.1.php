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

            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito <br><br>";

            $consulta = "SELECT * FROM empleados";

            $result = mysqli_query($conn, $consulta);
            echo "<table border = '1'>";
            while ($fila = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$fila[0] . '</td><td>' . $fila[1]."</td>";
                echo '</tr>';
            }
            echo "</table>";
           

           
            mysqli_free_result($result);
           
           
            mysqli_close($conn);
                                    
        ?>
       
    </body>
   
</html>