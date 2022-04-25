<?php
$pg = "sobre-mi"
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">

</head>

<body id="sobre-mi">
    <?php include_once "header.php" ?>
    <main class="container">
        <div class="row">
            <div class="d-flex align-sm-items-center">
                <div class="col-10 col-sm-7 descripcion-de-mi">
                    <h1 class="mt-1 mb-3">Sobre mí</h1>
                    <p class="col-sm-8 col-12">Buenas soy Dante Roldan, estudiante cursando la carrera Tec en Informaica en la ungs, me gusta lo que es la
                        tecnologia y desarrollar nuevas habilidades, actualmente me estoy especializando en el desarrollo web, de forma autodidacta y
                        haciendo cursos
                    </p>
                    <div class="correo-de-mi mt-sm-5 mt-1">
                        <a href="mailto:roldandante72@gmail.com">Enviar mensaje</a>
                    </div>
                </div>
                <div class="mt-5 mb-4 foto-de-mi ms-4">
                    <!-- <img src="./images/foto_dante.jpg" alt="Dante Roldan"> -->
                </div>
            </div>
        </div>
    </main>
    <section id="tecnologias">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="my-sm-5 text-white my-3 ">Dominio de tecnologias</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>Javascript</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/javascript.jpeg" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>PHP</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/hwUcGZ41_400x400.jpg" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>HTML5</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/html.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>React</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/react.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>Jquery</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/jquery.jpg" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>Bootstrap</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/boostraps.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4">
                        <h3>Laravel</h3>
                        <img class="img-fluid d-block mx-auto" width="110" src="./images/laravel.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4">
                        <h3>MySQL</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/mysql.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4">
                        <h3>CSS3</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/css.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4">
                        <h3>Git</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/git.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4">
                        <h3>Apache</h3>
                        <img class="img-fluid d-block mx-auto" width="130" src="./images/apache.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4">
                        <h3>Mercado pago</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/mercadopago.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="trabajo">
        <div class="container">
            <h3 class="my-sm-5 my-5 title"><i class="fa-solid fa-briefcase" style="margin-right: 5px;"></i>Experiencia laboral</h3>
            <div class="row shadow">
                <div class="d-flex align-items-sm-center">
                    <div class="caae col-2  d-none d-sm-block">
                        <img src="./images/caae.png" width="130" alt="">
                    </div>

                    <div class="titles col-10  pt-sm-4">
                        <h3>Soldado de 2da (vs "ec")</h3>
                        <h4>Comando de Adiestramiento y Alistamiento del Ejercito Argentino</h3>
                            <h5>2021 - 2022</h5>
                            <p class="descripcion">
                                Cumplimiento de los estándares de disciplina,
                                uso de armas y mantenimiento de las mismas,
                                limpieza y cuidado de las instalaciones militares de
                                residencia,
                                servicio de guardia y seguridad
                            </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="educacion">
        <div class="container">
            <h3 class="my-3 my-sm-5 title"><i class="fa-solid fa-graduation-cap" style="margin-right: 5px;"></i></i>Formacion
                Academica (Cursando)</h3>
            <div class="row shadow">
                <div class="col-12 col-sm-6 pt-4">
                    <div class="formacion row">
                        <div class="ungs col-sm-3 d-none d-sm-block">
                            <img src="./images/ungs.jfif" width="130" alt="">
                        </div>
                        <div class="titles col-sm-9 py-3">
                            <h3>Tecnicatura en informatica</h3>
                            <h4>Universidad Nacional de General Sarmiento</h3>
                                <h5>2022 - Actualmente Cursando (1er año)</h3>
                                    <p>https://www.ungs.edu.ar/</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="unpaz col-sm-3  d-none d-sm-block">
                            <img src="./images/unpaz.jpg" width="130" alt="">
                        </div>
                        <div class="titles col-sm-8 py-3">
                            <h3>Analistas de Sistemas</h3>
                            <h4>Universidad Nacional de José C. Paz</h3>
                                <h5>2022 - Actualmente Cursando (1er año)</h3>
                                    <p>https://www.unpaz.edu.ar/</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="d-flex align-items-center my-2">
                    <div class="ungs col-2 d-flex align-items-center">
                        <img src="./images/ungs.jfif" width="130" alt="">
                    </div>
                    <div class="titles col-4 py-3">
                        <h3>Tecnico en informatica</h3>
                        <h4>Ungs</h3>
                            <h5>2022 - Actualmente</h3>
                                <p>https://www.ungs.edu.ar/</p>
                    </div>
                </div> -->
            </div>

        </div>
    </section>
    <section id="cursos">
        <div class="container">
            <h3 class="my-3 my-sm-5 title"><i class="fa-solid fa-graduation-cap" style="margin-right: 5px;"></i></i> Cursos de
                desarrollo profesional</h3>
            <div class="row shadow">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="depcsuite col-sm-4  d-none d-sm-block">
                            <img class="pt-5" src="./images/logo-depcsuite.svg" width="130" alt="">
                        </div>
                        <div class="titles col-sm-8 py-3">
                            <h3>Desarrollo Web Full Stack</h3>
                            <h4>DePc Suite</h3>
                                <h5>2022 - Actualmente Cursando </h3>
                                    <p>https://depcsuite.com/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="ungs col-sm-4 py-3 d-none d-sm-block">
                            <img src="./images/papillote.png" width="130" alt="">
                        </div>
                        <div class="titles col-sm-8 py-3">
                            <h3>Bartender</h3>
                            <h4>Papillote Coworking</h3>
                                <h5> Febrero - Abril - 2022</h3>
                                    <p>https://www.instagram.com <br> /cocktailclan.sm/</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hobbit">
        <div class="container">
            <div class="row mt-5 pt-5 mx-0">
                <!-- <div class="col-sm-6 col-12">
                    <div class="row ml-sm-2 bg-white shadow ms-sm-1 card-message">
                        <div class="col-4 text-center message d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-message"></i>
                        </div>
                        <div class="row col-8 p-5">
                            <h2>HOBBIES</h2>
                            <ul>
                                <li>Tenis</li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <div class="d-flex justify-content-center">
                    <div class="row ml-sm-2 bg-white shadow ms-sm-1 card-hobbit">
                        <div class="col-4 text-center star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="row col-8 p-4">
                            <h2>HOBBIES</h2>
                            <ul>
                                <li>Futbol</li>
                                <li>Mates</li>
                                <li>Series</li>
                                <li>Bartender</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="container col-sm-12 col-12 ">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com/roldante05"><i class="fa-brands fa-github" style="color: red;"></i></a>
                <a href="https://www.linkedin.com/in/dante-rold%C3%A1n-a87998201/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>

            <div class="col-12 col-sm-3 text-center text-sm-start"><span>Sponsor</span> <a href="https://depcsuite.com/">DePC suite</a></div>
            <div class="col-12 col-sm-3 text-center text-sm-start"> <a href="mailto:">danteroldan72@gmail.com</a></div>
        </div>
        <div class="whatsapp">
            <a href=""><i class="fa-brands fa-whatsapp" style="color: white;"></i></a>
        </div>
    </footer>


    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>