<?php
function abcdario($frase){
    $convertirFrase = strtolower($frase);
    $array = array("a","b","c","d",
                              "e","f","g","h",
                              "j","k","l","m",
                              "n","ñ","o","p",
                              "q","r","s","t",
                              "u","v","w","x",
                              "y","z");
    for ($i=0; $i < count($array); $i++) {
        $contador = 0;
        for ($j=0; $j < strlen($convertirFrase); $j++) { 
            if($array[$i] == $convertirFrase[$j]){
                $contador++;
            }
        }
        echo $array[$i], " = ", $contador, "<br>";
    }
   }

   abcdario("La casa es blanca y la nube es gris");