<?php 
$titulo = "Turismo LSA";
include_once 'header.php';
include_once 'navbar.php';
?>

<header class="container mt-5">
    <div class="row">
        <div class="col-md-3 offset-md-1 my-5 text-center">
            <img src="./public/media/images/TurismoLSA.png" alt="lengua de señas" style="width: 80%; height: auto;">
        </div>
        <div class="col-md-6">
            <div class="p-5 mb-4 rounded-3 my-5">
                <h1 class="fw-bold fs-1 mb-3">Turismo LSA</h1>
                <p class="fs-4">Proyecto de Turismo Accesible. ¡Conocelo!</p>
            </div>
        </div>
    </div>
</header>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center m-0 p-0">
            <h1>¡Preparate para un viaje increíble!</h1>
            <video muted controls style="height: 90vh; width:100%;" class="mt-4">
                <source src="./public/media/video/turismo_trailer.mp4" type="video/mp4">
            </video> 
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center m-0 p-0">
            <h3 class="my-4">Descripción del proyecto Turismo LSA</h3>
            <video muted controls style="height: 90vh; width:100%;">
                <source src="./public/media/video/turismo.mp4" type="video/mp4">
            </video> 
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>