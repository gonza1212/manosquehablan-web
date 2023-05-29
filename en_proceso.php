<?php 
$titulo = "Pago en proceso...";
include_once 'header.php';
include_once 'navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Pago en proceso...</h1>
            <hr>
        </div>
    </div>
</div>

<div class="container my-4">
    <div class="row">
        <div class="col-12 text-center" id="pago_en_proceso">
            <h4>Será redireccionado en pocos segundos, por favor espere.</h4>
            <br>
            <br>
            <h5>Si no es redireccionado en 10 segundos, por favor cargue sus datos para que los administradores lo asistan en cuanto su pago se apruebe:</h5>
            <br>
            <div class="row justify-content-center">
                <form class="col-md-8" action="send_mail_help.php" method="post" id="form_send_mail">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                    <br>
                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo Electrónico..." required>
                    <br>
                    <button class="btn btn-primary-lsa" type="submit" id="enviar" name="enviar">Enviar</button>
                </form>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>