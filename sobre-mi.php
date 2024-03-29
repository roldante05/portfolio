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
    <link rel="shortcut icon" href="images/developer.png" type="image/x-icon">

</head>

<body id="sobre-mi">
    <?php include_once "header.php" ?>
    <main class="container">
        <div class="row">
            <div class="d-flex align-sm-items-center">
                <div class="col-11 col-sm-7 descripcion-de-mi">
                    <h1 class="mt-1 mb-3">Sobre mí</h1>
                    <p class="col-sm-9 col-12">Mi nombre es Dante Roldan, soy estudiante universitario, apasionado
                        por la tecnología y videojuegos.Busco nuevas experiencias que me permitan crecer profesionalmente 
                        en el área it. Me gusta trabajar en equipo, soy creativo y con capacidad para adaptarme a los cambios. 
                        Cuento con conocimientos en el área de programación web full stack y experiencia en diferentes proyectos
                    </p>
                    <div class="correo-de-mi mt-sm-3 mt-1">
                        <a href="mailto:roldandante72@gmail.com">Enviar mensaje</a>
                    </div>
                </div>
                <div class="mt-5 mt-sm-4 mb-4 foto-de-mi ms-4">
                    <!-- <img src="./images/foto_dante.jpg" alt="Dante Roldan"> -->
                </div>
            </div>
        </div>
    </main>
    <section id="tecnologias">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="my-sm-5 text-white my-3 ">Dominios de tecnologias</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>HTML5</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/html.png" alt="">
                    </div>
                </div>

                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>CSS3</h3>
                        <img class="img-fluid d-block mx-auto" width="80" src="./images/cssdos.png" alt="">
                    </div>
                </div>

                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0">
                        <h3>Bootstrap</h3>
                        <img class="img-fluid d-block mx-auto" width="60" src="./images/boostraps.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0 js">
                        <h3>Javascript</h3>
                        <img class="img-fluid d-block mx-auto " width="60" src="./images/javascript.jpeg" alt="">
                    </div>
                </div>


                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0 react">
                        <h3>React</h3>
                            <img class="img-fluid d-block mx-auto " width="60" src="./images/react.png" alt="React">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mb-4 mb-sm-0 jquery">
                        <h3>Jquery</h3>
                            <img class="img-fluid d-block mx-auto " width="60" src="./images/jquery.jpg" alt="Jquery">
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4">
                        <h3>PHP</h3>
                        <img class="img-fluid d-block mx-auto" width="100" src="./images/logo_php.png" alt="">
                    </div>
                </div>

                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4 laravel">
                        <h3>Laravel</h3>
                        <img class="img-fluid d-block mx-auto " width="100" src="./images/laravel.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4 mysql">
                        <h3>MySQL</h3>
                        <img class="img-fluid d-block mx-auto" width="80" src="./images/mysql.png" alt="">
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
                    <div class="card py-5 px-4  mx-0 mt-4 mb-sm-4 mercadopago">
                        <h3>AJAX</h3>
                        <!-- <img class="img-fluid d-block mx-auto " width="80" src="./images/ajax.png" alt=""> -->
                        <img class="img-fluid d-block mx-auto " width="80" src="./images/ajax.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="trabajo">
        <div class="container">
            <h3 class="my-sm-5 my-5 title"><i class="fa-solid fa-briefcase" style="margin-right: 5px;"></i>Experiencia laboral</h3>
            <div class="row shadow">
                <div class="col-12 col-sm-5 pt-4">
                    <div class="row">
                        <div class="caae col-2 col-sm-4 d-none d-sm-block">
                            <img src="./images/tecnico.png" width="120" alt="">
                        </div>
                        <div class="titles col-10 col-sm-8 pb-sm-2">
                            <h3>Emprendimiento</h3>
                            <h4>Servicio Tecnico de PC</h4>
                            <h5> Marzo 2021 - Mayo 2022 </h5>
                            <ul>
                                <li>Instalación de Software</li>
                                <li>Instalación de Programas</li>
                                <li>Mantenimiento de Software</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-7 pt-4">
                    <div class="row">
                        <div class="caae col-2 col-sm-3 d-none d-sm-block">
                            <img src="./images/web.png" width="130" alt="">
                        </div>
                        <div class="titles col-10 col-sm-9 pb-sm-2">
                            <h3>FREELANCE</h3>
                            <h4>Programación Web</h4>
                            <h5> Mayo - Junio 2022 </h5>
                            <ul>
                                <li>Desarrollo de paginas web</li>
                                <li>Implementando tecnologías como HTML, CSS, Bootstrap y PHP</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section id="educacion">
        <div class="container">
            <h3 class="my-3 my-sm-5 title"><i class="fa-solid fa-graduation-cap" style="margin-right: 5px;"></i></i>Formacion
                Academica </h3>
            <div class="row shadow">
                <!-- <div class="col-12 col-sm-7 pt-4">
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
                    </div> -->


                <!-- COMENTADO POR QUE DEJE LA  CARRERA PENDIENTE -->

                <div class="col-12 col-sm-7 pt-4">
                    <div class="row">
                        <div class="unpaz col-sm-3  d-none d-sm-block">
                            <img src="./images/unpaz.jpg" width="130" alt="">
                        </div>
                        <div class="titles col-sm-9 py-3">
                            <h3>Universidad Nacional de José C. Paz</h3>
                            <h4>Analistas de Sistemas (Nivel Inicial)</h4>
                            <h5>2021 - Actualidad</h5>
                            <p><a href="https://www.unpaz.edu.ar/">UNPAZ</a></p>
                        </div>
                    </div>
                </div>
            </div>

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
                            <h3>DePc Suite</h3>
                            <h4>Programación Web Full Stack</h4>
                            <h5> Marzo - Agosto 2022 </h3>
                                <p><a href="https://depcsuite.com/">DePC Suite</a></p>
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
                                    <p><a href="https://www.instagram.com/cocktailclan.sm/">Papillote Coworking</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="ungs col-sm-4 py-3 d-none d-sm-block">
                            <img src="./images/fundacionp.jpg" width="170" alt="">
                        </div>
                        <div class="titles col-sm-8 py-3">
                            <h3>Fundación Pescar, Santander , J.P Morgan</h3>
                            <h4>Educación IT</h3>
                                <h4>Desarrollo Web Full Stack</h3>
                                    <h5> Julio - Actualmente - 2022</h3>
                                        <p> <a href="http://www.pescar.org.ar/wp/">Fundación Pescar</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hobbit">
        <div class="container">
            <div class="row mt-5 pt-5 mx-0">
                <div class="d-flex justify-content-center">
                    <div class="row ml-sm-2 bg-white shadow ms-sm-1 card-hobbit">
                        <div class="col-4 text-center star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="row col-8 p-4">
                            <h2>HOBBIES</h2>
                            <ul>
                                <li>Futbol</li>
                                <li>Runner</li>
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
            <a href="https://api.whatsapp.com/send?phone=541162423341"><i class="fa-brands fa-whatsapp" style="color: white;"></i></a>
        </div>
    </footer>


    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>