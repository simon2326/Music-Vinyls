<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>


  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/vinyl.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">

  @vite(['resources/css/theme.css', 'resources/js/theme.js', 'resources/js/alejo.js', 'resources/js/simon.js']);
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
    data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand d-inline-flex" href="/"><img class="d-inline-block"
          src="assets/img/gallery/vinyl.png" alt="logo" /><span class="text-1000 fs-0 fw-bold ms-2">Music
          Vinyls</span></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page"
          href="/promos">Descuentos</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" href="/vinyls">Vinilos</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page"
              href="NewArrivals">¡Lo Nuevo!</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" href="/collection">Colección</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" href="/blog">Blog</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" onclick="toAPI()">Spotify Playlists</a></li>
        </ul>
        <form class="d-flex">
          <a id="iniciosesion" class="text-1000" href="/login">Iniciar Sesión&nbsp;&nbsp;
            <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </a>
          <a id="mifoto"></a>
          <a id="logout" class="text-1000" onclick="logingout()">Cerrar Sesión
          </a>
          <a class="text-1000" href="#!">&nbsp;&nbsp;
            <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
              </path>
            </svg></a>
          <a class="text-1000" href="#!">
            <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <circle cx="9" cy="21" r="1"></circle>
              <circle cx="20" cy="21" r="1"></circle>
              <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
          </a>
        </form>
      </div>
    </div>
  </nav>
  <section class="py-11 bg-light-gradient border-bottom border-white border-5">
    <div class="bg-holder overlay overlay-light"
      style="background-image:url(assets/img/gallery/bgVinyls.jpg);background-size:cover;">
    </div>
    <!--/.bg-holder-->
    <section class="py-0 pb-8">

      <div class="container-fluid container-lg">
        <div>
          <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Blog</h1>
        </div>
        <div class="row h-100 g-2 justify-content-center">
          <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
            <div class="card card-span text-white h-100"><img class="img-card h-100"
                src="assets/img/gallery/killbill.jpg" alt="..." />
              <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img
                    src="assets/img/gallery/author-1.png" width="60" alt="..." />
                  <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i
                        data-feather="eye"> </i><span class="text-900 ms-2">13k</span></span><span
                      class="text-900 text-center"><i data-feather="heart"> </i><span
                        class="text-900 ms-2">1700</span></span><span class="text-900 text-center"><i
                        data-feather="corner-up-right"> </i><span class="text-900 ms-2">86</span></span></div>
                </div>
                <h6 class="text-900 mt-3">Sin DiMartínez . <span class="fw-normal">SOS stan</span></h6>
                <h3 class="fw-bold text-1000 mt-5 text-truncate">¿Debería matar a mi ex?</h3>
                <p class="text-900 mt-3">“Kill Bill” es la segunda pista del segundo álbum SOS de SZA.
                  El título hace referencia a la icónica duología cinematográfica de Kill Bill dirigida por
                  Quentin Tarantino. Como era de esperar, el contenido lírico detalla las fantasías homicidas
                  de SZA sobre un ex amante mientras coincide con la trama de las películas...</p><a
                  class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!" role="button">¡Leer más!
                  <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30"
                    height="30" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                    </path>
                  </svg></a>
              </div>
            </div>
          </div>
          <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
            <div class="card card-span text-white h-100"><img class="img-card h-100"
                src="assets/img/gallery/folklore.webp" alt="..." />
              <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img
                    src="assets/img/gallery/author-2.png" width="60" alt="..." />
                  <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i
                        data-feather="eye"> </i><span class="text-900 ms-2">350k</span></span><span
                      class="text-900 text-center"><i data-feather="heart"> </i><span
                        class="text-900 ms-2">230k</span></span><span class="text-900 text-center"><i
                        data-feather="corner-up-right"> </i><span class="text-900 ms-2">14k</span></span></div>
                </div>
                <h6 class="text-900 mt-3">Johnny Sequedecir . <span class="fw-normal">Swiftie girl period </span></h6>
                <h3 class="fw-bold text-1000 mt-5 text-truncate">Folklore - Una obra de arte</h3>
                <p class="text-900 mt-3">Luego de construir un catálogo musical basado en su propia vida y experiencias,
                  Taylor Swift se enfoca en contar historias ajenas sobre el folklore,
                  su octavo álbum de estudio que grabó “en aislamiento” durante la pandemia de COVID-19. A diferencia de
                  los lanzamientos de sus álbumes anteriores, no fue precedido por ningún
                  tipo de prensa o fanfarria: Swift lo anunció a través de las redes sociales apenas dieciséis horas
                  antes de su lanzamiento....</p><a class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!"
                  role="button">¡Leer más!
                  <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30"
                    height="30" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                    </path>
                  </svg></a>
              </div>
            </div>
          </div>
          <div class="col-sm-9 col-md-4 mb-3 mb-md-0 h-100">
            <div class="card card-span text-white h-100"><img class="img-card h-100"
                src="assets/img/gallery/afterhours.jpg" alt="..." />
              <div class="card-body px-xl-5 px-md-3 pt-0 pb-7">
                <div class="d-flex justify-content-between align-items-center bg-100 mt-n5 me-auto"><img
                    src="assets/img/gallery/author-3.png" width="60" alt="..." />
                  <div class="d-flex flex-1 justify-content-around"> <span class="text-900 text-center"><i
                        data-feather="eye"> </i><span class="text-900 ms-2">35</span></span><span
                      class="text-900 text-center"><i data-feather="heart"> </i><span
                        class="text-900 ms-2">23</span></span><span class="text-900 text-center"><i
                        data-feather="corner-up-right"> </i><span class="text-900 ms-2">14</span></span></div>
                </div>
                <h6 class="text-900 mt-3">Martin Abel's fan. <span class="fw-normal">Take off my disguise </span></h6>
                <h3 class="fw-bold text-1000 mt-5 text-truncate">After Hours, el hit infinito &amp; su critica</h3>
                <p class="text-900 mt-3">After Hours es el cuarto álbum de estudio de The Weeknd.
                  Fue lanzado el 20 de marzo de 2020 con gran éxito de crítica, y algunos lo llamaron
                  su mejor trabajo hasta la fecha. El álbum contiene temas relacionados con la soledad, el desamor, el
                  retraimiento, la infidelidad y la imprudencia....</p><a
                  class="btn btn-lg text-900 fs-1 px-0 hvr-icon-forward" href="#!" role="button">¡Leer más!
                  <svg class="bi bi-arrow-right-short hover-icon" xmlns="http://www.w3.org/2000/svg" width="30"
                    height="30" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                    </path>
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>

  </section>



  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/feather-icons/feather.min.js"></script>
  <script>
    feather.replace();
  </script>

  <script src="assets/js/theme.js"></script>
  <script src="assets/js/simon.js"></script>
  <script src="assets/js/alejo.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">

</body>
</html>