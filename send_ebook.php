<?php 
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
    $mail->AddAddress(filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL), "Manos que Hablan");        // destinatario 
    $mail->addBCC('manosquehablansrlp@gmail.com'); // con copia oculta
    $mail->WordWrap = 50;     // set word wrap to 50 characters
    $mail->IsHTML(true);     // set email
    $mail->Subject = "Material comprado en la Web Pago";
    if(isset($_POST['payment_id'])) {
        $mail->Body    = "<h2>¡Gracias por comprar en nuestra web!</h2><br> <h4>Descargá en el contenido en el <b>archivo adjunto</b>.</h4><br> Por cualquier problema o consulta, <b>no respondas este mail</b>, comunicate con nosotros por nuestros canales oficiales.<br>Datos de Pago: " . $_POST['payment_id'];
        $mail->AltBody = "¡Gracias por comprar en nuestra web! Descargá en el contenido en el archivo adjunto. Por cualquier problema o consulta, no respondas este mail, comunicate con nosotros por nuestros canales oficiales.<br>Datos de Pago: " . $_POST['payment_id'];
    } else {
        $mail->Body    = "<h2>¡Gracias por comprar en nuestra web!</h2><br> <h4>Descargá en el contenido en el <b>archivo adjunto</b>.</h4><br> Por cualquier problema o consulta, <b>no respondas este mail</b>, comunicate con nosotros por nuestros canales oficiales.<br>Datos de Pago: " . var_dump($_POST['payment_id']);
        $mail->AltBody = "¡Gracias por comprar en nuestra web! Descargá en el contenido en el archivo adjunto. Por cualquier problema o consulta, no respondas este mail, comunicate con nosotros por nuestros canales oficiales.<br>Datos de Pago: " . var_dump($_POST['payment_id']);
    }
    $ok = true;
    $msg = "";
} else {
    $mail = null;
    $ok = false;
    $msg = "El código de pago es inválido.";
}

if ($mail && !$mail->addAttachment("./media/material/wHwPR2nRufJ8SxfnUASCktRF.pdf", "ebook_vocalesLSA.pdf")) {
    $msg .= 'Fallo al adjuntar el archivo ';
    $ok = false;
}
if($ok) {
    if(!$mail->Send()) {
        $titulo = "Envío de material en curso...";
        include_once 'header.php';
        include_once 'navbar.php';
        echo '<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center my-5">
                <h1 class="text-instituto">Envío de material en curso...</h1>
                </div>
                <div class="col-md-8">
                <div class="alert alert-danger fade show" role="alert">
                <h5 class="alert-heading">Algo salió mal...</h5>
                <p>El mensaje no se ha podido enviar.<br>Detalle: ' . $mail->ErrorInfo . '</p>
                <br>
                <p><b>Por favor contacte con nosotros para solucionar el problema. Tenga a mano sus comprobantes de pago, se los solicitarán.</p>
                <a class="btn btn-primary-lsa" href="index.php"> <- Volver al Inicio </a>
            </div>
            </div>
            </div>
        </div>';
        include_once 'footer.php';
    } else {
        header("Location: http://manosquehablan.ar/material_enviado.php");
        exit();
    }
} else {
    $titulo = "Envío de material en curso...";
        include_once 'header.php';
        include_once 'navbar.php';
    echo '<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Envío de material en curso...</h1>
            </div>
            <div class="col-md-8">                            
            <div class="alert alert-danger fade show" role="alert">
            <h5 class="alert-heading">Algo salió mal...</h5>
            <p>Error al enviar el mensaje: ' . $msg .'<br></p>
            <br>
            <p><b>Por favor contacte con nosotros para solucionar el problema. Tenga a mano sus comprobantes de pago, se los solicitarán.</p>
            <a class="btn btn-primary-lsa" href="index.php"> <- Volver al Inicio </a>
        </div>
        </div>
        </div>
    </div>';
    include_once 'footer.php';
}
?>