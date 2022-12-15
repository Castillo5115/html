<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    
        $genero = $_GET['genero'];
        if ($genero == "terror") {
            echo "<link rel=\"stylesheet\" href=\"estilos.css\">";
        }else if($genero == "sci-fi"){
            echo "<link rel=\"stylesheet\" href=\"cssSci-Fi.css\">";
        }
    
    ?>
    
    <title>Peliculas - Aficine</title>
</head>
<body>
    <div class="contenedor">
        <div class="encabezado">
            <div id="titulo">
                <a href="Categorias.php"><img class="logo" src="img/logo.jpeg" alt="Logo Aficine"></a>
            </div>
        </div>
        <div class="listado_peliculas">            
            <?php
                class Pelicula{
                    function __construct(){
                    }

                    
                    function init($id, $titulo, $duracionMin, $votos, $id_categoria, $descripcion){
                        $this->id = $id;
                        $this->titulo = $titulo;
                        $this->duracionMin = $duracionMin;
                        $this->votos = $votos;
                        $this->id_categoria = $id_categoria;
                        $this->descripcion = $descripcion;
                    }

                    function getId(){
                        return $this -> id;
                    }

                    function getTitulo(){
                        return $this -> titulo;
                    }

                    function getDuracionMin(){
                        return $this -> duracionMin;
                    }

                    function getVotos(){
                        return $this -> votos;
                    }

                    function getIdCategoria(){
                        return $this -> id_categoria;
                    }

                    function getDescripcion(){
                        return $this -> descripcion;
                    }

                    // Conexion a mysql
                    function dameDatos(){
                        
                        $genero = $_GET["genero"];

                        $conexion = mysqli_connect('localhost', 'root', '12345');
                        mysqli_select_db($conexion, 'aficine');
                        $consulta = "SELECT * FROM Pelicula WHERE id_categoria='$genero'";
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
                                $descripcion = $registro['descripcion'];

                                $p -> init($id, $titulo, $duracionMin, $votos, $id_categoria, $descripcion);
                                array_push($arrayPeliculas, $p);
                                $i++;
                            
                            }
                            return $arrayPeliculas;
                        }
                    }

                    function pintar(){
                        $arrayDatos = $this -> dameDatos();

                        foreach ($arrayDatos as $pelicula) {
                            echo "<div class=\"pelicula\" >";
                                echo "<div class=\"imagen\">";
                                    echo "<img id = \"resplandor\" src=\"img/".$pelicula->getId().".jpg\" alt=\"Imagen Pelicula\">";
                                echo "</div>";
                                echo "<div class=\"descripcion\">";
                                    echo "<h1>".$pelicula->getTitulo()."</h1>";
                                    echo $pelicula->getDescripcion(); 
                                echo "</div>";
                                echo "<div class=\"enlace\">";
                                    echo"<a href=\"Ficha.php?titulo=".$pelicula->getTitulo()."\" class=\"ficha\">Ver Ficha</a>";
                                echo"</div>";
                            echo "</div>";
                        }
                    }
                }
                
                
                $p = new Pelicula;
                $p -> dameDatos();
                $p -> pintar();
            ?>
        </div>
             
    </div>
</body>
</html>