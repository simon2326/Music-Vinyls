<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>MusicVinyls 🎵🎵🎵</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/vinyl.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">

  <!--<link href="assets/css/theme.css" rel="stylesheet" />-->
  @vite(['resources/css/theme.css']);

</head>


<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
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
            <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="/promos">Descuentos</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium" href="/vinyls">Vinilos</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="/newArrivals">¡Lo Nuevo!</a></li>
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
      <div class="container">
        <div class="row flex-center">
          <div class="col-12 mb-10">
            <div class="d-flex align-items-center flex-column">
              <h1 class="fw-normal"> Con un gran estilo</h1>
              <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Vinilos hechos para ti</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Whatsapp-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=573114263921&text=Hola, me gustaria comprar un vinilo!"
      class="msg-wpp pulse" target="wpp_blank">
      <i class="fa fa-whatsapp my-wpp-msg "></i>
    </a>


    <section class="py-0" id="header" style="margin-top: -23rem !important;">

      <div class="container">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="card card-span h-100 text-white"> <img class="img-fluid" src="assets/img/gallery/female.jpeg"
                width="790" alt="..." />
              <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-light" id="fem"
              href="/vinyls">Artistas Femeninas</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-span h-100 text-white"> <img class="img-fluid" src="assets/img/gallery/male.jpeg"
                width="790" alt="..." />
              <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-light" id="mal"
              href="/vinyls">Artistas Masculinos</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>


    <section>

      <div class="container">
        <div class="row h-100 g-0">
          <div class="col-md-6">
            <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
              <h4 class="text-800">Nuevos Lanzamientos</h4>
              <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">TQG</h1>
              <h4 class="text-800">Karol G & Shakira</h4>
              <p class="mb-5 fs-1">Las siglas “TQG” que titulan el nuevo sencillo de las artistas colombianas,
                son realmente el significado de “te quedó grande”, frase que se menciona en el coro de la canción
                por parte de las intérpretes, “a ti te quedé grande y por eso estás con una igualita que tú”</p>
              <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="/collection"
                  role="button">Explore</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/outfit.png"
                alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1"
                    href="/newArrivals" role="button">Nuevos Lanzamientos
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                      fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row h-100 g-2 py-1">
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100"
                src="assets/img/gallery/vanity-bag.png" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1"
                    href="/blog" role="button">The Weeknd & Ariana Grande
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                      fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/hat.png"
                alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1"
                    onclick="toAPI()" role="button">A&W debe estar en tu playlist
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                      fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-span h-100 text-white"><img class="card-img h-100"
                src="assets/img/gallery/high-heels.png" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1"
                    href="/blog" role="button">10 Minutos de Arte
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                      fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>


    <section class="py-0" id="collection">

      <div class="container">
        <div class="row h-100 gx-2">
          <div class="col-md-6">
            <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/urban.png"
                alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="p-5 p-md-2 p-xl-5">
                  <h1 class="fs-md-4 fs-lg-7 text-light">Nuevo Lanzamiento</h1>
                  <h5 class="fs-2 text-light">MAÑANA SERÁ BONITO</h5>
                </div>
              </div><a class="stretched-link" href="/collection"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-span h-100 text-white"><img class="card-img h-100"
                src="assets/img/gallery/country.png" alt="..." />
              <div class="card-img-overlay bg-dark-gradient">
                <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-end-center align-items-baseline h-100">
                  <h1 class="fs-md-4 fs-lg-7 text-light">S12?</h1>
                  <h5 class="fs-2 text-light">Nuevo Album de Shakira</h5>
                </div>
              </div><a class="stretched-link" href="/collection"></a>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>

    <section class="py-11">
      <div class="bg-holder overlay overlay-0"
        style="background-image:url(assets/img/gallery/cta.png);background-position:center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="carousel slide carousel-fade" id="carouseCta" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-12">
                      <div class="text-light text-center py-2">
                        <h5 class="display-4 fw-normal text-400 fw-normal mb-4">Visita nuestros puntos de venta</h5>
                        <h1 class="display-1 text-white fw-normal mb-8">Medellín</h1><a
                          class="btn btn-lg text-light fs-1" href="#!" role="button">Dirección
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                            </path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-12">
                      <div class="text-light text-center py-2">
                        <h5 class="display-4 fw-normal text-400 fw-normal mb-4">Visita nuestros puntos de venta</h5>
                        <h1 class="display-1 text-white fw-normal mb-8">Londres</h1><a
                          class="btn btn-lg text-light fs-1" href="#!" role="button">Dirección
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                            </path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-12">
                      <div class="text-light text-center py-2">
                        <h5 class="display-4 fw-normal text-400 fw-normal mb-4">Visita nuestros puntos de venta</h5>
                        <h1 class="display-1 text-white fw-normal mb-8">Miami</h1><a class="btn btn-lg text-light fs-1"
                          href="#!" role="button">Dirección
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                            </path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouseCta"
                    data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                      class="visually-hidden">Previous</span></button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouseCta"
                    data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span
                      class="visually-hidden">Next </span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="py-0 pt-7">

      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-2 mb-3">
            <h5 class="lh-lg fw-bold text-1000">Nosotros</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Vuelvete Proveedor</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="/blog">Nuestro Blog</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5 class="lh-lg fw-bold text-1000">Ayuda</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Sigue tu pedido</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Reembolsos</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">¿Cómo Ordenar?</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5 class="lh-lg fw-bold text-1000">Servicio al cliente</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Contacto</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Métodos de Pago</a></li>
              <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Regalos</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-auto ms-auto">
            <h5 class="lh-lg fw-bold text-1000">Inscríbete</h5>
            <div class="row input-group-icon mb-5">
              <div class="col-12">
                <input class="form-control input-box" type="email" placeholder="Tu correo" aria-label="email" />
                <svg class="bi bi-arrow-right-short input-box-icon" xmlns="http://www.w3.org/2000/svg" width="23"
                  height="23" fill="#424242" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                  </path>
                </svg>
              </div>
            </div>
            <p class="text-800">
              <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                </path>
              </svg><span class="text-800">(323) 456 8734</span>
            </p>
            <p class="text-800">
              <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg><span class="text-800">musicvinyls@gmail.com</span>
            </p>
          </div>
        </div>
        <div class="border-bottom border-3"></div>
        <div class="row flex-center my-3">
          <div class="col-md-6 order-1 order-md-0">
            <p class="my-2 text-1000 text-center text-md-start"> Por <a class="text-800"
                href="mailto:simon.correa@upb.edu.co">Simón Correa Marín</a></p>
            <p class="my-2 text-1000 text-center text-md-start"> & <a class="text-800"
                href="mailto:luis.londono@upb.edu.co">Alejandro Londoño Martínez</a></p>
          </div>
          <div class="col-md-6">
            <div class="text-center text-md-end">
              <a href="https://www.facebook.com/sza"><span class="me-4" data-feather="facebook"></span></a>
              <a href="https://www.instagram.com/taylorswift/"><span class="me-4" data-feather="instagram"></span></a>
              <a href="https://www.youtube.com/channel/UC0WP5P-ufpRfjbNrmOWwLBQ"><span class="me-4"
                  data-feather="youtube"></span></a>
              <a href="https://twitter.com/shakira"> <span class="me-4" data-feather="twitter"></span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>

  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
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