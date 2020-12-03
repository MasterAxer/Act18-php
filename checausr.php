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
                        <h2 class="subtitle">Nombre: <?php echo $_POST["nombre"];?></h2>
                        <h2 class="subtitle">Correo: <?php echo $_POST["email"];?></h2>
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