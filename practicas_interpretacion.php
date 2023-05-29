<?php 
$titulo = "Prácticas de Interpretación";
include_once 'header.php';
include_once 'navbar.php';
include_once 'passwords.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Prácticas de Interpretación</h1>
        </div>
    </div>
</div>


<?php  
  if(isset($_POST['enviar'])) {
    if($_POST['password'] == $pass5[0]) {
        echo '<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h1>Prácticas de Interpretación</h1>
            <br>
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100076070797181%2Fvideos%2F856222791577110%2F&show_text=false&width=560&t=0" width="100%" height="480" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            <br>
          </div>
        </div>
      </div>';
      } else {
        echo '<div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h1 class="text-danger my-4">Contraseña Incorrecta</h1>
                        <a href="indice_contenido.php" class="btn btn-secondary">Volver a Índice de Contenido</a>
                        <a href="practicas_interpretacion.php" class="btn btn-primary-lsa">Reintentar</a>
                    </div>
                </div>
            </div>';
      }
    } else {
        echo '<div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-8 text-center mb-5">
                    <br>
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100076070797181%2Fvideos%2F856222791577110%2F&show_text=false&width=560&t=0" width="100%" height="480" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    <br>
                    <p class="fs-4 mt-4">Se llevó a cabo el taller sobre cultivo de aromáticas: “Extracción y destilación”
                    dictado en conjunto entre las Facultades de Ciencias Exactas y Naturales - UNLPam, Facultad de Agronomía- UNLPam, INTA PROHUERTA y la Dirección General de Agricultura Familiar, Ministerio de Desarrollo Social, GOBIERNO DE LA PAMPA.<br>Diplomatura dada por primera vez a nivel nacional SÓLO para la comunidad Sorda y nuestro equipo contratado por la universidad de La Pampa y el INTA PROHUERTA.</p>
                </div>
                </div>
            </div>';
    }
  ?>
<?php include_once 'footer.php'; ?>