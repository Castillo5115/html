<html>
<head>
    <title>Esto es el titulo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <a href="index.html">INICIO</a>
            <a href="pagina1.html">Primera página</a>
            <a href="pagina2.html">Segunda página</a>
        </div>
        <div class="segunda_caja">
                <div class="listado_peliculas">
                    <div class="peliculas">
                        <div class="imagen">
                            <img src="img/1.jpg" alt="cartel resplandor" id="resplandor">
                        </div>
                        <div class="titulo">
                            <div class="datos">
                                <h3 class="nombrePelicula">El resplandor</h3><br>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae deleniti earum at. Quisquam corrupti odit, dicta aliquam explicabo nisi repellendus repudiandae deleniti libero illo error, asperiores facilis, eum inventore rem?</p><br>
                                <ul>
                                    <li>Año Estreno: 1980</li>
                                    <li>Director: </li>
                                    <li>Valoracion: 8.2</li>
                                </ul>
                            </div>
                        </div>
                        <div class="enlace">
                            <div class="enlaceFicha">
                            <a class="verFicha" href="">Ver Ficha</a>
                            </div>
                            
                        </div>
                    </div>
                    
                    <?php
                        class Peliculas{
                            function pintarPelicula(){
                                echo"<div class=\"peliculas\">";
                                    echo "<div class=\"imagen\">";
                                        echo "<img src=\"img/1.jpg\" alt=\"cartel resplandor\" id=\"resplandor\">";
                                    echo"</div>";
                                    echo "<div class=\"titulo\">";
                                        echo"<div class=\"datos\">";
                                            echo"<h3 class=\"nombrePelicula\">El resplandor</h3><br>";
                                            echo "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae deleniti earum at. Quisquam corrupti odit, dicta aliquam explicabo nisi repellendus repudiandae deleniti libero illo error, asperiores facilis, eum inventore rem?</p><br>";
                                            echo "<ul>";
                                                echo"<li>Año Estreno: 1980</li>";
                                                echo"<li>Director: </li>";
                                                echo"<li>Valoracion: 8.2</li>";
                                            echo"</ul>";
                                        echo"</div>";
                                    echo "</div>";
                                    echo "<div class=\"enlace\">";
                                        echo"<div class=\"enlaceFicha\">";
                                        echo"<a class=\"verFicha\" href=\"\">Ver Ficha</a>";
                                        echo"</div>";
                                    echo"</div>";
                                echo"</div>";
                            }
                        }
                        $pelicula1 = new Peliculas(); 
                        $pelicula1 -> pintarPelicula();
                        
                    
                    ?>
                </div>
        </div>
        
    <div>
</body>
</html>