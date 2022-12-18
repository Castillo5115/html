<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssFicha.css">
    <title>Ficha - Aficine</title>
</head>
<body>
    
            <?php
                class Ficha{
                    // ==================== Constructor ====================
                    function __construct(){
                    }

                    
                    function init($id, $titulo, $duracionMin, $votos, $id_categoria, $descripcion, $ano){
                        $this->id = $id;
                        $this->titulo = $titulo;
                        $this->duracionMin = $duracionMin;
                        $this->votos = $votos;
                        $this->id_categoria = $id_categoria;
                        $this->descripcion = $descripcion;
                        $this->ano = $ano;
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
                    function getAno(){
                        return $this -> ano;
                    }

                    // ==================== Conexion mysql ====================

                    function datos(){

                        $titulo = $_GET['titulo'];

                        $conexion = mysqli_connect('localhost', 'root', '12345');
                        mysqli_select_db($conexion, 'aficine');
                        $consulta = "SELECT * FROM Pelicula WHERE titulo='$titulo'";
                        $resultado = mysqli_query($conexion, $consulta);
                        if (!$resultado) {
                            $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                            $mensaje .= 'Consulta realizada: ' . $consulta;
                            die($mensaje);
                        }else{
                            $i = 0;
                            $arrayPeliculas = array();
                            while ($registro = mysqli_fetch_assoc($resultado)) {

                                $f = new Ficha();

                                $id = $registro['id'];
                                $titulo = $registro['titulo'];
                                $duracionMin = $registro['duracionMin'];
                                $votos = $registro['votos'];
                                $id_categoria = $registro['id_categoria'];
                                $descripcion = $registro['descripcion'];
                                $ano = $registro['año'];

                                $f -> init($id, $titulo, $duracionMin, $votos, $id_categoria, $descripcion, $ano);
                                array_push($arrayPeliculas, $f);
                                $i++;
                            
                            }
                            return $arrayPeliculas;
                        }
                    }

                    // ==================== Funciones ====================

                    function pintar(){
                        $array = $this -> datos();
                        foreach ($array as $ficha) {
                            echo "<div class=\"cabecera\">";
                                echo "<a id=\"logo\" href=\"Categorias.php\"><img src=\"img/logo.jpeg\" alt=\"Logo Aficine\"></a>";
                            echo "</div>";
                            echo "<div class=\"contenido\">";
                                echo "<div class=\"portada\">";
                                    echo "<img id=\"portada\" src=\"img/".$ficha->getId().".jpg\" alt=\"Imagen Portada Pelicula\">";
                                echo "</div>";
                                
                                echo "<div class=\"datos\">";
                                    echo "<h1>" . $ficha -> getTitulo() . "</h1><br>";
                                    echo "<p>Duracion: " . $ficha -> getDuracionMin() . " min</p><br>";
                                    echo "<p>Votos: " . $ficha -> getVotos() . "</p><br><br>";
                                    echo "<p>Sinopsis:<br>" . $ficha -> getDescripcion() . "</p><br><br>";
                                    echo "Año: " . $ficha -> getAno() . "<br><br>";
                                    echo "<h3>Votar</h3>";
                                    echo "<form action=\"Votos.php\" method=\"POST\">";
                                        
                                        echo "<lable for=\"sumarUno\">".$ficha->getTitulo()."</label>";
                                        echo"<input type=\"radio\" name=\"titulo\" value=\"".$ficha->getTitulo()."\"><br><br>";

                                        echo "<lable for=\"sumarUno\">Voto +1</label>";
                                        echo "<input type=\"radio\" name=\"votoUno\" value=\"1\"><br><br>";

                                        echo "<button type=\"sumbit\">Enviar</button>";
                                    echo "</form>";
                                echo "</div>";
                            echo "</div>";
                            
                        }
                    }

                    // ====================  ====================

                }

                $d = new Ficha;
                $d -> datos();
                $d -> pintar();

            ?>
            
        </div>
        
    
    
    </div>
    
    
</body>
</html>