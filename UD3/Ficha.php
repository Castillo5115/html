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
    <div class="cabecera">
        <a href="Categorias.php"><img src="img/logo.jpeg" alt="Logo Aficine"></a>
        <?php
        ?>
        <h1>Ficha de $ficha -> getTitulo() </h1>
    </div>
    
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
                // $array = $this -> datos();
                // foreach ($array as $ficha) {
                //     echo "<br>Id: " . $ficha -> getId() . "<br><br>";
                //     echo "Titulo: " . $ficha -> getTitulo() . "<br><br>";
                //     echo "Duracion: " . $ficha -> getDuracionMin() . "<br><br>";
                //     echo "Votos: " . $ficha -> getVotos() . "<br><br>";
                //     echo "Descripcion: " . $ficha -> getDescripcion() . "<br><br>";
                //     echo "Año: " . $ficha -> getAno() . "<br><br>";
                // }
            }

            // ====================  ====================

        }

        $d = new Ficha;
        $d -> datos();
        $d -> pintar();

    ?>
    
</body>
</html>