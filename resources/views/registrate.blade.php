<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>


    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/vinyl.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/css/theme.css" rel="stylesheet" />

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand d-inline-flex" href="/"><img class="d-inline-block" src="assets/img/gallery/vinyl.png" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">Music Vinyls</span></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page"
              href="/promos">Descuentos</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" href="/vinyls">Vinilos</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page"
              href="/newArrivals">¡Lo Nuevo!</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" href="/collection">Colección</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" href="/blog">Blog</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" onclick="toAPI()">Spotify Playlists</a></li>
        </ul>
        <form class="d-flex"><a class="text-1000" href="#!">
          <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg></a><a class="text-1000" href="#!">
            <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg></a><a class="text-1000" href="#!">
          <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="21" r="1"></circle>
            <circle cx="20" cy="21" r="1"></circle>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
          </svg></a>
          </form>
      </div>
    </div>
  </nav>
  <section class="py-11 bg-light-gradient border-bottom border-white border-5">
    <div class="bg-holder overlay overlay-light" style="background-image:url(assets/img/gallery/bglogin.jpg);background-size:cover;">
    </div>
    <!--/.bg-holder-->
    
    <section>
      <div class="container">
        <form id="form_registro" action="" class="needs-validation" novalidate>
          <div class="row h-100 g-0">
              <div class="col-md-6">
                <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                  <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Crea tu cuenta</h1>
                  <!--NOMBRE-->
                  <div class="form-group">
                    <label class="mb-5 fs-1" for="nombre">Nombre
                        <input type="text" id="nombre" class="form-control" placeholder="Ingrese su nombre" required>
                        <div class="invalid-feedback">
                          Ingresa un nombre válido
                        </div>
                    </label>
                  </div>
                  <!--APELLIDO-->
                  <div class="form-group">
                    <label class="mb-5 fs-1" for="apellido">Apellido
                      <input type="text" id="apellido" class="form-control" placeholder="Ingrese su apellido" required>
                      <div class="invalid-feedback">
                        Ingresa un apellido válido
                      </div>
                    </label>
                  </div>
                  <!--USUARIO-->
                  <div class="form-group">
                    <label class="mb-5 fs-1" for="apellido">Usuario
                      <input type="text" id="usuario" class="form-control" minlength="6" placeholder="Ingrese su usuario" required>
                      <div class="invalid-feedback">
                        Ingresa un usuario válido
                      </div>
                    </label>
                  </div>
                  <!--CORREO-->
                  <div class="form-group">
                    <label class="mb-5 fs-1" for="correo">Correo electrónico
                      <input type="email" id="email" class="form-control" placeholder="Ingrese su correo" required>
                      <div class="invalid-feedback">
                        Ingresa un correo válido
                      </div>
                    </label>
                  </div>
                  <!--CELULAR-->
                  <div class="form-group">
                    <label class="mb-5 fs-1" for="celular">Celular
                      <input type="tel" id="celular" minlength="10" maxlength="10" class="form-control" placeholder="Ingrese su celular" required>
                      <div class="invalid-feedback">
                        Ingresa un celular válido
                      </div>
                    </label>
                  </div>
                  <!--GÉNERO MUSICAL-->
                  <div class="form-group">
                    <label class="mb-5 fs-1" for="genero">Género Musical Favorito
                      <select class="form-control" id="genero" required>
                        <option value="">Seleccione uno</option>
                        <option value="pop">Pop</option>
                        <option value="rock">Rock</option>
                        <option value="country">Country</option>
                        <option value="folk">Folk</option>
                        <option value="clasica">Clásica</option>
                        <option value="jazz">Jazz</option>
                        <option value="metal">Metal</option>
                        <option value="r&b">R&B</option>
                        <option value="hiphop">Hip hop</option>
                        <option value="alternativo">Alternativo</option>
                        <option value="reggaeton">Reggaeton</option>
                      </select>
                      <div class="invalid-feedback">
                        Elige una de las opciones
                      </div>
                    </label>
                  </div>
                  <!--CONTRASEÑA-->
                  <div class="form-group">
                    <label class="mb-5 fs-1" for="clave">Contraseña
                      <input type="password" id="clave1" class="form-control" placeholder="Ingrese su contraseña" required>
                      <div class="invalid-feedback">
                        Ingresa una contraseña válida
                      </div>
                    </label>
                  </div>
                  <!--VALIDAR CONTRASEÑA-->
                  <div class="form-group">
                    <label class="mb-5 fs-1" for="clave">Validar Contraseña
                      <input type="password" id="clave2" class="form-control" placeholder="Valide su contraseña" required>
                        <div id = "feedback" class="invalid-feedback">
                          La contraseña no coincide
                        </div>
                  </div>
                  <!--BOTÓN ENVIAR-->
                  <br>
                  <div class="d-grid gap-2 d-md-block">
                    <input type="submit" class="btn btn-lg btn-dark" id="btn_registro" value="Regístrate">
                    <!--IR A LOGIN-->
                  </div>
                  <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                      <a class="nav-link fw-medium active" aria-current="page" href="/login">
                        ¿Ya tienes cuenta? Inicia Sesión</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="card card-span h-100 text-white">
                <img class="card-img h-100" src="assets/img/gallery/bgregis.jpg" alt="..." />
                <a class="stretched-link" href="#!"></a>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- end of .container-->

    </section>

  </section>

  <script>
    (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation');

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
  </script> 


  
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/alejo.js"></script>
    <script src="assets/js/md5.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  
    
</body>
</html>