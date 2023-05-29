<?php 
$titulo = "2022 Septiembre";
include_once 'header.php';
include_once 'navbar.php';
include_once 'passwords.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center my-5">
            <h1 class="text-instituto">Año 2020</h1>
        </div>
    </div>
</div>


<?php  
  if(isset($_POST['enviar'])) {
    if($_POST['password'] == $pass[0] || $_POST['password'] == $pass[1]) {
        echo '<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h1>Encuentro sobre Discapacidad</h1>
            <h2>Septiembre</h2>
            <br>
            <h2>Seminario 1</h2>
            <h5>Apertura Inaugural del Encuentro Sobre Discapacidad, Derechos y Accesibilidad en Educación Superior</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario1/00.mp4" type="video/mp4">
            </video>
            <h5>Primer Seminario - Interrogantes que deconstruyen discursos y miradas - Bustamante Sendra Claudia</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario1/01.mp4" type="video/mp4">
            </video>
            <h5>Primer Seminario - Modelos en discapacidad, miradas antagónicas en la construcción interseccional del sujeto</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario1/02.mp4" type="video/mp4">
            </video>
            <h5>Primer Seminario - Ponencia Provocaciones de la perspectiva decolonial a la formación docente</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario1/03.mp4" type="video/mp4">
            </video>
            <h5>Primer Seminario -La inclusión, parte fundamental del bienestar integral -  Jorge Jacobo Ayala Guerrero</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario1/04.mp4" type="video/mp4">
            </video>
            <hr>
            <h2>Seminario 2</h2>
            <h4>Primer Encuentro</h4>
            <h5>Apertura</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/primero/00.mp4" type="video/mp4">
            </video>
            <h5>Construyendo un camino hacia la inclusión educativa. Una mirada en perspectiva</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/primero/01.mp4" type="video/mp4">
            </video>
            <h5>Documento de ampliación, profundización y operativización del programa integral de accesibilidad</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/primero/02.mp4" type="video/mp4">
            </video>
            <h5>La educación superior desde la perspectiva de los derechos humanos.</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/primero/03.mp4" type="video/mp4">
            </video>
            <h5>Ley de educación superior y su modificación Ley 25.573 y la perspectiva en discapacidad Logros y desafío</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/primero/04.mp4" type="video/mp4">
            </video>
            <h5>Repensar las prácticas en la universidad, como espacio diverso ante la diversidad estudiantil</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/primero/05.mp4" type="video/mp4">
            </video>
            <hr>
            <h4>Segundo Encuentro</h4>
            <h5>Apertura</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/00.mp4" type="video/mp4">
            </video>
            <h5>Cómo la población con discapacidad se constituye en sujeto político</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/01.mp4" type="video/mp4">
            </video>
            <h5>Discapacidad La Universidad y Salida Laboral.</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/02.mp4" type="video/mp4">
            </video>
            <h5>Diseño de políticas públicas en educación superior para la accesibilidad, basadas en modelos de inter</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/03.mp4" type="video/mp4">
            </video>
            <h5>El marco normativo de accesibilidad académica de la UNC</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/04.mp4" type="video/mp4">
            </video>
            <h5>Estudiantes con discapacidad en el nivel superior aportes y relatos</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/05.mp4" type="video/mp4">
            </video>
            <h5>Política universitaria de accesibilidad. Avances y desafíos de la universidad pública Argentina</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/06.mp4" type="video/mp4">
            </video>
            <h5>Transversalidad e interseccionalidad en las políticas universitarias</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/07.mp4" type="video/mp4">
            </video>
            <h5>Experiencia en diseño y gestión de un programa de acceso y acompañamiento para EcD en contexto universitario</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario2/segundo/08.mp4" type="video/mp4">
            </video>
            <hr>
            <h2>Octubre</h2>
            <br>
            <h2>Seminario 3</h2>
            <h4>Primer Encuentro</h4>
            <h5>Estrategias, apoyos y recursos para la Accesibilidad</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/primero/00.mp4" type="video/mp4">
            </video>
            <h5>Experiencias de accesibilidad académica en la UNLP, dilemas y controversias</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/primero/01.mp4" type="video/mp4">
            </video>
            <h5>Tiflotecnología aplicada a la producción de material académico accesible.</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/primero/02.mp4" type="video/mp4">
            </video>
            <h4>Segundo Encuentro</h4>
            <h5>Accesibilidad académica en la Universidad del Comahue tránsitos y nuevos recorridos</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/segundo/00.mp4" type="video/mp4">
            </video>
            <h5>La accesibilidad en la universidad, un desafío para la práctica docente</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/segundo/01.mp4" type="video/mp4">
            </video>
            <h5>Producir y democratizar accesibilidad. Barreras que frecuentemente hallan las personas ciegas</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/segundo/02.mp4" type="video/mp4">
            </video>
            <h5>Red Interuniversitaria Latinoamericana y del Caribe sobre Discapacidad y DdHh. Perspectivas y proyecciones</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/segundo/03.mp4" type="video/mp4">
            </video>
            <h5>Reflexiones sobre el acompañamiento en la accesibilidad a partir de la virtualidad</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/segundo/04.mp4" type="video/mp4">
            </video>
            <h5>Una historia de vida de una persona con discapacidad visual en la Universidad del Valle, Colombia</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/segundo/05.mp4" type="video/mp4">
            </video>
            <h4>Tercer Encuentro</h4>
            <h5>Des- categorizaciones, desde el territorio</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/tercero/00.mp4" type="video/mp4">
            </video>
            <h5>Desafíos de la inclusión de estudiantes con condición del espectro del autismo en Universidades chilenas</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/tercero/01.mp4" type="video/mp4">
            </video>
            <h5>Dispositivos pedagógicos de acompañamiento en Educación Superior</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/tercero/02.mp4" type="video/mp4">
            </video>
            <h4>Cuarto Encuentro</h4>
            <h5>Accesibilidad universitaria De los dichos a los hechos. La experiencia de un estudiante</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/cuarto/00.mp4" type="video/mp4">
            </video>
            <h5>Acompañamiento a estudiantes universitarios con condiciones del espectro autista Apoyos y desafíos</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/cuarto/01.mp4" type="video/mp4">
            </video>
            <h5>AUTISMO, desafíos y necesidades en la vida adulta</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/cuarto/02.mp4" type="video/mp4">
            </video>
            <h5>Bibliotecas accesibles para personas con Condición del Espectro Autista. Un estudio de caso en la Universidad</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/cuarto/03.mp4" type="video/mp4">
            </video>
            <h5>Impacto de las barreras educativas en la persona con TEA y su entorno familiar</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/cuarto/04.mp4" type="video/mp4">
            </video>
            <h5>LA (IN-EX)CLUSÓN EDUCATIVA EN NIVEL SUPERIOR de la Eugenesia a la Eutanasia del Estudiante Superior</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/cuarto/05.mp4" type="video/mp4">
            </video>
            <h4>Quinto Encuentro</h4>
            <h5>Comunidad Sorda, formación de intérpretes y educación superior.</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/quinto/00.mp4" type="video/mp4">
            </video>
            <h5>El desafío de la alfabetización académica pensada desde el campo del español como lengua segunda</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/quinto/01.mp4" type="video/mp4">
            </video>
            <h5>El tercer hito educativo</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/quinto/02.mp4" type="video/mp4">
            </video>
            <h5>La comunidad sorda Uruguaya en la universidad</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/quinto/03.mp4" type="video/mp4">
            </video>
            <h5>La enseñanza re-significada” por la virtualidad y la accesibilidad</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/quinto/04.mp4" type="video/mp4">
            </video>
            <h4>Sexto Encuentro</h4>
            <h5>Apertura</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/sexto/00.mp4" type="video/mp4">
            </video>
            <h5>Accesibilidad comunicacional en el aula desafíos a la hora de incorporar lengua de señas</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/sexto/01.mp4" type="video/mp4">
            </video>
            <h5>Aspectos metodológicos para la accesibilidad académica de las personas Sordas. Una experiencia inclusiva</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/sexto/02.mp4" type="video/mp4">
            </video>
            <h5>Aulas visuales y accesibles como  derecho. Un camino recorrido en busca de aulas más inclusivas</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/sexto/03.mp4" type="video/mp4">
            </video>
            <h5>Desterrando estereotipos en relación a las personas con discapacidad</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/sexto/04.mp4" type="video/mp4">
            </video>
            <h5>Diseño de dispositivos de apoyos</h5>
            <video width="100%" height="auto" controls class="mb-5">
                <source src="./media/EncuentroSobreDiscapacidad/Seminario3/sexto/05.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>';
      } else {
        echo '<div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h1 class="text-danger my-4">Contraseña Incorrecta</h1>
                        <a href="indice_contenido.php" class="btn btn-secondary">Volver a Índice de Contenido</a>
                        <a href="2020.php" class="btn btn-primary-lsa">Reintentar</a>
                    </div>
                </div>
            </div>';
      }
    } else {
        echo '<div class="container">
                <div class="row justify-content-center">
                    <form class="col-md-6" action="2020.php" method="post">
                        <label for="password" class="form-label">Por favor ingrese la <strong>contraseña</strong> para acceder al contenido premium de todo el año:</label>
                        <input type="password" class="form-control mb-3" id="password" name="password" placeholder="********">
                        <input type="submit" value="Enviar" class="btn btn-primary-lsa btn-lg mb-5" name="enviar">
                    </form>
                </div>
            </div>';
    }
  ?>
<?php include_once 'footer.php'; ?>