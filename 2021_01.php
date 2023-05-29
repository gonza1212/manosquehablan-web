<?php 
$titulo = "2022 Septiembre";
include_once 'header.php';
include_once 'navbar.php';
include_once 'passwords.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Enero de 2021</h1>
        </div>
    </div>
</div>


<?php  
  if(isset($_POST['enviar'])) {
    if($_POST['password'] == $pass[0] || $_POST['password'] == $pass[1]) {
        echo '<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h3>Título de Video</h3> 
            <video width="100%" height="auto" controls>
                <source src="./media/por que aprender LSA.mov" type="video/mp4">
            </video>
            <p>Descripción de video: Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore quo nesciunt, culpa repellat quis in accusantium hic eos repellendus quos cupiditate fuga ducimus accusamus placeat quia? Natus, itaque unde.</p>
            <hr>
            <p>Puede haber imágenes</p>
            <img src="./media/IMG-4555.JPG" alt="img" width="50%">
            <img src="./media/IMG-4555.JPG" alt="img" width="50%">
            <hr>
            <p>Puede haber otros videos</p>
            <video width="80%" height="auto" autoplay muted loop>
                <source src="./media/NIVEL 1 Primera Clase. Prof.Carlos new new.MP4" type="video/mp4">
            </video>
            <h4>Y cualquier otro tipo de contenido</h4>
          </div>
        </div>
      </div>';
      } else {
        echo '<div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h1 class="text-danger my-4">Contraseña Incorrecta</h1>
                        <a href="indice_contenido.php" class="btn btn-secondary">Volver a Índice de Contenido</a>
                        <a href="2021_01.php" class="btn btn-primary-lsa">Reintentar</a>
                    </div>
                </div>
            </div>';
      }
    } else {
        echo '<div class="container">
                <div class="row justify-content-center">
                    <form class="col-md-6" action="2021_01.php" method="post">
                        <label for="password" class="form-label">Por favor ingrese la <strong>contraseña</strong> para acceder al contenido premium del mes:</label>
                        <input type="password" class="form-control mb-3" id="password" name="password" placeholder="********">
                        <input type="submit" value="Enviar" class="btn btn-primary-lsa btn-lg mb-5" name="enviar">
                    </form>
                </div>
            </div>';
    }
  ?>
<?php include_once 'footer.php'; ?>