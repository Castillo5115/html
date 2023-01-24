<?php
// function contarLetras($frase){
//     $convertirFrase = strtolower($frase);
//     $array = array("a","b","c","d",
//                               "e","f","g","h",
//                               "j","k","l","m",
//                               "n","ñ","o","p",
//                               "q","r","s","t",
//                               "u","v","w","x",
//                               "y","z");
//     for ($i=0; $i < count($array); $i++) {
//         $contador = 0;
//         for ($j=0; $j < strlen($convertirFrase); $j++) { 
//             if($array[$i] == $convertirFrase[$j]){
//                 $contador++;
//             }
//         }
//         echo $array[$i], " = ", $contador;
//     }
//    }

//    contarLetras("La casa es blanca y la nube es gris");

   function pintarMatriz($matriz)
{
    for ($i = 0; $i <count($matriz); $i++) 
    {
        for ($j = 0; $j <count($matriz); $j++)
        {
            print $matriz[$i][$j];    
        }
        print "<br>";
    }
}
// Ejer.04
function obtenerIndiceFilaMejorPromedio($matriz)
{
    $filas = count($matriz);
    $promedio_max = PHP_INT_MIN;

    

    $fila_promedio_max = -1;

    for ($i = 0; $i < $filas; $i++)
    {
        $columnas = count($matriz[$i]);
        $suma_fila = 0;
        for ($j = 0; $j < $columnas; $j++)
        {
            $suma_fila+=$matriz[$i][$j];
        }
        $promedio = $suma_fila / $columnas;
        if ($promedio>$promedio_max)
        {
            $promedio_max = $promedio;
            $fila_promedio_max = $i;
        }
    }
    if ($fila_promedio_max < 0 || $fila_promedio_max = -1) {
        return new Exception("La matriz está vacia");
    }else{
        return $fila_promedio_max;
    }
}


$matriz = array();

pintarMatriz($matriz);

$fila_promedio_maximo = obtenerIndiceFilaMejorPromedio($matriz);

echo "la fila con el promedio maximo es ".$fila_promedio_maximo;


//Apartado 5a
define("MAX_VALUE",10);
define("MIN_VALUE",3);

function numerosAltos($v,$n)
{
    $numero_elementos = count($v);
    if (($numero_elementos<=MAX_VALUE) && ($numero_elementos>=MIN_VALUE))
    {
        rsort($v); //ordenación descendente
        $vector_resultado = array();

        for ($i=0;$i<$n;$i++)
        {
            $vector_resultado[$i] = $v[$i];
        }

        return $vector_resultado;
    }else{
        throw new Exception("El número de elementos del array ha de ser ");
    }

    
}

//Apartado 5b

function test()
{
    $vector = array(5,0,8,9);
    $resultado_esperado = array(9,8,5);

    $vector_resultado = numerosAltos($vector,3);

    return ($vector_resultado==$resultado_esperado);
}


var_dump(test());


