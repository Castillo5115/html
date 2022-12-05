<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    <title>Peliculas - Aficine</title>
</head>
<body>
    <div class="contenedor">
        <div class="encabezado">
            <div id="titulo">
                <a href="categorias.php"><img class="logo" src="img/logo.jpeg" alt=""></a>
            </div>
        </div>
        <div class="listado_peliculas">            
            <?php
                class Pelicula{
                    function __construct(){
                    }

                    
                    function init($id, $titulo, $duracionMin, $votos, $id_categoria){
                        $this->id = $id;
                        $this->titulo = $titulo;
                        $this->duracionMin = $duracionMin;
                        $this->votos = $votos;
                        $this->id_categoria = $id_categoria;
                    }
                    // Conexion a mysql
                    function dameDatos( ){
                        $conexion = mysqli_connect('localhost', 'root', '12345');
                        mysqli_select_db($conexion, 'aficine');
                        $consulta = "SELECT * FROM Pelicula";
                        $resultado = mysqli_query($conexion, $consulta);
                        if (!$resultado) {
                            $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                            $mensaje .= 'Consulta realizada: ' . $consulta;
                            die($mensaje);
                        }else{
                            $i = 0;
                            $arrayPeliculas = array();
                            while ($registro = mysqli_fetch_assoc($resultado)) {
                                
                                $p = new Pelicula();

                                $id = $registro['id'];
                                $titulo = $registro['titulo'];
                                $duracionMin = $registro['duracionMin'];
                                $votos = $registro['votos'];
                                $id_categoria = $registro['id_categoria'];

                                $arrayPeliculas[$i] = array($id, $titulo, $duracionMin, $votos, $id_categoria);
                                // $arrayPeliculas[$i] = $p->init($id, $titulo, $duracionMin, $votos, $id_categoria);
                                $i++;
                            
                            }

                            for ($i=0; $i < count($arrayPeliculas); $i++) { 
                                echo $arrayPeliculas[$i][1] . "<br>";
                            }

                            return $arrayPeliculas;
                        }
                    }

                    function pintarPeliculas(){
                        
                    }

                }
                
                
                $p = new Pelicula;
                $p -> pintarPeliculas();
                $p -> dameDatos();
            ?>
        </div>        
    </div>
</body>
</html>