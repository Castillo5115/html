<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    <title>Document</title>
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
                # Conexion a MySql.  

                class Pelicula{
                    // function __construct($id, $titulo, $duracionMin, $votos, $id_categoria){
                    //     $this->id = $id;
                    //     $this->titulo = $titulo;
                    //     $this->duracionMin = $duracionMin;
                    //     $this->votos = $votos;
                    //     $this->id_categoria = $id_categoria;
                    // }
                    function pintarPeliculas(){
                        //Conexion mysql
                        
                        $conexion = mysqli_connect('localhost', 'root', '12345');
                        mysqli_select_db($conexion, 'aficine');
                        $consulta = "SELECT * FROM Pelicula";
                        $resultado = mysqli_query($conexion, $consulta);
                        if (!$resultado) {
                            $mensaje = 'Consulta invalida: ' . mysqli_error($conexion) . "\n";
                            $mensaje .= 'Consulta realizada: ' . $consulta;
                            die($mensaje);
                        }else{
                            while ($registro = mysqli_fetch_assoc($resultado)) {
                                echo  $registro['titulo']. "<br>";
                            }
                        }
                
                        
                        //Mostrar datos                            
                        // $tituloPeliculas = array("IT", "SCREAM", "Expediente Warren", "Smile", "Annabelle", "Rings", "Nosotros", "IT Capitulo_2", "Vienes 13", "El Resplandor");
                        // for ($i=0; $i < count($imgPeliculas); $i++) { 
                        //     echo "<div class=\"pelicula\">";
                        //     echo"<div class=\"imagen\">";
                        //         echo"<img id=\"resplandor\" src=\"img/",$imgPeliculas[$i],"\" alt=\"Imagen película\">";
                        //     echo"</div>";
                        //     echo"<div class=\"descripcion\">";
                           
                        //         echo"<h3>",$tituloPeliculas[$i],"</h3>";
                            
                               
                        //     echo"</div>";
                        //     echo"<div class=\"enlace\">";
                        //         echo"<a href=\"\" class=\"ficha\">Ver Ficha</a>";
                        //     echo"</div>";
                        // echo"</div>";    
                    }
                }
                
                
                $peliculas = new Pelicula();
                $peliculas -> pintarPeliculas();
            ?>
        </div>        
    </div>
</body>
</html>