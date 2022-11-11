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
    <title>Mi portafolio - Contacto</title>
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
        
    </header>
    <article>
        <h1>Contacto</h1>
    </article>  
    <footer>
    <p class="texto">Licenciatura en Sistemas Computacionales</p>
    </footer>  
</body>
</html>