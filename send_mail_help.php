<?php 
$titulo = "Envío de mail de ayuda";
include_once 'header.php';
include_once 'navbar.php';
require("class.phpmailer.php");
require("class.smtp.php");
if(isset($_POST['enviar'])) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "smtp.hostinger.com";  // specify main and backup server
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    $mail->Username = "ebook@manosquehablan.ar";  // SMTP username
    $mail->Password = "2023_Lsa"; // SMTP password
    $mail->From = "ebook@manosquehablan.ar";
    $mail->FromName = "Manos que Hablan Rostros que Expresan";        // remitente
    $mail->AddAddress("manosquehablansrlp@gmail.com", "Manos que Hablan");        // destinatario 
    $mail->WordWrap = 50;     // set word wrap to 50 characters
    $mail->IsHTML(true);     // set email
    $mail->Subject = "Pago pendiente de aprobacion";
    $mail->Body    = "<h4>" . htmlspecialchars($_POST['nombre']) . " compró el e-book de Vocales L.S.A. pero su pago aún no ha sido aprobado por Mercadopago.<br>Cuando se apruebe, enviar este link al correo del comprador: http://manosquehablan.ar/pago_aprobado.php para que auto-gestione el envío del ebook y reciba la clase gratis de la Prof. Noelia.<br>Correo del comprador: " . filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL) . "</h4>";
    $mail->AltBody = htmlspecialchars($_POST['correo']) . " compró el e-book de Vocales L.S.A. pero su pago aún no ha sido aprobado por Mercadopago. Cuando se apruebe, enviar este link al correo del comprador: http://manosquehablan.ar/pago_aprobado.php para que auto-gestione el envío del ebook y reciba la clase gratis de la Prof. Noelia. Correo del comprador: " . filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $ok = true;
    $msg = "";
} else {
    $mail = null;
    $ok = false;
    $msg = "El código de pago es inválido.";
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Envío de mail de ayuda en curso...</h1>
            </div>
            <div class="col-md-8">
            <?php
                if($ok) {
                    if(!$mail->Send()) {
                        echo '<div class="alert alert-danger fade show" role="alert">
                                <h5 class="alert-heading">Algo salió mal...</h5>
                                <p>El mensaje no se ha podido enviar.<br>Detalle: ' . $mail->ErrorInfo . '</p>
                                <br>
                                <p><b>Por favor contacte con nosotros para solucionar el problema. Tenga a mano sus comprobantes de pago, se los solicitarán.</p>
                                <a class="btn btn-primary-lsa" href="index.php"> <- Volver al Inicio </a>
                            </div>';
                    } else {
                        echo '<div class="alert alert-success fade show" role="alert">
                                <h5 class="alert-heading">¡Mail enviado!</h5>
                                <a class="btn btn-primary-lsa" href="index.php"> <- Volver al Inicio </a>
                            </div>';
                        header("Location: http://manosquehablan.ar/index.php");
                        exit();
                    }
                } else {
                    echo '<div class="alert alert-danger fade show" role="alert">
                            <h5 class="alert-heading">Algo salió mal...</h5>
                            <p>Error al enviar el mensaje: ' . $msg .'<br></p>
                            <br>
                            <p><b>Por favor contacte con nosotros para solucionar el problema. Tenga a mano sus comprobantes de pago, se los solicitarán.</p>
                            <a class="btn btn-primary-lsa" href="index.php"> <- Volver al Inicio </a>
                        </div>';
                }
                ?>
        </div>
    </div>
</div>

<?php  include_once 'footer.php'; ?>