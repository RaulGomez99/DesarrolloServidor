<html>
    <body>
        <?php
  
           //var_dump($_FILES);
            /*echo "El nombre del fichero es: ".$_FILES["archivo1"]["name"]."<br>";
            echo "El tamaño en bytes es: ".$_FILES["archivo1"]["size"]."<br>";
            echo "El tipo de archivo es: ".$_FILES["archivo1"]["type"]."<br>";
            echo "Se ha guardado en: ".$_FILES["archivo1"]["tmp_name"];*/
            echo "Se ha guardado en: ".$_FILES["archivo"]["tmp_name"];
            # Con la siguiente instrucción movemos el archivo desde su ubicación
            # temporal a la que se requiera. Si el archivo ya existe, se
            # sorbreescribe
            move_uploaded_file ( $_FILES["archivo"]["tmp_name"], "./prueba2.txt");
          // echo (move_uploaded_file("/var/www/html/Ejercicios/hola.txt" ,"/var/www/html/holo.txt")) ? "Si" : "No";
           
               
        ?>
    </body>
</html>