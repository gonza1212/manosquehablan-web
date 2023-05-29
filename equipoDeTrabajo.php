<?php 
$titulo = "Equipo de Trabajo";
include_once 'header.php';
include_once 'navbar.php';
?>
<header class="container my-5 pb-5">
    <div class="row">
        <div class="col-12 text-center">
            <div class="mb-4 rounded-3">
                <div class="container-fluid py-5">
                <h1 class="fw-bold text-center mb-5 text-instituto">Nuestro equipo de trabajo</h1>
                <div class="col-md-12">
                    <div class="card-group">
                        <div class="card p-4">
                            <img src="./media/noelia.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Noelia Campana</h5>
                                <p class="card-text">Profesora y asesora Sorda</p>
                                <p class="card-text"><small class="text-muted">Córdoba, Argentina</small></p>
                            </div>
                        </div>
                        <div class="card p-4">
                            <img src="./media/IMG-4555.JPG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Facundo Cortez</h5>
                                <p class="card-text">Intérprete e instructor en Lengua de Señas</p>
                                <p class="card-text"><small class="text-muted">La Pampa, Argentina</small></p>
                            </div>
                        </div>
                        <div class="card p-4">
                            <img src="./media/martin.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Martín D’Abate</h5>
                                <p class="card-text">Profesor Sordo</p>
                                <p class="card-text"><small class="text-muted">CABA, Argentina</small></p>
                            </div>
                        </div>
                    </div>    
                    <div class="card-group">
                        <div class="card p-4">
                            <img src="./media/ani.JPEG" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ana Hrytsyuk</h5>
                                <p class="card-text">Intérprete en Lengua de Señas. Intérprete de Ruso</p>
                                <p class="card-text"><small class="text-muted">La Pampa, Argentina</small></p>
                            </div>
                        </div>
                        <div class="card p-4">
                            <img src="./media/yazca.JPEG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Yazmin Silva</h5>
                                <p class="card-text">Intérprete e instructora en Lengua de Señas</p>
                                <p class="card-text"><small class="text-muted">La Pampa, Argentina</small></p>
                            </div>
                        </div>
                        <div class="card p-4">
                            <img src="./media/sonia1.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sonia Schneider</h5>
                                <p class="card-text">Directora</p>
                                <p class="card-text"><small class="text-muted">La Pampa, Argentina</small></p>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10 p-5">
                <h5 class="card-title fw-bolder mb-3 fs-3">Sobre nosotros</h5>
            </div>
            <div class="col-md-8 align-content-center ">
                <div class="card-body">                            
                    <p class="card-text fs-5">Como familia (Sonia, Facundo y Yazmin) en el año 2008 decidimos incursionar en la comunidad Sorda de Santa Rosa. A las pocas semanas pudimos corroborar que la población Sorda era más de la que imaginábamos y lamentablemente prescindían en muchos casos de alguien a quien contarle su diario vivir, el cual estaba inundado de barreras en educación, salud, ayuda social, comercial, judicial y tantos otros.</p>
                    <p class="card-text fs-5">De pronto tres personas (dos niños de 10 años y una madre de 35 años) estaban sorprendidos y a la vez con mucha demanda de parte de las personas Sordas y su familia. 
                        Es por esa razón que al terminar el secundario (tanto Facundo Cortez como Yazmín Silva) comenzamos a estudiar en el Centro de Formación 402 ubicado en Trenque Lauquen. 
                        No obstante, los contenidos nos parecieron muy escasos y por tal razón decidimos realizar los estudios en A.S.A.M. Pero como LSA es una lengua viva, que va evolucionando (por ej. términos o expresiones nuevas  como Facebook, Ni una Menos,  WhatsApp etc) Facundo y Yazmín cursaron en la UBA la “Diplomatura en Interpretación de Lengua de Señas - Español” en el año 2018.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 p-5">
                <div class="shadow-lg" >
                    <video  width="100%" controls autoplay muted>
                        <source src="media/5_datos_instituto.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</article>
<?php include_once 'footer.php'; ?>