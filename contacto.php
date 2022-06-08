<?php
$pg = "contacto";

if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    // Varios destinatarios
    $para  = 'danteroldan72@gmail.com' . ', '; // atención a la coma

    // título
    $título = 'Recibiste un email desde tu web';

    // mensaje
    $cuerpo = "
    Nombre = $nombre <br>
    Correo = $correo <br>
    Telefono = $telefono <br>
    Mensaje = $mensaje 
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: danteroldan72@gmail.com' . "\r\n";
    $cabeceras .= 'From: Recordatorio danteroldan72@gmail.com' . "\r\n";


    // Enviarlo
    // mail($para, $título, $mensaje, $cabeceras);
    header("Location: confirmacion-envio.php");
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <?php include_once "header.php" ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mb-5 mt-3">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 ">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-sm-6 col-12">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control shadow">
                    </div>
                    <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow" required=""></textarea>
                    <div class="mb-3 mt-3">
                        <button id="btnEnviar" name="btnEnviar" class="btn btn-blanco ">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container col-sm-12 col-12 ">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com/roldante05"><i class="fa-brands fa-github "></i></a>
                <a href="https://www.linkedin.com/in/dante-rold%C3%A1n-a87998201/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>

            <div class="col-12 col-sm-3 sponsor text-center texte-sm-start">Sponsor <a href="https://depcsuite.com/">DePC suite</a></div>
            <div class="col-12 col-sm-3 text-center texte-sm-start"> <a href="mailto:">danteroldan72@gmail.com</a></div>
        </div>
        <div class="whatsapp">
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </footer>


</body>

</html>