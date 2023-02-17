<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    header(" charset=utf-8");
    
    $conexion = mysqli_connect('localhost','root','12345');
    if (mysqli_connect_errno()){
            echo "Error al conectar a MySQL: ". mysqli_connect_error();
            exit;
    }
    $letra = $_REQUEST["letra"];
    mysqli_select_db($conexion, 'world');
    $consulta = mysqli_prepare($conexion, "select Name from country where Name like '".$letra."%'");
    $consulta->execute();
    $result = $consulta->get_result();

    $array = array();
    
    while ($myrow = $result->fetch_assoc()) {
        array_push($array, $myrow);
    }

    $strCountry = "";

    foreach($array as $n){
        if($strCountry == null){
            $strCountry = $n["Name"];
        }else{
            $strCountry .= ", " . $n["Name"];
        }
    }

    echo $strCountry;