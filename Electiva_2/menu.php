<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<nav class="navbar navbar-expand-md mb-4"> <!--navbar-dark bg-dark mb-4 -->
    <div class="container-fluid">
        <!--<a class="navbar-brand" href="#">Top navbar</a>-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> <!--codigo menu hamburguesa para moviles-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ">
                    <li class="float-sm-left">
                        <a href="index.php" class="btn-blanco">Edsononimo<i class="fa-solid fa-face-smile"></i></a>
                    </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                <li class="nav-item">
                    <a class="nav-link px-4 <?php echo ($pg == "inicio")? "active" : ""; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 <?php echo ($pg == "reporte")? "active" : ""; ?>" href="reporte.php">Reporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 <?php echo ($pg == "para-ti")? "active" : ""; ?>" href="para-ti.php">Lo que tenemos para ti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 <?php echo ($pg == "categorias")? "active" : ""; ?>" href="categorias.php">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 <?php echo ($pg == "conocenos")? "active" : ""; ?>" href="conocenos.php">Conocenos</a>
                </li>
                </ul>
                
            <!--<form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form> codigo de busqueda-->
        </div>
    </div>
</nav>