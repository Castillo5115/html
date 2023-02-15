<?php
ini_set('display_errors', 1);
ini_set('html_errors', 1);

$letra = 'A';
// $comparador = strtoupper($letra);

// $letra = $_REQUEST["letra"];

$hint = "";

$conexion = mysqli_connect('localhost', 'root', '12345');
mysqli_select_db($conexion, 'world');
$consulta = "SELECT  Name FROM city where (Name REGEXP '^$letra')";
$resultado = mysqli_query($conexion, $consulta);

if ($letra !== "") {
    $letra = strtolower($letra);
    $len=strlen($letra);
    foreach($resultado as $name) {
      if (stristr($letra, substr($name, 0, $len))) {
        if ($hint === "") {
          $hint = $name;
        } else {
          $hint .= ", $name";
        }
      }
    }
  }
  
  // Output "no suggestion" if no hint was found or output correct values
  echo $hint === "" ? "no se encuentra" : $hint;

// if (!$resultado) {
//     $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
//     $mensaje .= 'Consulta realizada: ' . $consulta;
//     die($mensaje);
// }else{
//     while ($registro = mysqli_fetch_assoc($resultado)) {
//         echo $registro['Name']. " | ";
//     }
// }