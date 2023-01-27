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
        require("../ReglasNegocio/LoginReglasNegocio.php");

        $torneosBL = new LoginReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
        foreach ($datosTorneos as $torneo)
        {
            
        }
    ?>
    <div class="pagina">
                <div class="cabecera">
                    <h1 id="titulo">Torneos AC</h1>
                </div>
                <div class="contenido">
                    <div id="contenedor">
                        <div id="central">
                            <div id="login">
                                <form id="loginform" action="../torneos/torneosVista.php" method="POST">
                                    <input type="text" name="usuario" placeholder="Usuario" required>
                                    
                                    <input type="password" placeholder="Contraseña" name="password" required>
                                    
                                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                                </form>
                                <div class="pie-form">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>