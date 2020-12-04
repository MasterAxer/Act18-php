<html>
    <head>
    <title>Envio de informaci&oacute;n</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
    <body>
    <!--Banner de bulma-->
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                <h1 class="title">Universidad de Colima</h1>
                <h2 class="subtitle">Facultad de Telemática</h2>
                </div>
            </div>
        </section>
        <!-----Cuerpo del documento---->
            <div class="container">
                <div class="has-text-centered">
                    <h1 class="title">Bienvenido al sistema <br></h1>
                    <div class="box has-text-justified">
                    <?php
                    $nom=$_POST["nombre"];
                    $mail=$_POST["email"];
                        if(strlen($nom)>0&&strlen($mail)>0)
                        {
                            echo "<h2 class='subtitle'><span class='has-background-light'>Nombre: </span>".$nom."</h2>";
                            echo "<h2 class='subtitle'><span class='has-background-light'>Email: </span>".$mail."</h2>";
                        }
                        else
                        {
                            echo "<div class='button is-danger is-fullwidth'>Error en el envío de información</div>";
                        }
                    ?>
                        
                    </div>
                </div>
            </div>
            <!--Footer de bulma-->
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                <strong>&copy;Desarrollado</strong> por <a href="https://github.com/MasterAxer" target="_blank">Jorge López</a>. 
                </p>
            </div>
        </footer>
    </body>
</html>