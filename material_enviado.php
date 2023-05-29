<?php 
$titulo = "¡Material enviado!";
include_once 'header.php';
include_once 'navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-4">
            <h1 class="text-instituto">¡El material fue enviado!</h1>
            <h5>Revise su correo electrónico para descargar el archivo adjunto.</h5>
            <hr>
        </div>
    </div>
</div>

<div class="container my-3">
    <div class="row">
        <div class="col-12 text-center" id="pago_aprobado">
            <h3 class="mb-4">¡Te damos la bienvenida!<br><small>Mirá el siguiente video:</small></h3>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <video width="100%" height="auto" controls class="mb-5">
                        <source src="./media/ventas/video_bienvenida.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/V6bmdzztl5U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>            
            <br>
            <a href="index.php" class="btn btn-primary-lsa btn-lg">Ir al Inicio</a>
            <hr>
            <p>Si tuvo algún problema o inconveniente con el ebook, contacte con nosotros a través de nuestros medios:</p>
            <div class="row justify-content-center">
                <div class="col-md-4 mt-3 py-5 text-center" id="redes sociales">
                    <div class="row">
                        <div class="col-md-4 my-3" id="logo instituto">
                            <a href="https://wa.me/542954313658/" target="_blank"><img src="./media/wsp-logo.png" alt="..." width="65"></a>
                        </div>
                        <div class="col-md-4 my-3" id="turismo y plataforma">
                            <a href="https://www.instagram.com/manosquehablan_lsa/" target="_blank"><img src="./media/insta-logo.png" alt="..." width="65"></a>
                        </div>
                        <div class="col-md-4 my-3" id="redes sociales">
                            <a href="https://www.facebook.com/Manos-que-hablan-Rostros-que-expresan-1622812994627671/" target="_blank"><img src="./media/face-logo.png" alt="..." width="65"></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>