<?php 
$titulo = "Educación";
include_once 'header.php';
include_once 'navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Educación</h1>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <div class="mb-4 rounded-3">
                <div class="container-fluid py-5">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-6 p-3">
                                <div class="card p-2">
                                    <div class="card-body">
                                        <h3 class="card-title mb-5">L.S.A. para Docentes</h3>
                                        <a href="lsa_docentes.php" class="btn btn-lg btn-primary-lsa">Acceder</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-3">
                                <div class="card p-2">
                                    <div class="card-body">
                                        <h3 class="card-title mb-5">Juegos en Lengua de Señas Argentina</h3>
                                        <a href="juegos_lsa.php" class="btn btn-lg btn-primary-lsa disabled">Acceder</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">    
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>