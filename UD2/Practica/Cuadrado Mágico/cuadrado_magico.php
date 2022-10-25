<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_cuadrado_magico.css">
    <title>Practica U2 - Cuadrado Mágico</title>
</head>
<body>
    <div class="cabecera">
        <h1>.--Cuadrado Mágico--.</h1>
    </div>
    <div class="codigo">
        <?php
            $array = array(
                array(4,9,2),
                    array(3,5,7),
                    array(8,1,6));
            function crearTablero($array){
                echo "<table class=","tablero",">";
                    for ($i=0; $i < count($array); $i++) { 
                        echo "<tr>";
                            for ($j=0; $j < count($array); $j++) { 
                                echo "<td>", $array[$i][$j],"</td>";
                            }
                        echo "</tr>";
                    }
                echo "</table>";
            }
            function sumaFila_1($array){
                $resultado_1 = 0;
                for ($i=0; $i < count($array); $i++) { 
                    $resultado_1 = $resultado_1 + $array[$i][0];
                }
                
            }
        
        
        crearTablero($array);
        ?>
    </div>
    <div>
        <?php
            sumaFilas($array);
        ?>
    </div>
</body>
</html>