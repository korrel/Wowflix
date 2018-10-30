<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plateform qui regroupe toutes les cinématiques du jeu World Of Warcraft">
    <meta name="author" content="Sébastien Renoult">
    <link rel="icon" href="assets/img/favicon.png">

    <title>Wowflix | Cinématiques de World of Warcraft</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <!-- Custom styles du site -->
    <link rel="stylesheet" href="assets/css/style.css" >
  </head>

  <body>
    <!-- ///////////////////////////  header /////////////////////////// --> 
    <header class="container-fluid px-0 position-relative">
        
        <!-- ///////////////////////////  NAVBAR /////////////////////////// --> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-menu">
            <a class="navbar-brand" href="#">WOWflix</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto menu-principal">
                    <li class="nav-item active p-2">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Vanilla</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">BC</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">WotLK</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Cata</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">MoP</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">WoD</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Legion</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Bfa</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- ///////////////////////////  JUMBOTRON /////////////////////////// --> 

        <section class="container-fluid intro px-0 position-relative border-bottom border-danger">
            <video autoplay muted loop id="bg-video">
                <source src="assets/video/wow.mp4" type="video/mp4">
            </video>
            
            <div class="jumbotron jumbotron-fluid bg-transparent intro-content">
                <div class="container text-center text-white">
                    <h1 class="display-4">Battle for Azeroth est là !</h1>
                    <p class="lead">Venez découvrir la nouvelle cinématique de la nouvelle extension de World of Warcraft</p>
                    <a><button type="button" class="btn btn-danger btn-redy"><i class="fas fa-play-circle"></i> Voir la bande annonce</button></a>
                </div>
            </div>

            <div class="filter"></div>
        </section>

    </header>

    <!-- ///////////////////////////  CONTENU PRINCIPAL /////////////////////////// -->

    <main>
        <section class="container-fluid pt-4 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 pt-5 py-3 encart-titre">
                        <h2 class="display-6 text-white">Titre de ma section</h2>
                        <p class="text-muted">Loremefidsvsfnk fe foiesj ifs igsigjks f iosi gs< gisj gzs s gsi gsijil js . </p>
                    </div>
                    <div class="col-md-3 pt-5 py-3 text-right">
                        <a href="#" ><button type="button" class="btn btn-outline-light rounded-0 border-0 btn-tous">Voir toutes les vidéos</button></a>
                    </div>
                </div>

                <!-- ///////////////////////////  1er CONTENU /////////////////////////// -->

                <div class="row">

                    <div class="col-md-4">
                        <div class="card mb-3 bg-transparent position-relative encart-visuel">
                            <a href="#" class="filtre-sombre position-relative">
                                <div class="icone-play position-absolute text-white "><i class="fas fa-play-circle icone-web"></i></div>
                                <img class="card-img-top" src="assets/img/legion_background.jpg" alt="titre de l'image">
                            </a>
                            <div class="card-body p-0 d-flex">
                                <h6 class="col-8 p-2 text-white ">Title de la vidéo</h6>
                                <p class="col-4 p-2 text-danger text-right">11-2018</p>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-3 bg-transparent position-relative encart-visuel">
                            <a href="#" class="filtre-sombre position-relative">
                                <div class="icone-play position-absolute text-white "><i class="fas fa-play-circle icone-web"></i></div>
                                <img class="card-img-top" src="assets/img/legion_background.jpg" alt="titre de l'image">
                            </a>
                            <div class="card-body p-0 d-flex">
                                <h6 class="col-8 p-2 text-white ">Title de la vidéo</h6>
                                <p class="col-4 p-2 text-danger text-right">11-2018</p>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-3 bg-transparent position-relative encart-visuel">
                            <a href="#" class="filtre-sombre position-relative">
                                <div class="icone-play position-absolute text-white "><i class="fas fa-play-circle icone-web"></i></div>
                                <img class="card-img-top" src="assets/img/legion_background.jpg" alt="titre de l'image">
                            </a>
                            <div class="card-body p-0 d-flex">
                                <h6 class="col-8 p-2 text-white ">Title de la vidéo</h6>
                                <p class="col-4 p-2 text-danger text-right">11-2018</p>
                            </div>
                        </div>   
                    </div>


                </div>
            </div>
        </section>

        <!-- ///////////////////////////  WOW le film /////////////////////////// -->

        <section class="container-fluid encart-commencement position-relative">
            <div class=" wow-commencement"></div>
            <div class="container h-100 position-relative align-items-center">
                <div class="row h-100 w-100 align-items-center">
                    <div class="col-md-4 volet-gauche">
                        <div class="col">
                            <img src="assets/img/miniature-warcraft-le-film.jpg" alt="" class="affiche-film">
                        </div>
                        <div class="col">
                            <h2 class="display-6 text-white">Warcraft</h2>
                            <h2 class="display-6 text-white">Le commencement</h2>
                            <p class="p-2 bg-menu text-white">Sortie en Avril 2016</p>

                        </div>
                    </div>

                    <div class="col-md-8">
                        <iframe width="560" height="315" class="shadow-video" src="https://www.youtube.com/embed/VFQD4rNr_BU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>




        <!-- ///////////////////////////  2eme CONTENU /////////////////////////// -->

        <section class="container-fluid deuxieme-section position-relative pt-4 pb-5">
            <div class="bg-nuit"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-9 pt-5 py- encart-titre">
                        <h2 class="display-6 text-white">Titre de ma section</h2>
                        <p class="text-muted">Loremefidsvsfnk fe foiesj ifs igsigjks f iosi gs< gisj gzs s gsi gsijil js . </p>
                    </div>
                    <div class="col-md-3 pt-5 py-3 text-right">
                        <a href="#" ><button type="button" class="btn btn-outline-light rounded-0 border-0 btn-tous">Voir toutes les vidéos</button></a>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="card mb-3 bg-transparent position-relative encart-visuel">
                            <a href="#" class="filtre-sombre position-relative">
                                <div class="icone-play position-absolute text-white "><i class="fas fa-play-circle icone-web"></i></div>
                                <img class="card-img-top" src="assets/img/legion_background.jpg" alt="titre de l'image">
                            </a>
                            <div class="card-body p-0 d-flex">
                                <h6 class="col-8 p-2 text-white ">Title de la vidéo</h6>
                                <p class="col-4 p-2 text-danger text-right">11-2018</p>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-3 bg-transparent position-relative encart-visuel">
                            <a href="#" class="filtre-sombre position-relative">
                                <div class="icone-play position-absolute text-white "><i class="fas fa-play-circle icone-web"></i></div>
                                <img class="card-img-top" src="assets/img/legion_background.jpg" alt="titre de l'image">
                            </a>
                            <div class="card-body p-0 d-flex">
                                <h6 class="col-8 p-2 text-white ">Title de la vidéo</h6>
                                <p class="col-4 p-2 text-danger text-right">11-2018</p>
                            </div>
                        </div>   
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-3 bg-transparent position-relative encart-visuel">
                            <a href="#" class="filtre-sombre position-relative">
                                <div class="icone-play position-absolute text-white "><i class="fas fa-play-circle icone-web"></i></div>
                                <img class="card-img-top" src="assets/img/legion_background.jpg" alt="titre de l'image">
                            </a>
                            <div class="card-body p-0 d-flex">
                                <h6 class="col-8 p-2 text-white ">Title de la vidéo</h6>
                                <p class="col-4 p-2 text-danger text-right">11-2018</p>
                            </div>
                        </div>   
                    </div>


                </div>
            </div>
        </section>
    </main>
    
    <!-- ///////////////////////////  FOOTER /////////////////////////// --> 

    <footer class="container-fluid pt-4 my-md-5 pt-md-5 bg-dark footer-content">
        <div class="container">
            <div class="row flex-direction-row">
                <div class="col-12 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled d-flex justify-content-center align-items-center text-small">
                    <li><a class="text-muted px-2" href="#">Cool stuff</a></li>
                    <li><a class="text-muted px-2" href="#">Random feature</a></li>
                    <li><a class="text-muted px-2" href="#">Team feature</a></li>
                    <li><a class="text-muted px-2" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted px-2" href="#">Another one</a></li>
                    <li><a class="text-muted px-2" href="#">Last time</a></li>
                    </ul>
                </div>
            </div>
        </div>
      </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
