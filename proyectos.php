<?php
  session_start();
  if(isset($_SESSION['nombreUsuario'])){
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $tipoSesion=$_SESSION['tipoUsuario'];
    $idUsuario=$_SESSION['idUsuario'];
  }
  else{
    $usuarioSesion='';
    $tipoSesion=0;
    $idUsuario=0;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio - ¿Quién soy?</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script>
      function CargarFoto(id){
        window.location.href='Proyectos/CargarFoto.php?id='+id;
      }
      function EditarProyecto(id){
        if(confirm('¿Deseas modificar?'))
        {
          window.location.href='Proyectos/EditarProyecto.php?id='+id;
        }
      }
      function EliminarProyecto(id){
        window.location.href='Proyectos/EliminarProyecto.php?id='+id;
      }
    </script>
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
        <h1>Proyectos</h1>
        <div class="container">
            <div class="d-flex flex-wrap">
              <?php
                  require_once 'Models/Proyecto.php';
                  $proyecto=new Proyecto();
                  $resultado=$proyecto->ObtenerProyectos($idUsuario);
                  if(count($resultado)>0){
                    foreach ($resultado as $registro ) {
                      ?>
                        <div class="card" style="width: 18rem;">
                          <img src="
                            <?php
                                if(strlen($registro['Imagen'])>0)
                                {
                                  echo $registro['Imagen'];
                                }
                                else{
                                  echo "Img/Escudo_unach.png";
                                }
                            ?>
                          " 
                          class="card-img-top" style="width:160px;height:160px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $registro['Nombre']; ?></h5>
                            <p class="card-text"><?php echo $registro['Descripcion']; ?></p>
                            <a href="javascript:CargarFoto('<?php echo $registro["Id"]; ?>')" class="btn btn-primary">Imagen</a>
                            <a href="javascript:EditarProyecto('<?php echo $registro["Id"]; ?>')" class="btn btn-primary">Editar</a>
                            <a href="javascript:EliminarProyecto('<?php echo $registro["Id"]; ?>')" class="btn btn-primary">Eliminar</a>
                          </div>
                        </div>
                      <?php
                    }
                  }
              ?>
            </div>
        </div>
    </article>  
    <footer>
    <p class="texto">Licenciatura en Sistemas Computacionales</p>
    </footer>  
</body>
</html>