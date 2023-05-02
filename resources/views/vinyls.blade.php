<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Vinilos</title>


    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/vinyl.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    @vite(['resources/css/theme.css', 'resources/js/theme.js', 'resources/js/alejo.js', 'resources/js/simon.js']);
    
</head>
<body id="vinilos">
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
          <li class="nav-item px-2"><a class="nav-link fw-medium" id="miapi" onclick="toAPI()">Spotify Playlists</a></li>
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
    <div class="bg-holder overlay overlay-light" style="background-image:url(assets/img/gallery/bgVinyls.jpg);background-size:cover;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row flex-center">
        <div class="col-12 mb-10">
          <div class="d-flex align-items-center flex-column">
            <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Nuestros Vinilos</h1>
            <h1 class="fw-normal">Compra por categoría</h1>
            <section id="categoryWomen">
              <div class="container">
                <div class="row h-100">
                  <div class="col-12">
                    <nav>
                      <div class="nav nav-tabs majestic-tabs mb-4 justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-women-tab" data-bs-toggle="tab" data-bs-target="#nav-women" type="button" role="tab" aria-controls="nav-women" aria-selected="true">Artistas Femeninas</button>
                        <button class="nav-link" id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="false">Artistas Masculinos</button>
                      </div>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                          <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab-women" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-wtshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-wtshirt" type="button" role="tab" aria-controls="pills-wtshirt" aria-selected="true">Pop</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-dresses-tab" data-bs-toggle="pill" data-bs-target="#pills-dresses" type="button" role="tab" aria-controls="pills-dresses" aria-selected="false">Alternativo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-wshoes-tab" data-bs-toggle="pill" data-bs-target="#pills-wshoes" type="button" role="tab" aria-controls="pills-wshoes" aria-selected="false">Country</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-wwatch-tab" data-bs-toggle="pill" data-bs-target="#pills-wwatch" type="button" role="tab" aria-controls="pills-wwatch" aria-selected="false">Rock</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-wsunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-wsunglasses" type="button" role="tab" aria-controls="pills-wsunglasses" aria-selected="false">Latino</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-wbagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-wbagpacks" type="button" role="tab" aria-controls="pills-wbagpacks" aria-selected="false">R&B</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContentWomen">
                            <div class="tab-pane fade" id="pills-dresses" role="tabpanel" aria-labelledby="pills-dresses-tab">
                              <div class="carousel slide" id="carouselCategoryDresses" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">folklore</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$40</span><span class="text-primary">$34.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Wwafa,wdwg?</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Billie Eilish</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$30</span><span class="text-primary">$27.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">evermore</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$38</span><span class="text-primary">$35.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Norman Fuckin Rockwell</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Lana Del Rey</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$37</span><span class="text-primary">$36.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryDresses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryDresses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                             </div>
                            <div class="tab-pane fade show active" id="pills-wtshirt" role="tabpanel" aria-labelledby="pills-wtshirt-tab">
                              <div class="carousel slide" id="carouselCategoryWTshirt" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/red-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Midnights</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$40.99</span><span class="text-primary">$37.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/pink-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Future Nostalgia</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Dua Lipa</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$38.99</span><span class="text-primary">$36.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/orange-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Thank U, Next</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Ariana Grande</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$35.99</span><span class="text-primary">$31.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/purple-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Teenage Dream</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Katy Perry</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$34.99</span><span class="text-primary">$29.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/red-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Red T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/pink-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Pink T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/orange-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Orange T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/purple-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Purple T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/red-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Red T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/pink-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Pink T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/orange-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Orange T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/purple-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Purple T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/red-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Red T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/pink-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Pink T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/orange-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Orange T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/purple-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Purple T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWTshirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWTshirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-wshoes" role="tabpanel" aria-labelledby="pills-wshoes-tab">
                              <div class="carousel slide" id="carouselCategoryWShoes" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Red (Taylor's Version)</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$50</span><span class="text-primary">$47.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Fearless (Taylor's Version)</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$45</span><span class="text-primary">$43.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift (Debut)</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$30</span><span class="text-primary">$24.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Queen Of Me</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Shania Twain</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$32</span><span class="text-primary">$26</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWShoes" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWShoes" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-wwatch" role="tabpanel" aria-labelledby="pills-wwatch-tab">
                              <div class="carousel slide" id="carouselCategoryWwatch" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Speak Now</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                                            <div class="fw-bold"><span class="text-primary">$43</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Plastic Hearts</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Miley Cyrus</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$35</span><span class="text-primary">$32.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">reputation</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$49</span><span class="text-primary">$47.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Endless Summer Vacation</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Miley Cyrus</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$49</span><span class="text-primary">$46.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWwatch" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWwatch" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-wsunglasses" role="tabpanel" aria-labelledby="pills-wsunglasses-tab">
                              <div class="carousel slide" id="carouselCategoryWSunglasses" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">¿Dónde están los ladrones?</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Shakira</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$45</span><span class="text-primary">$44.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">MAÑANA SERÁ BONITO</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Karol G</h5>
                                            <div class="fw-bold"><span class="text-primary">$30</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Versions of Me</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Anitta</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$27</span><span class="text-primary">$19.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Oral Fixation Vol. 2</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Shakira</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$35</span><span class="text-primary">$32.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWSunglasses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWSunglasses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-wbagpacks" role="tabpanel" aria-labelledby="pills-wbagpacks-tab">
                              <div class="carousel slide" id="carouselCategoryWBagpacks" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">RENAISSANCE</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Beyoncé</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$49</span><span class="text-primary">$46.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Anti</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Rihanna</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$50</span><span class="text-primary">$47.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">SOS</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">SZA</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$40</span><span class="text-primary">$36.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Queen</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Nicki Minaj</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$45</span><span class="text-primary">$36.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-1.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-2.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-3.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-4.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWBagpacks" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWBagpacks" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="nav-men" role="tabpanel" aria-labelledby="nav-men-tab">
                          <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab-men" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-tshirt-tab" data-bs-toggle="pill" data-bs-target="#pills-tshirt" type="button" role="tab" aria-controls="pills-tshirt" aria-selected="true">Pop</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-shirt-tab" data-bs-toggle="pill" data-bs-target="#pills-shirt" type="button" role="tab" aria-controls="pills-shirt" aria-selected="false">Alternativo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-shoes-tab" data-bs-toggle="pill" data-bs-target="#pills-shoes" type="button" role="tab" aria-controls="pills-shoes" aria-selected="false">Country</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-watch-tab" data-bs-toggle="pill" data-bs-target="#pills-watch" type="button" role="tab" aria-controls="pills-watch" aria-selected="false">Rock</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-sunglasses-tab" data-bs-toggle="pill" data-bs-target="#pills-sunglasses" type="button" role="tab" aria-controls="pills-sunglasses" aria-selected="false">Latino</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-bagpacks-tab" data-bs-toggle="pill" data-bs-target="#pills-bagpacks" type="button" role="tab" aria-controls="pills-bagpacks" aria-selected="false">R&B</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContentMen">
                            <div class="tab-pane fade show active" id="pills-tshirt" role="tabpanel" aria-labelledby="pills-tshirt-tab">
                              <div class="carousel slide" id="carouselCategoryTshirt" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/white-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Harry's House</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Harry Styles</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$37</span><span class="text-primary">$32.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sky-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">After Hours</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">The Weeknd</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$46</span><span class="text-primary">$42.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/yellow-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Unorthodox Jukebox</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Bruno Mars</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$34</span><span class="text-primary">$26.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/black-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Illuminate</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Shawn Mendes</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$28</span><span class="text-primary">$23.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/white-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sky-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sky T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/yellow-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Yellow T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/black-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/white-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sky-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sky T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/yellow-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Yellow T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/black-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/white-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sky-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sky T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/yellow-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Yellow T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/black-tshirt.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black T-Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryTshirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryTshirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-shirt" role="tabpanel" aria-labelledby="pills-shirt-tab">
                              <div class="carousel slide" id="carouselCategoryShirt" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">The Lockdown Sessions</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Elton John</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$43.99</span><span class="text-primary">$35.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">The Blueprint</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Jay Z</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$34.99</span><span class="text-primary">$27.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Circles</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Post Malone</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$29.99</span><span class="text-primary">$26.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Dawn FM</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">The Weeknd</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$30</span><span class="text-primary">$27.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Gray Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">White Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shirt-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Black Shirt</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryShirt" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryShirt" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-shoes" role="tabpanel" aria-labelledby="pills-shoes-tab">
                              <div class="carousel slide" id="carouselCategoryShoes" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Good Things</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Dan + Shay</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$32</span><span class="text-primary">$25.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Southern Voice</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Tim McGraw</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$34</span><span class="text-primary">$28.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Traveller</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Chris Stapleton</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$28</span><span class="text-primary">$24.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Fuse (Deluxe)</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Keith Urban</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$25</span><span class="text-primary">$20.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$200</span><span class="text-primary">$175</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/shoe-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Shoe</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryShoes" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryShoes" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-watch" role="tabpanel" aria-labelledby="pills-watch-tab">
                              <div class="carousel slide" id="carouselCategoryWatch" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Abbey Road</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">The Beatles</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">43</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Stripped</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">The Rolling Stones</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$50</span><span class="text-primary">$47.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Hot Space</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Queen</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$35</span><span class="text-primary">$32.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Atom Heart Mother</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Pink Floyd</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$31</span><span class="text-primary">$29.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/watch-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Watch</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryWatch" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryWatch" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">
                              <div class="carousel slide" id="carouselCategorySunglasses" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Un Verano Sin Ti</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Bad Bunny</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$28</span><span class="text-primary">$26.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Feliz Cumpleaños Ferxxo</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Feid</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$23</span><span class="text-primary">$18.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">YHLQMDLG</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Bad Bunny</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$30</span><span class="text-primary">$23.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Dharma</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Sebastian Yatra</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$26</span><span class="text-primary">$20.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/sunglass-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Sunglass</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategorySunglasses" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategorySunglasses" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="pills-bagpacks" role="tabpanel" aria-labelledby="pills-bagpacks-tab">
                              <div class="carousel slide" id="carouselCategoryBagpacks" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bad</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Michael Jackson</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$46</span><span class="text-primary">$42.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Starboy</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">The Weeknd</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$36</span><span class="text-primary">$32.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Confessions</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">Usher</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$38.99</span><span class="text-primary">$31.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Dancing Machine</h5>
                                            <h5 class="fw-bold text-1000 text-truncate">The Jackson 5</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$50</span><span class="text-primary">$36.99</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row h-100 align-items-center g-2">
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-5.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-6.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-7.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/bagpacks-8.png" alt="..." />
                                          <div class="card-img-overlay ps-0"> </div>
                                          <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate">Bagpacks</h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$500</span><span class="text-primary">$275</span></div>
                                          </div><a class="stretched-link" href="#"></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategoryBagpacks" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCategoryBagpacks" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                  </div>
                                </div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
            </section>

          </div>
        </div>
      </div>
    </div>

    <section>
        <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mb-6">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Los Más Vendidos</h5>
          </div>
          <div class="col-12">
            <div class="carousel slide" id="carouselBestSellers" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/handbag.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">1989 (Taylor's Version)</h5>
                          <h5 class="fw-bold text-1000 text-truncate">Taylor Swift</h5>
                          <div class="fw-bold"><span class="text-danger">$45</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/earrings.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">25</h5>
                          <h5 class="fw-bold text-1000 text-truncate">Adele</h5>
                          <div class="fw-bold"><span class="text-danger">$38</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/lathered-wristwatch.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Born To Die</h5>
                          <h5 class="fw-bold text-1000 text-truncate">Lana Del Rey</h5>
                          <div class="fw-bold"><span class="text-danger">$42</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tie.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Romance</h5>
                          <h5 class="fw-bold text-1000 text-truncate">Camila Cabello</h5>
                          <div class="fw-bold"><span class="text-danger">$33</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/handbag.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Marie Claire Handbag</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$399</span><span class="text-danger">$365</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/earrings.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Red Gem Earrings</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$489</span><span class="text-danger">$466</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/lathered-wristwatch.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Black Leathered Wristwatch</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$799</span><span class="text-danger">$745</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tie.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Red-White Stripped Tie</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$299</span><span class="text-danger">$243</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/handbag.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Marie Claire Handbag</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$399</span><span class="text-danger">$365</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/earrings.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Red Gem Earrings</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$489</span><span class="text-danger">$466</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/lathered-wristwatch.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Black Leathered Wristwatch</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$799</span><span class="text-danger">$745</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tie.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Red-White Stripped Tie</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$299</span><span class="text-danger">$243</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100 align-items-center g-2">
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/handbag.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Marie Claire Handbag</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$399</span><span class="text-danger">$365</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/earrings.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Red Gem Earrings</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$489</span><span class="text-danger">$466</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/lathered-wristwatch.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Black Leathered Wristwatch</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$799</span><span class="text-danger">$745</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 h-100">
                      <div class="card card-span h-100 text-white"><img class="img-fluid h-100" src="assets/img/gallery/tie.png" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                        <div class="card-body ps-0 bg-200">
                          <h5 class="fw-bold text-1000 text-truncate">Red-White Stripped Tie</h5>
                          <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through">$299</span><span class="text-danger">$243</span></div>
                        </div><a class="stretched-link" href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselBestSellers" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselBestSellers" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  
    
</body>
</html>