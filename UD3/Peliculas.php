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
                    function dameDatos($id_categoria){
                        $conexion = mysqli_connect('localhost', 'root', '12345');
                        mysqli_select_db($conexion, 'aficine');
                        $consulta = "SELECT * FROM Pelicula WHERE id_categoria = '$id_categoria'";
                        $resultado = mysqli_query($conexion, $consulta);
                        if (!$resultado) {
                            $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                            $mensaje .= 'Consulta realizada: ' . $consulta;
                            die($mensaje);
                        }else{
                            $i = 0;
                            $arrayPeliculas = array();
                            while ($conatador < $registro = mysqli_fetch_assoc($resultado)) {

                                $p = new Pelicula();
                                $arrayPeliculas[$i] = $p -> init($registro['id'], $registro['titulo'], $registro['duracionMin'], $registro['votos'], $registro['id_categoria']);
                                        $i++;
                            }
                            return $arrayPeliculas;
                        }
                    }

                    function pintarPeliculas(){
                        
                    }
                }
                
                
                $p = new Pelicula;
                $datos = $p -> dameDatos("terror");
                $p -> pintarPeliculas();
            ?>
        </div>        
    </div>
</body>
</html>