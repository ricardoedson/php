<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>    <!--boton hamburguesa-->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Edsononimo</title>
</head>
<body id="inicio">
    <section id= "menu">
    <header class="container shadow">
        <?php include_once "menu.php"; ?>
    </header>
    </section>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>#EnTendencia</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">

                
            </div>
            <div class="col-6">
                <div class="text-center">
                <button type="button" class="btn btn-primary me-4">#noticia 1</button>
                <button type="button" class="btn btn-primary me-4">#noticia 2</button>
                <button type="button" class="btn btn-primary me-4">#noticia 3</button>
                </div>
                <section id="noticia-principal" class="mt-5">
                    <div class="row">
                        <div class="col-12">
                            <img src="images/bitcoin-2007769_1280.jpg" alt="Bitcoin" class="shadow">
                            <h2 class="shadow">Titular</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aspernatur quos repudiandae fugiat deserunt error minus voluptate ea ducimus. Sapiente non aut velit laudantium voluptatibus reprehenderit odit ratione exercitationem necessitatibus.</p>
                        </div>
                    </div>
                </section>
                <div class="row info">
                    <div class="col-12">
                        <img src="images/info_logo.png" alt="info">
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>


    </main>
    <footer class="container mt-auto pb-3"> <!--class="container"-->
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="index.php">Edsononimo</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:edsotz2018@gmail.com">ricardo.ortiz.a@uniautonoma.edu.co</a>
            </div>
        </div>
        <a href="" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4" ></i></a>
    </footer>
</body>
</html>