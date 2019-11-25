<html>
    <head>
        <title>
            Simulador de pelota rebotadora
        </title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style type="text/css">
            div.map {
                float:left;
                text-align: center;
                border: 1px solid #666;
                background-color: #fcfcfc;
                margin: 5px;
                padding: 1em;
            }
            span.casa, span.paloma {
                font-weight: bold;
                color: red;
            }
            span.aire {
                color: blue;
            }

            span{
                font-size: 80%;
            }
               
        </style>
    </head>
    <body>
       
        <h1>
            <?php

            $tamañoMapa=10;
           
            # Posicionar la pelota
           
         //   do{

                $pelotaX = rand (1,$tamañoMapa-2);
                $pelotaY = rand (1,$tamañoMapa-2);
                $pelota2X = rand (1,$tamañoMapa-2);
                $pelota2Y = rand (1,$tamañoMapa-2);
                $pelota3X = rand (1,$tamañoMapa-2);
                $pelota3Y = rand (1,$tamañoMapa-2);
        //    }while($pelotaY>=$tamañoMapa-1 || $pelota2Y >= $tamañoMapa-1 || $pelota3Y>=$tamañoMapa-1 || $pelotaX>=$tamañoMapa-1 || $pelota2X >= $tamañoMapa-1 || $pelota3X>=$tamañoMapa-1);

            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.
            $direccionX = 1;
            $direccionY = 1;
           
           
           
           
            $direccion2X = 1;
            $direccion2Y = 1;
            $direccion3X = 1;
            $direccion3Y = 1;
            $contador = 0;
            do
            {
                
                $pelotaX+=$direccionX;
                $pelotaY+=$direccionY;

                if($pelotaX+$direccionX==$tamañoMapa || $pelotaX+$direccionX==-1){
                    $contador++;
                    $direccionX*=-1;
                }
                if($pelotaY+$direccionY==$tamañoMapa || $pelotaY+$direccionY==-1){
                    $contador++;
                    $direccionY*=-1;
                }

                //Pelota 2
                
                $pelota2X+=$direccion2X;
                $pelota2Y+=$direccion2Y;

                if($pelota2X+$direccion2X==$tamañoMapa || $pelota2X+$direccion2X==-1){
                    $contador++;
                    $direccion2X*=-1;
                }
                if($pelota2Y+$direccion2Y==$tamañoMapa || $pelota2Y+$direccion2Y==-1){
                    $contador++;
                    $direccion2Y*=-1;
                }

                //Pelota 3
                
                $pelota3X+=$direccion3X;
                $pelota3Y+=$direccion3Y;

                if($pelota3X+$direccion3X==$tamañoMapa || $pelota3X+$direccion3X==-1){
                    $contador++;
                    $direccion3X*=-1;
                }
                if($pelota3Y+$direccion3Y==$tamañoMapa || $pelota3Y+$direccion3Y==-1){
                    $contador++;
                    $direccion3Y*=-1;
                }
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                        if ($x == $pelotaX && $y == $pelotaY)
                        {
                            echo '<span class="paloma">0</span>'; 
                        }
                        elseif ($x == $pelota2X && $y == $pelota2Y)
                        {
                            echo '<span class="paloma">*</span>'; 
                        }
                        elseif ($x == $pelota3X && $y == $pelota3Y)
                        {
                            echo '<span class="paloma">P</span>'; 
                        }
                        else
                        {
                            echo '<span class="aire">.</span>'; #Aire
                        }
                    
                       
                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
            
                echo "</pre><span>pelotaX=$pelotaX pelotaY=$pelotaY <br>pelota2X=$pelota2X pelota2Y=$pelota2Y <br>rpelota3X=$pelota3X pelota3Y=$pelota3Y</span> <br>rebotes=$contador</div>\n";
            } while ($contador<18 );
            ?>   
           
        </h1>
       
    </body>

</html>