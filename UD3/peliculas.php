<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
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
                class Pelicula{
                    function pintarPeliculas(){
                        $imgPeliculas = array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg");
                        $tituloPeliculas = array("IT", "SCREAM", "Expediente Warren", "Smile", "Annabelle", "Rings", "Nosotros", "IT Capitulo_2", "Vienes 13", "El Resplandor");
                        for ($i=0; $i < count($imgPeliculas); $i++) { 
                            echo "<div class=\"pelicula\">";
                            echo"<div class=\"imagen\">";
                                echo"<img id=\"resplandor\" src=\"img/",$imgPeliculas[$i],"\" alt=\"Imagen película\">";
                            echo"</div>";
                            echo"<div class=\"descripcion\">";
                                echo"<h3>",$tituloPeliculas[$i],"</h3>";
                            echo"</div>";
                            echo"<div class=\"enlace\">";
                                echo"<a href=\"\" class=\"ficha\">Ver Ficha</a>";
                            echo"</div>";
                        echo"</div>";    
                        }
                    }
                }
                $peliculas = new Pelicula();
                $peliculas -> pintarPeliculas();
            ?>
        </div>        
    </div>
</body>
</html>