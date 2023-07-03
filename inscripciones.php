<?php 
$titulo = "Inscripciones";
include_once 'header.php';
include_once 'navbar.php';
?>
<header class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="p-5 mb-4 rounded-3 my-5">
                <h1 class="fw-bold fs-3 mb-3">¿Por qué aprender Lengua de Señas</h1>
                <p class="fs-5">No sólo por la comunicación en sí, sino con el objetivo de brindar apoyo, cariño y contención a personas sordas de su localidad. Tengamos la plena seguridad que una persona Sorda agradecerá el interés que usted muestre por comunicarse.</p>
                <a class="btn btn-primary-lsa btn-lg" href="informacion.php#informacion_modalidades">¿Cómo son las clases?</a>
            </div>
        </div>
        <div class="col-md-3 offset-md-1 my-5">
            <img src="./public/media/images/lsa.png" alt="lengua de señas" class="img-fluid">
        </div>
    </div>
</header>
<div class="container-fluid bg-light my-5" id="fechas_inscripcion">
    <div class="row text-center py-5">
        <div class="col-md-3"></div>
        <div class="col-md-6 align-content-center fs-4">
            <div class="card-body">
                <h3 class="card-title fw-bolder mb-3 mt-5">Fechas de inscripción</h3>
                <p class="card-text">Si bien las fechas de inscripción son en <strong class="text-instituto">Febrero</strong> y <strong class="text-instituto">Julio</strong>, Usted puede pre-inscribirse durante TODO el año al reservar su vacante con un pago mínimo.</p>
                <a class="btn btn-success btn-lg fab fa-whatsapp my-4" href="https://wa.me/542954313658/?text=Hola, me interesa aprender Lengua de Señas, información por favor." target="_blank">¡Inscribirme por WhatsApp!</a>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


<div class="container mb-5 " id="contacto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="fw-bold m-4">O completá el formulario y realizá la pre-inscripción vía web</h2>
        </div>
        <div class="col-md-8 fs-4 card  formInsc">
            <form action="inscripciones.php#contacto" class="card-body p-5" method="post">
            <?php
                if(isset($_POST['enviar'])) {
                    require("class.phpmailer.php");
                    require("class.smtp.php");
                    $mail = new PHPMailer();
                    $mail->IsSMTP();
                    $mail->Host = "smtp.hostinger.com";  // specify main and backup server
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
                    $mail->SMTPAuth = true;     // turn on SMTP authentication
                    $mail->Username = "contacto@interprete-ya.com.ar";  // SMTP username
                    $mail->Password = "Manos_2022"; // SMTP password
                    $mail->From = "contacto@interprete-ya.com.ar";
                    $mail->FromName = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);        // remitente
                    $mail->AddAddress("manosquehablansrlp@gmail.com", "Manos que Hablan");        // destinatario 
                    $mail->AddReplyTo(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), $mail->FromName);    // responder a
                    $mail->WordWrap = 50;     // set word wrap to 50 characters
                    $mail->IsHTML(true);     // set email
                    $mail->Subject = "Mensaje desde Web -> Inscripciones";
                    $mail->Body    = "Mensaje enviado desde formulario de inscripciones con los siguientes datos:<br>Nombre y Apellido: " . filter_var($_POST['nombre'], FILTER_SANITIZE_STRING) ."<br>Nro de Celular: " . filter_var($_POST['celular'], FILTER_SANITIZE_STRING) . "<br>Correo electrónico: " . filter_var($_POST['email'], FILTER_SANITIZE_STRING) . "<br>Localidad y Provincia: " . filter_var($_POST['localidad'], FILTER_SANITIZE_STRING);
                    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
                    if(!$mail->Send()) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h5 class="alert-heading">Oops!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <p>El mensaje no se ha podido enviar. Intente más tarde o contacte con el desarrollador si el problema persiste.<br>Detalle: ' . $mail->ErrorInfo . '</p>
                        </div>';	                           
                    } else {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h5 class="alert-heading">¡Gracias por escribirnos!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <p>En breve nos comunicaremos con Usted.</p>
                        </div>';
                    }                    
                }
                ?>
                <div class="form-group mb-3 fs-5">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre y Apellido *" required>                            
                </div>
                <div class="form-group mb-3 fs-5">
                    <input type="text" class="form-control" name="celular" placeholder="Número de celular *" required>
                </div>
                <div class="form-group mb-3 fs-5">
                    <input type="email" class="form-control" name="email" placeholder="Correo electrónico *" required>                           
                </div>
                <div class="form-group fs-5">
                    <input type="text" class="form-control" name="localidad" placeholder="Localidad y Provincia *" required>                            
                </div>
                <button class="btn btn-primary-lsa btn-lg mt-3" name="enviar" type="submit">Enviar</button>
            </form>
        </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php include_once 'footer.php'; ?>