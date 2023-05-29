<?php 
$titulo = "Clases de Verano";
include_once 'header.php';
include_once 'navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5 mb-3">
            <h1 class="text-instituto">Clases de Verano</h1>
        </div>
        <div class="col-md-12">
            <p class="fs-4">Acceso a clases con contraseña</p>
        </div>
    </div>
</div>

<header class="container my-3 pb-5">
    <div class="row">
        <div class="col-12 text-center">
            <div class="mb-4 rounded-3">
                <div class="container-fluid py-5">
                    <!-- COMIENZO DEL AÑO -->
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-md-6 p-3">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h3 class="card-title mb-5" style="white-space: nowrap">Clase N° 1</h3>
                                    <a href="clase_verano_1.php" class="btn btn-lg btn-primary-lsa">Acceder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-3">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h3 class="card-title mb-5" style="white-space: nowrap">Clase N° 2</h3>
                                    <a href="clase_verano_2.php" class="btn btn-lg btn-primary-lsa">Acceder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-3">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h3 class="card-title mb-5" style="white-space: nowrap">Clase N° 3</h3>
                                    <a href="clase_verano_3.php" class="btn btn-lg btn-primary-lsa">Acceder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-3">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h3 class="card-title mb-5" style="white-space: nowrap">Clase N° 4</h3>
                                    <a href="clase_verano_4.php" class="btn btn-lg btn-primary-lsa">Acceder</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">    
                </div>
            </div>
        </div>
    </div>
</header>
<?php include_once 'footer.php'; ?>