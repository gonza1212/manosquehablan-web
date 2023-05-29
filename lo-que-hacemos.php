<?php 
$titulo = "Lo que Hacemos";
include_once 'header.php';
include_once 'navbar.php';
?>

<header class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="p-5 mb-4 rounded-3 my-5">
                <h1 class="fw-bold fs-1 mb-3 text-instituto">Manos que Hablan Rostros que Expresan</h1>
                <p class="fs-4">Conocé lo que hacemos</p>
            </div>
        </div>
    </div>
</header>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5>Existen cuatro actividades, las mismas tienen en común la implementación de accesibilidad para la comunidad Sorda en los siguientes ámbitos:</h5>
            
            <br>
            
            <br>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center my-4">
            <img src="./media/LOGO.PNG" alt="instituto" width="75%">
        </div>
        <div class="col-md-8">
            <h3 class="text-instituto mt-5">Educativo:</h3>
            <ul>
                <li>Formación de intérprete de lengua de señas.</li>
                <li>Venta de material educativo bilingüe (lengua de Señas (LSA) -Español.</li>
                <li>Juegos didácticos.</li>
                <li>Educación bilingüe personalizada a niños Sordos (apoyo escolar).</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center my-4">
            <img src="./media/interprete.png" alt="instituto" width="60%">
        </div>
        <div class="col-md-8">
            <h3 class="text-instituto mt-5">SERVICIO DE INTÉRPRETE EN LENGUA DE SEÑAS ARGENTINA:</h3>
            <ul>
                <li>Servicio intérprete-YA (por videollamada de inmediato y simultáneo).</li>
                <li>Servicio de intérprete de LSA con turnos anticipados.</li>
            </ul>
            <a class="btn btn-primary-plataforma btn-lg my-4 " href="https://interprete-ya.com.ar" target="_blank">Saber Más</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center my-4">
            <img src="./media/TurismoLSA.png" alt="instituto" width="60%">
        </div>
        <div class="col-md-8">
            <h3 class="text-instituto mt-5">TURISMO LSA:</h3>
            <p class="mt-3">Brindamos información a la comunidad Sorda de lugares nacionales e internacionales (información actualizada a fin de que la comunidad Sorda pueda organizar con antelación su viaje).</p>
            <a class="btn btn-primary-turismo btn-lg my-4" href="turismo.php">Conocer</a>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>