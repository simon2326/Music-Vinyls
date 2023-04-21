<!DOCTYPE html id="spotify">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Searcher</title>


    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href=assets/img/favicons/vinyl.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/css/theme.css" rel="stylesheet" />

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
                    <li class="nav-item px-2"><a class="nav-link fw-medium" href="#!">Spotify Playlists</a></li>
                </ul>
                <form class="d-flex">
                    <a id="mifotoapi"></a>
                    <a id="logout" class="text-1000" onclick="logoutapi()">Cerrar Sesión
                    </a>
                    <a class="text-1000" href="#!">&nbsp;&nbsp;
                        <svg class="feather feather-heart me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></a>
                    <a class="text-1000" href="#!">
                        <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
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

        <div class="container">
            <div class="row flex-center">
                <div class="col-12 mb-10">
                    <div class="d-flex align-items-center flex-column">
                        <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Buscador de Playlist en Spotify</h1>
                        <h1 class="fw-normal">¡Busca tus playlists favoritas de Spotify aquí!</h1>
                        <div class="container">
                            <form action="" class="form-ls">
                                <input type="hidden" id='hidden_token'>
                                <div class="col-sm-6 form-group row mt-4 px-0">
                                    <label for="Genre" class="form-label col-sm-2">Genero:</label>
                                    <select name="" id="select_genre" class="form-control form-control-sm col-sm-10">
                                        <option>Selecciona...</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group row px-0">
                                    <label for="Genre" class="form-label col-sm-2">Playlists:</label>
                                    <select name="" id="select_playlist" class="form-control form-control-sm col-sm-10">
                                        <option>Selecciona...</option>
                                    </select>
                                </div>
                                <p></p>
                                <div class="col-sm-6 row form-group px-0">
                                    <button type="submit" id="btn_submit"
                                        class="btn btn-success col-sm-12">Buscar</button>
                                </div>
                            </form>
                            <p></p>
                            <div class="row">
                                <div class="col-sm-6 px-0">
                                    <div class="list-group song-list">

                                    </div>
                                </div>
                                <div class="offset-md-1 col-sm-4" id="song-detail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
        feather.replace();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/simon.js"></script>
    <script src="assets/js/alejo.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

</body>

</html>