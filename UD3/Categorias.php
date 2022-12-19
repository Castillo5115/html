<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosCategorias.css">
    <title>AFICINE</title>
</head>
<body>
    <div class="contenedor">
        <div class="encabezado">
            <div id="links">
            </div>
            <div id="titulo">
                <img src="img/logo.jpeg" alt="">
            </div>
        </div>
        <div class="listado_peliculas">            
            <?php
            ini_set('display_errors', 1);
            ini_set('html_errors', 1);
                class Categoria{
                    function __construct(){
                    }

                    
                    function init($id,$nombre){
                        $this->id = $id;
                        $this->nombre = $nombre;
                    }
                    function getId(){
                        return $this -> id;
                    }

                    function getNombre(){
                        return $this -> nombre;
                    }

                    function datos(){
                        $conexion = mysqli_connect('localhost', 'root', '12345');
                        mysqli_select_db($conexion, 'aficine');
                        $consulta = "SELECT * FROM Categoria";
                        $resultado = mysqli_query($conexion, $consulta);
                        if (!$resultado) {
                            $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                            $mensaje .= 'Consulta realizada: ' . $consulta;
                            die($mensaje);
                        }else{
                            $i = 0;
                            $arrayPeliculas = array();
                            while ($registro = mysqli_fetch_assoc($resultado)) {

                                $cate = new Categoria();

                                $id = $registro['id'];
                                $nombre = $registro['nombre'];
                                

                                $cate -> init($id, $nombre);
                                array_push($arrayPeliculas, $cate);
                                $i++;
                            
                            }
                            return $arrayPeliculas;
                    }

                }
            }
                $c = new Categoria;
                $c -> datos();
            ?>
            <div class="categoria">
                <h1 class="titulo">Terror</h1>
                <div class="img"><a href="Peliculas.php?genero=terror"><img id="terror" src="img/terror.png" alt="Categoria Terror"></a></div>               
            </div>
            <div class="categoria">
                <h1 class="titulo">Ciencia Ficcion</h1>
                <div class="img"><a href="Peliculas.php?genero=sci-fi"><img id="terror" src="img/sci-fi.png" alt="Categoria Ciencia Ficcion"></a></div>               
            </div>
            
        </div>     
    </div>
</body>
</html>