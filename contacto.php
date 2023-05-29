<?php 
$titulo = "Contacto";
include_once 'header.php';
include_once 'navbar.php';
?>
        <div class="container-fluid" id="contacto_formulario">
            <div class="row justify-content-center">
                <div class="col-md-7">
                        <h1 class="text-instituto">Contáctenos</h1>
                    <p>Elija una de las siguientes opciones. Para nosotros será un placer ayudarle a disipar sus dudas. Complete el siguiente formulario para que podamos ayudarlo. <span class="fw-bold">En caso de consultar por pasantías, no olvide cargar su Curriculum Vitae en formato PDF.</span></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 p-5">
                    <form action="contacto.php" method="post" enctype="multipart/form-data">
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
                            $mail->AddReplyTo(filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL), $mail->FromName);    // responder a
                            $mail->WordWrap = 50;     // set word wrap to 50 characters
                            $mail->IsHTML(true);     // set email
                            $mail->Subject = "Mensaje desde Web -> Contacto";
                            $mail->Body    = filter_var($_POST['cuerpo'], FILTER_SANITIZE_STRING);
                            $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
                            $ok = true;
                            $msg = "";
                            if (array_key_exists('cv', $_FILES)) {
                                // Verifico que el archivo no haya arrojado error por pesar mas del size permitido
                                    if($_FILES['cv']['error'] == 2) {
                                        $msg = "El archivo PDF no puede pesar más de 6Mb.<br>";
                                        $ok = false;
                                }
                                // Si todo salio bien arriba...
                                if($ok) {
                                    if (!function_exists('set_magic_quotes_runtime')) {
                                        function set_magic_quotes_runtime($new_setting) {
                                            return true;
                                        }
                                    }
                                    $ext = PHPMailer::mb_pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
                                    $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['cv']['name'])) . '.' . $ext;
                                    $filename = $_FILES['cv']['name'];
                                    if (move_uploaded_file($_FILES['cv']['tmp_name'], $uploadfile)) {
                                        if (!$mail->addAttachment($uploadfile, $filename)) {
                                            $msg .= 'Fallo al adjuntar el archivo ' . $_FILES['cv']['name'];
                                            $ok = false;
                                        }
                                    } else {
                                        $msg .= "Ocurrió un problema con el servidor subiendo el CV. Por favor vuelva a intentarlo.<br>";
                                        $ok = false;
                                    }
                                }
                            }
                            if($ok) {
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
                            } else {
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <h5 class="alert-heading">Oops!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <p>Error al enviar el mensaje: ' . $msg .'<br></p>
                                    </div>';
                            }            
                        }
                        ?>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Correo electrónico *</label>
                            <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre y apellido *</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="cuerpo">Mensaje *</label>
                            <textarea placeholder="Describa su pregunta lo más detallado posible" name="cuerpo" id="cuerpo"  class="form-control" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="cv" class="form-label">CV en formato PDF</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="600000">
                            <input type="file" name="cv" id="cv" accept="application/pdf" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary-lsa btn-lg" name="enviar">Enviar</button>
                    </form>                    
                </div>
            </div>
        </div>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="mb-4 text-center">Puede encontrarnos en Joaquin Ferro 980</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3202.7713588194933!2d-64.29081898504093!3d-36.60781537377153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c2cd9fea37a019%3A0x1cc65da1088db70a!2sJoaqu%C3%ADn%20Ferro%20980%2C%20L6302%20Santa%20Rosa%2C%20La%20Pampa!5e0!3m2!1ses-419!2sar!4v1657110834228!5m2!1ses-419!2sar" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
 </div>
<?php include_once 'footer.php'; ?>