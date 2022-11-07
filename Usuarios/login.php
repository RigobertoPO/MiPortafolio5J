<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio - ¿Quién soy?</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="Contenedor">
                <img src="../img/Escudo_unach.png" alt="Logo" class="Logo">
                <ul class="Texto-menu">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../quiensoy.php">¿Quién soy?</a></li>
                    <li><a href="../portafolio.php">Portafolio</a></li>
                    <li><a href="../blog.php">Blog</a></li>
                    <li><a href="../contacto.php">Contácto</a></li>
                </ul>
            </div>
        </nav>
        
    </header>
    <article>
    <section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../img/login.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="validarUsuario.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Portafolio 5J</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Acceso a usuarios</h5>

                  <div class="form-outline mb-4">
                    <input type="email" name="correo" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Correo</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input type="submit" class="btn btn-dark btn-lg btn-block" value="Entrar">
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes una cuenta? <a href="registro.php"
                      style="color: #393f81;">REGISTRARME</a></p>
                </form>

              </div>
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