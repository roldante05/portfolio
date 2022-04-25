<?php
$pg = "inicio"
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body id="inicio">
    <?php include_once "header.php" ?>
    <main class="container">
        <div class="row">
            <div class="col-12 col-sm-12 ">
                <div class="m-4 text-center my-4 ">
                    <a href="proyectos.php"><img class="computer d-none d-sm-block col-sm-12" src="./images/undraw_feeling_proud_qne1.svg" alt="computer"></a>
                    <a href="proyectos.php"><img class="mobile col-12 d-sm-none d-block" src="./images/undraw_mobile_application_re_13u3.svg" alt="Cohete"></a>
                </div>
                <div class="text-center col-12  d-flex justify-content-center">
                    <div class="texto mt-1">
                        <p class="col-12 py-1 px-4">Bienvenid@ a mi sitio web sobre sistemas.</p>
                    </div>
                </div>
                <div class="btn-violet text-center mb-3">
                    <a href="proyectos.php">Conoce mis proyectos</a>
                </div>
            </div>
        </div>
    </main>
    <footer class="container col-sm-12 col-12 ">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com/roldante05"><i class="fa-brands fa-github "></i></a>
                <a href="https://www.linkedin.com/in/dante-rold%C3%A1n-a87998201/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>

            <div class="col-12 col-sm-3 sponsor text-center text-sm-start">Sponsor <a href="https://depcsuite.com/">DePC suite</a></div>
            <div class="col-12 col-sm-3 text-center text-sm-start"> <a href="mailto:">danteroldan72@gmail.com</a></div>
        </div>
        <div class="whatsapp">
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </footer>


</body>

</html>