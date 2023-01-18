<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo Ping Pong</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
            ini_set('display_errors', 1);
            ini_set('html_errors', 1);

            class Login{
                function __construct(){
                }

                
                function init($id,$nombreTorneo, $fecha, $cantidadJugadores, $estado, $campeon){
                    $this->id = $id;
                    $this->nombreTorneo = $nombreTorneo;
                    $this->fecha = $fecha;
                    $this->cantidadJugadores = $cantidadJugadores;
                    $this->estado = $estado;
                    $this->campeon = $campeon;
                }
                function getId(){
                    return $this -> id;
                }

                function getNombre(){
                    return $this -> nombreTorneo;
                }

                function getFecha(){
                    return $this -> fecha;
                }

                function getCantidadJugadores(){
                    return $this -> cantidadJugadores;
                }

                function getEstado(){
                    return $this -> estado;
                }

                function getCampeon(){
                    return $this -> campeon;
                }

                function dameDatos(){
                    $conexion = mysqli_connect('localhost', 'root', '12345');
                    mysqli_select_db($conexion, 'Torneos');
                    $consulta = "SELECT * FROM T_Torneos";
                    $resultado = mysqli_query($conexion, $consulta);
                    if (!$resultado) {
                        $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                        $mensaje .= 'Consulta realizada: ' . $consulta;
                        die($mensaje);
                    }else{
                        $i = 0;
                        $arrayTorneos = array();
                        while ($registro = mysqli_fetch_assoc($resultado)) {

                            $datos = new Login();                            

                            $id = $registro['id'];
                            $nombreTorneo = $registro['nombreTorneo'];
                            $fecha = $registro['fecha'];
                            $cantidadJugadores = $registro['cantidadJugadores'];
                            $estado = $registro['estado'];
                            $campeon = $registro['campeon'];

                            $datos -> init($id,$nombreTorneo, $fecha, $cantidadJugadores, $estado, $campeon);
                            array_push($arrayTorneos, $datos);

                            

                            $i++;                           
                        
                        }
                        return $arrayTorneos;
                    }
                }

                function pintarDatos(){
                    $arrayDatos = $this -> dameDatos();
                    foreach ($arrayDatos as $x) {
                        echo "<div class=\"pagina\">";
                            echo "<div class=\"cabecera\">";
                                echo "<h1 id=\"titulo\">".$x -> getNombre()."</h1>";
                            echo "</div>";
                            echo "<div class=\"contenido\">";
                                echo "<div id=\"contenedor\">";
                                    echo "<div id=\"central\">";
                                        echo "<div id=\"login\">";
                                            echo "<div class=\"titulo\">";
                                                echo "Bienvenido";
                                            echo "</div>";
                                            echo "<form id=\"loginform\">";
                                                echo "<input type=\"text\" name=\"usuario\" placeholder=\"Usuario\" required>";
                                                
                                                echo "<input type=\"password\" placeholder=\"Contraseña\" name=\"password\" required>";
                                                
                                                echo "<button type=\"submit\" title=\"Ingresar\" name=\"Ingresar\" value=\"\">Login</button>";
                                            echo "</form>";
                                            echo "<div class=\"pie-form\">";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                }
                
            }
            $l = new Login;
            $l -> dameDatos();
            $l -> pintarDatos();
        ?>
</body>
</html>