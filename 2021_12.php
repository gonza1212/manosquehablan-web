<?php 
$titulo = "2022 Septiembre";
include_once 'header.php';
include_once 'navbar.php';
include_once 'passwords.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Diciembre de 2021</h1>
        </div>
    </div>
</div>


<?php  
  if(isset($_POST['enviar'])) {
    if($_POST['password'] == $pass[0] || $_POST['password'] == $pass[1]) {
        echo '<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h3>Video Nivel 5</h3> 
            <video width="100%" height="auto" controls>
                <source src="./media/NIVEL 5 VIDEO.mp4" type="video/mp4">
            </video>
            <h4>Descripción: Examen Diciembre 2021</h4>
            <hr>
          </div>
        </div>
      </div>';
      } else {
        echo '<div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h1 class="text-danger my-4">Contraseña Incorrecta</h1>
                        <a href="indice_contenido.php" class="btn btn-secondary">Volver a Índice de Contenido</a>
                        <a href="2021_12.php" class="btn btn-primary-lsa">Reintentar</a>
                    </div>
                </div>
            </div>';
      }
    } else {
        echo '<div class="container">
                <div class="row justify-content-center">
                    <form class="col-md-6" action="2021_12.php" method="post">
                        <label for="password" class="form-label">Por favor ingrese la <strong>contraseña</strong> para acceder al contenido premium del mes:</label>
                        <input type="password" class="form-control mb-3" id="password" name="password" placeholder="********">
                        <input type="submit" value="Enviar" class="btn btn-primary-lsa btn-lg mb-5" name="enviar">
                    </form>
                </div>
            </div>';
    }
  ?>
<?php include_once 'footer.php'; ?>