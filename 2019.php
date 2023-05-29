<?php 
$titulo = "2022 Septiembre";
include_once 'header.php';
include_once 'navbar.php';
include_once 'passwords.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Año 2019</h1>
        </div>
    </div>
</div>


<?php  
  if(isset($_POST['enviar'])) {
    if($_POST['password'] == $pass[0] || $_POST['password'] == $pass[1]) {
        echo '<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h3>Video</h3> 
            <video width="100%" height="auto" controls>
                <source src="./media/VID_20191106_121805821.mp4" type="video/mp4">
            </video>
            <h5 class="mt-4">"Un día en Plaza Italia, a las cuatro de la tarde, un domingo en invierno, encontré ocho pibes en un colchón. Eso se llama \'ranchada\'. Tenían entre 8 y 14 años, uno estaba \'picándose\', otro estaba inhalando una bolsa con pegamento, otro fumaba paco, unos tomando merca y otro fumando porro. Yo estaba curtido en eso. Había hecho \'Ser Urbano\' y me senté ante unos pibes que la sociedad los estaba esquivando. Me senté al lado del que estaba con la bolsa, me contó quye se llama Ale, que tenía 11 años y en un momento le digo \'¿Por qué no soltás la bolsa, Ale?\'. \'¿Y qué agarro?\', me dijo. Fue una piña para mi mentalidad de clase media que desconoce", reveló.</h5>
            <a href="#" class="btn btn-primary-lsa mt-3 mb-5">Conocer resto de la historia [Link a Instagram]</a>
          </div>
        </div>
      </div>';
      } else {
        echo '<div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h1 class="text-danger my-4">Contraseña Incorrecta</h1>
                        <a href="indice_contenido.php" class="btn btn-secondary">Volver a Índice de Contenido</a>
                        <a href="2019.php" class="btn btn-primary-lsa">Reintentar</a>
                    </div>
                </div>
            </div>';
      }
    } else {
        echo '<div class="container">
                <div class="row justify-content-center">
                    <form class="col-md-6" action="2019.php" method="post">
                        <label for="password" class="form-label">Por favor ingrese la <strong>contraseña</strong> para acceder al contenido premium de todo el año:</label>
                        <input type="password" class="form-control mb-3" id="password" name="password" placeholder="********">
                        <input type="submit" value="Enviar" class="btn btn-primary-lsa btn-lg mb-5" name="enviar">
                    </form>
                </div>
            </div>';
    }
  ?>
<?php include_once 'footer.php'; ?>