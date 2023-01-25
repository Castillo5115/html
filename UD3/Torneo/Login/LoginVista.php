<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo Ping Pong</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <?php
        require("LoginReglasNegocio.php");

        $torneosBL = new LoginReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
        foreach ($datosTorneos as $torneo)
        {
            
        }
    ?>
    echo "<div class=\"pagina\">";
                echo "<div class=\"cabecera\">";
                    echo "<h1 id=\"titulo\">Torneos AC</h1>";
                echo "</div>";
                echo "<div class=\"contenido\">";
                    echo "<div id=\"contenedor\">";
                        echo "<div id=\"central\">";
                            echo "<div id=\"login\">";
                                echo "<div class=\"titulo\">";
                                    echo "Bienvenido";
                                echo "</div>";
                                echo "<form id=\"loginform\" action=\"../torneos/torneosVista.php\" method=\"POST\">";
                                    echo "<input type=\"text\" name=\"usuario\" placeholder=\"Usuario\" required>";
                                    
                                    echo "<input type=\"password\" placeholder=\"Contraseña\" name=\"password\" required>";
                                    
                                    echo "<button type=\"submit\" title=\"Ingresar\" name=\"Ingresar\" value=\"\">Login</button>";
                                echo "</form>";
                                echo "<div class=\"pie-form\">";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
</body>

</html>