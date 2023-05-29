<?php 
$titulo = "¡Pago Aprobado!";
include_once 'header.php';
include_once 'navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">¡Pago Aprobado!</h1>
            <br>
            <hr>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center" id="pago_aprobado">
            <br>
            <br>
            <h4>Por favor cargue su correo electrónico para recibir su producto:</h4>
            <br>
            <div class="row justify-content-center">
                <form class="col-md-8" action="send_ebook.php" method="post" id="form_send_mail">
                    <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo Electrónico..." required>
                    <br>
                    <input type="hidden" name="payment_id" id="payment_id" readonly class="form-control" value="null">
                    <br>
                    <button class="btn btn-primary-lsa" type="submit" id="enviar" name="enviar">Enviar</button>
                </form>
                <div class="col-md-8 mt-4" id="div_mail_sent" style="display:none">
                    <h3>Enviando material, por favor espere sin salir de esta página...</h3>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>

<script>
    function getPaymentId() {
        let url = window.location.href;
        if(url.indexOf("payment_id") > 0) {
            //document.getElementById("payment_id").value = url.substr(url.indexOf("payment_id"), url.indexOf("&status") - url.indexOf("payment_id"));
            document.getElementById("payment_id").value = url.substr(url.indexOf("payment_id"));
        } else {
            document.getElementById("payment_id").value = "null";
        }
    }
    getPaymentId();

    onsubmit = (event) => {
        document.getElementById("form_send_mail").setAttribute("style", "display:none");
        document.getElementById("div_mail_sent").setAttribute("style", "display:block");
        delay(2000);
    };
</script>
<?php include_once 'footer.php'; ?>