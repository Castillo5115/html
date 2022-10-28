<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_cuadrado_magico.css">
    <title>Practica U2 - Cuadrado Mágico</title>
</head>
<body>
    <div class="cabecera">
        <h1>.--Cuadrado Mágico--.</h1>
    </div>
    <div class="codigo">
        <?php
            class Tablero{

                //Constructor
                function __construct($array){
                    $this->array = $array;
                } 
                
                // Funciones
                function pintarCuadradoMagico(){
                    echo "<table class=","tablero",">";
                        for ($i=0; $i < count($this->array); $i++) { 
                            echo "<tr>";
                                for ($j=0; $j < count($this->array); $j++) { 
                                    echo "<td>", $this->array[$i][$j],"</td>";
                                }
                            echo "</tr>";
                        }
                    echo "</table><br>";
                }

                function sumaFilas(){
                    $filas = array();
                    for ($i=0; $i < count($this->array); $i++) { 
                        $filas[$i] = array_sum($this->array[$i]);
                        if (array_sum($this->array[$i]) != 15) {
                            return false;
                            echo "Filas ",$i ,"=", $filas[$i], "<br>";
                        }else{
                            return true;
                            echo "Filas ",$i ,"=", $filas[$i], "<br>";
                        }
                    }
                }
                function sumaColumnas(){
                    
                }


                // Tests
                function test_sumaFila_1(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[0][$i];
                    }
                    if($resultado == 15){
                       echo "test_sumaFila_1 = " , $resultado, " -> OK<br>";
                       return true;
                    }else{
                       echo "test_sumaFila_1 = " , $resultado, " -> KO<br>";
                       return false;
                    }
                              
                }
                function test_sumaFila_2(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[1][$i];
                    }
                    if($resultado == 15){
                        echo "test_sumaFila_2 = " , $resultado, " -> OK<br>";
                        return true;
                    }else{
                        echo "test_sumaFila_2 = " , $resultado, " -> KO<br>";
                        return false;
                    }
                              
                }
                function test_sumaFila_3(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[2][$i];
                    }
                    if($resultado == 15){
                        echo "test_sumaFila_3 = " , $resultado, " -> OK<br>";
                        return true;
                    }else{
                        echo "test_sumaFila_3 = " , $resultado, " -> KO<br>";
                        return false;
                    }
                              
                }
                function test_sumaColumna_1(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[$i][0];
                    }
                    if($resultado == 15){
                        echo "test_sumaColumna_1 = " , $resultado, " -> OK<br>";
                        return true;
                    }else{
                        echo "test_sumaColumna_1 = " , $resultado, " -> KO<br>";
                        return false;
                    }
                              
                }
                function test_sumaColumna_2(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[$i][1];
                    }
                    if($resultado == 15){
                        echo "test_sumaColumna_2 = " , $resultado, " -> OK<br>";
                        return true;
                    }else{
                        echo "test_sumaColumna_2 = " , $resultado, " -> KO<br>";
                        return false;
                    }
                              
                }
                function test_sumaColumna_3(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[$i][2];
                    }
                    if($resultado == 15){
                        echo "test_sumaColumna_3 = " , $resultado, " -> OK<br>";
                        return true;
                    }else{
                        echo "test_sumaColumna_3 = " , $resultado, " -> KO<br>";
                        return false;
                    }
                              
                }
                function test_sumaDiagonal_1(){
                    
                    $resultado = 0;
                    $i = 0;
                    $j = 2;
                    while($i < 3){
                        $resultado += $this->array[$i][$j];
                        $j--;
                        $i++;
                    }

                    if($resultado == 15){
                        echo "test_sumaDiagonal_1 = " , $resultado, " -> OK<br>";
                        return true;
                    }else{
                        echo "test_sumaDiagonal_1 = " , $resultado, " -> KO<br>";
                        return false;
                    }                         
                }
                function test_sumaDiagonal_2(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[$i][$i];
                    }
                    if($resultado == 15){
                        echo "test_sumaDiagonal_2 = " , $resultado, " -> OK<br>";
                        return false;
                    }else{
                        echo "test_sumaDiagonal_2 = " , $resultado, " -> KO<br>";
                        return false;
                    }
                              
                }
                
            }
            
            $tablero_1 = new Tablero(array(array(4,9,2),
                                            array(3,5,7),
                                            array(8,1,6),));
            $tablero_1 -> pintarCuadradoMagico();
            $tablero_1 -> sumaFilas();
            //Probar Tests
            $tablero_1 -> test_sumaFila_1();
            $tablero_1 -> test_sumaFila_2();
            $tablero_1 -> test_sumaFila_3();
            $tablero_1 -> test_sumaColumna_1();
            $tablero_1 -> test_sumaColumna_2();
            $tablero_1 -> test_sumaColumna_3();
            $tablero_1 -> test_sumaDiagonal_1();
            $tablero_1 -> test_sumaDiagonal_2();
        ?>
    </div>
</body>
</html>