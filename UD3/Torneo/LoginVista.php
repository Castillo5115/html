<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo Ping Pong</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
    <!-- <div class="pagina">
        <div class="cabecera">
            <h1 id="titulo">Torneo de prueba</h1>
        </div>
        <div class="contenido">
            <div id="contenedor">
                <div id="central">
                    <div id="login">
                        <div class="titulo">
                            Bienvenido
                        </div>
                        <form id="loginform">
                            <input type="text" name="usuario" placeholder="Usuario" required>
                            
                            <input type="password" placeholder="Contraseña" name="password" required>
                            
                            <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                        </form>
                        <div class="pie-form">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
                    return $this -> nombre;
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
                        $array = array();
                        while ($registro = mysqli_fetch_assoc($resultado)) {

                            $d = new Login();

                            $id = $registro['id'];
                            $nombreTorneo = $registro['nombre'];
                            $fecha = $registro['fecha'];
                            $cantidadJugadores = $registro['cantidadJugadores'];
                            $estado = $registro['estado'];
                            $campeon = $registro['campeon'];                            

                            $d -> init($id, $nombreTorneo,$fecha, $cantidadJugadores, $estado, $campeon);
                            var_dump($d);
                            array_push($array, $d);
                            $i++;
                        
                        }
                        
                    }
                }
                function pintarForm(){
                    $arrayDatos = $this -> dameDatos();
                    foreach ($arrayDatos as $datosTorneo) {
                        echo $datosTorneo -> getNombre();
                    }
                }
            }
            $l = new Login;
            $l -> dameDatos();
            $l -> pintarForm();
        ?>
</body>
</html>