<?php 
$titulo = "Clases de Verano";
include_once 'header.php';
include_once 'navbar.php';
include_once 'passwords.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Clases de Verano</h1>
        </div>
    </div>
</div>


<?php  
  if(isset($_POST['enviar'])) {
    if($_POST['password'] == $pass1[0]) {
        echo '<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h3>Clase N° 1</h3> 
            <br>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/interpretaciones/verano/clase_verano_1.mp4" type="video/mp4">
            </video>
            <br>
          </div>
        </div>
      </div>';
      } else {
        echo '<div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h1 class="text-danger my-4">Contraseña Incorrecta</h1>
                        <a href="clases_verano.php" class="btn btn-secondary">Volver a Índice de Clases</a>
                        <a href="clase_verano_1.php" class="btn btn-primary-lsa">Reintentar</a>
                    </div>
                </div>
            </div>';
      }
    } else {
        echo '<div class="container">
                <div class="row justify-content-center">
                    <form class="col-md-6" action="clase_verano_1.php" method="post">
                        <label for="password" class="form-label">Por favor ingrese la <strong>contraseña</strong> para acceder a la clase:</label>
                        <input type="password" class="form-control mb-3" id="password" name="password" placeholder="********">
                        <input type="submit" value="Enviar" class="btn btn-primary-lsa btn-lg mb-5" name="enviar">
                    </form>
                </div>
            </div>';
    }
  ?>
<?php include_once 'footer.php'; ?>