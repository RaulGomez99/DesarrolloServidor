<html>
    <body>
        <?php
           
            if ( $_GET["nombre"]!="")
            {
                # Esta instrucción debe contener lo primero que se envíe al
                # navegador, y además se termina con exit, para que no se
                # envíe nada más.
                header ( "Location: 7.7FormulariosV2.html");
                exit;
            }
           
            else
            {
              header ( "Location: 7.7Formularios.html");
              exit; 
            }   
           
           
        ?>
    </body>
</html>