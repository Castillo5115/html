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
        <h1>===Cuadrado Mágico===</h1>
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

                function analizarCuadradoMagico(){
                    $comprobador = true;
                    $arrayFilas = array();
                    $arrayColumnas = array();
                    $arrayDiagonales = array();

                    //Analizar Filas
                    for ($i=0; $i < count($this->array); $i++) { 
                        if (array_sum($this->array[$i]) != 15) {
                            $arrayFilas[$i] = "false";
                            $comprobador = false;
                        }else{
                            $arrayFilas[$i] = "true";
                        }
                    }

                    // Analizar Columnas
                   
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = 0;
                        for ($j=0; $j < count($this->array); $j++) { 
                            $resultado = $resultado + $this->array[$j][$i];
                        }
                        
                        if($resultado != 15){
                            $arrayColumnas[$i] = "false";
                            $comprobador = false;
                        }else{
                            $arrayColumnas[$i] = "true";
                        }
                    }
                    // Analizar diagonal 1

                    $resultadoDiagonal_1 = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultadoDiagonal_1 = $resultadoDiagonal_1 + $this->array[$i][$i];
                    }
                    if ($resultadoDiagonal_1 != 15) {
                        $arrayDiagonales[0] = "false";
                    }else {
                        $arrayDiagonales[0] = "true";
                    }

                    // Analizar diagonal 2

                    $resultadoDiagonal_2 = 0;
                    $i = 0;
                    $j = 2;
                    while($i < count($this->array)){
                        $resultadoDiagonal_2 += $this->array[$i][$j];
                        $j--;
                        $i++;
                    }

                    if($resultadoDiagonal_2 != 15){
                        $arrayDiagonales[1] = "false";
                        $comprobador = false;
                    }else{
                        $arrayDiagonales[1] = "true";
                    }      

                    // MENSAJES DESPUES DE ANALIZAR
                    if($comprobador != true){
                        echo "<h2 class=\"rojo\">NO ES UN CUADRADO MÁGICO</h2>";
                        echo "Las filas diferentes a 15 son<br><br>";
                        for ($i=0; $i < count($arrayFilas); $i++) { 
                            if ($arrayFilas[$i] != "true") {
                                echo "Fila ", $i, "<br>";
                                
                            }
                        }
                        echo "<br>Las columnas diferentes a 15 son<br><br>";
                        for ($i=0; $i < count($arrayColumnas); $i++) { 
                            if ($arrayColumnas[$i] != "true") {
                                echo "Columna ", $i, "<br>";
                                
                            }
                        }
                        echo "<br>Las diagonales diferentes a 15 son<br><br>";
                        for ($i=0; $i < count($arrayDiagonales); $i++) { 
                            if ($arrayDiagonales[$i] != "true") {
                                echo "Diagonal ", $i, "<br>";
                                
                            }
                        }
                    }else {
                        echo "<h2>ES UN CUADRADO MÁGICO</h2>";
                    }
                }


                // Tests
                function test_sumaFila_1(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[0][$i];
                    }
                    if($resultado == 15){
                       echo "test_sumaFila_1 = " , $resultado, " -> OK<br>";
                       
                    }else{
                       echo "test_sumaFila_1 = " , $resultado, " -> KO<br>";
                       
                    }
                              
                }
                function test_sumaFila_2(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[1][$i];
                    }
                    if($resultado == 15){
                        echo "test_sumaFila_2 = " , $resultado, " -> OK<br>";
                        
                    }else{
                        echo "test_sumaFila_2 = " , $resultado, " -> KO<br>";
                        
                    }
                              
                }
                function test_sumaFila_3(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[2][$i];
                    }
                    if($resultado == 15){
                        echo "test_sumaFila_3 = " , $resultado, " -> OK<br>";
                        
                    }else{
                        echo "test_sumaFila_3 = " , $resultado, " -> KO<br>";
                        
                    }
                              
                }
                function test_sumaColumna_1(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[$i][0];
                    }
                    if($resultado == 15){
                        echo "<br>test_sumaColumna_1 = " , $resultado, " -> OK<br>";
                        
                    }else{
                        echo "test_sumaColumna_1 = " , $resultado, " -> KO<br>";
                        
                    }
                              
                }
                function test_sumaColumna_2(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[$i][1];
                    }
                    if($resultado == 15){
                        echo "test_sumaColumna_2 = " , $resultado, " -> OK<br>";
                        
                    }else{
                        echo "test_sumaColumna_2 = " , $resultado, " -> KO<br>";
                        
                    }
                              
                }
                function test_sumaColumna_3(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[$i][2];
                    }
                    if($resultado == 15){
                        echo "test_sumaColumna_3 = " , $resultado, " -> OK<br>";
                        
                    }else{
                        echo "test_sumaColumna_3 = " , $resultado, " -> KO<br>";
                        
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
                        
                    }else{
                        echo "test_sumaDiagonal_1 = " , $resultado, " -> KO<br>";
                        
                    }                         
                }
                function test_sumaDiagonal_2(){
                    $resultado = 0;
                    for ($i=0; $i < count($this->array); $i++) { 
                        $resultado = $resultado + $this->array[$i][$i];
                    }
                    if($resultado == 15){
                        echo "test_sumaDiagonal_2 = " , $resultado, " -> OK<br>";
                        
                    }else{
                        echo "test_sumaDiagonal_2 = " , $resultado, " -> KO<br>";
                        
                    }
                              
                }
                
            }
            
            $tablero_1 = new Tablero(array(array(4,9,2),
                                            array(3,5,7),
                                            array(8,1,6)));
            $tablero_1 -> pintarCuadradoMagico();
            $tablero_1 -> analizarCuadradoMagico();
        ?>
    </div>
</body>
</html>