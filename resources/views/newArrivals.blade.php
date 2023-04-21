<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevos Productos</title>


  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/vinyl.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">

  @vite(['resources/css/theme.css']);
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
              href="/newArrivals">¡Lo Nuevo!</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" href="/collection">Colección</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" href="/blog">Blog</a></li>
          <li class="nav-item px-2"><a class="nav-link fw-medium" onclick="toAPI()">Spotify Playlists</a></li>
        </ul>
        <form class="d-flex">
          <a id = "iniciosesion" class="text-1000" href="/login">Iniciar Sesión&nbsp;&nbsp;
            <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </a>
          <a id = "mifoto"></a>
          <a id = "logout" class="text-1000" onclick="logingout()">Cerrar Sesión
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
            <h1 class="fw-normal"> Nuestros nuevos vinilos</h1>
            <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Escucha los albumes nuevos de tus artistas favoritos</h1>
            <section class="py-0">
              <div class="container">
                <div class="row h-100">
                  <div class="col-12">
                    <div class="carousel slide" id="carouselNewArrivals" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                          <div class="row h-100 align-items-center g-2">
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/sossza.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$40</h6>
                                  <p class="text-400 fs-1">SZA</p>
                                  <h4 class="text-light">SOS</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/midnightsts.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$29.99</h6>
                                  <p class="text-400 fs-1">Taylor Swift</p>
                                  <h4 class="text-light">Midnights</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/herloss.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$20</h6>
                                  <p class="text-400 fs-1">Drake, Rich Flex</p>
                                  <h4 class="text-light">Her Loss</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/emailssb.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$40</h6>
                                  <p class="text-400 fs-1">Sabrina Carpenter</p>
                                  <h4 class="text-light">Emails I can't send</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                          <div class="row h-100 align-items-center g-2">
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/felizcumple.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$29.99</h6>
                                  <p class="text-400 fs-1">Ferxxo</p>
                                  <h4 class="text-light">Feliz Cumpleaños Ferxxo</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/harryshouse.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$24</h6>
                                  <p class="text-400 fs-1">Harry Styles</p>
                                  <h4 class="text-light">Harry's House</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/30.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$30</h6>
                                  <p class="text-400 fs-1">Adele</p>
                                  <h4 class="text-light">30</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/saturno.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$27</h6>
                                  <p class="text-400 fs-1">Rauw Alejandro</p>
                                  <h4 class="text-light">Saturno</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                          <div class="row h-100 align-items-center g-2">
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/unsummerwy.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$1</h6>
                                  <p class="text-400 fs-1">Bad Bunny</p>
                                  <h4 class="text-light">Un Verano Sin Ti</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/motomami.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$21</h6>
                                  <p class="text-400 fs-1">Rosalía</p>
                                  <h4 class="text-light">Motomami</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/souror.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$19.99</h6>
                                  <p class="text-400 fs-1">Olivia Rodrigo</p>
                                  <h4 class="text-light">SOUR</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/microdosis.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$18.99</h6>
                                  <p class="text-400 fs-1">Mora</p>
                                  <h4 class="text-light">Microdosis</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row h-100 align-items-center g-2">
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/igor.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$18.99</h6>
                                  <p class="text-400 fs-1">Tyer the creator</p>
                                  <h4 class="text-light">IGOR</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/originsid.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$24</h6>
                                  <p class="text-400 fs-1">Imagine Dragons</p>
                                  <h4 class="text-light">Origins (Deluxe)</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/folklorealbumts.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$40</h6>
                                  <p class="text-400 fs-1">Taylor Swift</p>
                                  <h4 class="text-light">Folklore</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                              <div class="card card-span h-100 text-white"><img class="card-img h-100"
                                  src="assets/img/gallery/evermorealbum.jpeg" alt="..." />
                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                  <h6 class="text-primary">$41</h6>
                                  <p class="text-400 fs-1">Taylor Swift</p>
                                  <h4 class="text-light">Evermore</h4>
                                </div><a class="stretched-link" href="#"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselNewArrivals"
                            data-bs-slide="prev"><span class="carousel-control-prev-icon"
                              aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselNewArrivals"
                            data-bs-slide="next"><span class="carousel-control-next-icon"
                              aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
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
  <script src="assets/js/alejo.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">


</body>

</html>