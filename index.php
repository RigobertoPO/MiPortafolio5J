<?php
  session_start();
  if(isset($_SESSION['nombreUsuario'])){
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $tipoSesion=$_SESSION['tipoUsuario'];
  }
  else{
    $usuarioSesion='';
    $tipoSesion=0;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio - Rigoberto Pérez Ovando</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="Contenedor">
                <img src="img/Escudo_unach.png" alt="Logo" class="Logo">
                <ul class="Texto-menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="quiensoy.php">¿Quién soy?</a></li>
                    <li><a href="portafolio.php">Portafolio</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contacto.php">Contácto</a></li>
                    <li>
                    <?php             
                        if($tipoSesion==1){
                            
                            echo '<a href="proyectos.php">Proyectos</a>';
                        }
                                        
                    ?>
                    </li>
                    <li>
                      <?php
                      if($usuarioSesion=='')
                      {
                          echo '<a href="Usuarios/login.php">Iniciar Sesión</a>';
                      }
                      else{
                        echo '<label>'.$usuarioSesion.'</label>';
                        echo '<a href="Usuarios/logout.php">Cerrar Sesión</a>';
                      }   
                      ?>    
                    </li>
                </ul>
            </div>
        </nav>
        <div id="MostrarSlider">
            <div class="Slider-DatosPersonales">
                <h1>Rigoberto Pérez Ovando</h1>
                <p class="Perfil">Docente de la Universidad Autónoma de Chiapas</p>
                <a href="Usuarios/login.php" class="btn btn-primary">Suscribirme</a>
            </div>
        </div>
    </header>
    <article>
       <section id="Portafolio">
        <div class="Contenedor">
            <div class="portafolio-nav">
                <ul>
                    <li><a href="">Web</a></li>
                    <li><a href="">Móvil</a></li>
                    <li><a href="">Escritorio</a></li>
                    <li><a href="">IoT</a></li>
                </ul>
            </div>
        </div>
        <div>
            <div class="container text-center">
                <div class="row">
                  <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/cursos.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Cursos</h5>
                          <p class="card-text">Compartir conocimientos sobre nuevas tecnologias.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">WPF</li>
                          <li class="list-group-item">POO con C#</li>
                          <li class="list-group-item">PHP</li>
                          <li class="list-group-item">SQL Server</li>
                        </ul>
                        <div class="card-body">
                          <a href="https://www.youtube.com/channel/UCU3BI2nIAPE7GAhbchnPcUw" class="card-link">Youtube</a>
                          <a href="#" class="card-link">On line</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/docencia.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Docencia</h5>
                          <p class="card-text">Formar las nuevas generaciones de LSC.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Tecnologías emergentes</li>
                          <li class="list-group-item">Casos Prácticos</li>
                          <li class="list-group-item">Vinculación</li>
                        </ul>
                        <div class="card-body">
                          <a href="https://www.youtube.com/channel/UCU3BI2nIAPE7GAhbchnPcUw" class="card-link">Youtube</a>
                          <a href="#" class="card-link">On line</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">An item</li>
                          <li class="list-group-item">A second item</li>
                          <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                  </div>           
                </div>
              </div>
 
        </div>
       </section> 
    </article>  
<footer>
<p class="texto">Licenciatura en Sistemas Computacionales</p>
</footer>  
</body>
</html>