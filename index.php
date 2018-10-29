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
                        <a class="nav-link" href="#">Burning Crusade</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Wrath of the Lich King</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Cataclysm</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Mists of Pandaria</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Warlords of Draenor</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Legion</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">Battle for Azeroth</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- ///////////////////////////  JUMBOTRON /////////////////////////// --> 

        <section class="container-fluid intro px-0 position-relative">
            <video autoplay muted loop id="bg-video">
                <source src="assets/video/wow.mp4" type="video/mp4">
            </video>
            
            <div class="jumbotron jumbotron-fluid bg-transparent intro-content">
                <div class="container text-center text-white">
                    <h1 class="display-4">Battle for Azeroth est là !</h1>
                    <p class="lead">Venez découvrir la nouvelle cinématique de la nouvelle extension de World of Warcraft</p>
                    <a><button type="button" class="btn btn-primary">Voir la bande annonce</button></a>
                </div>
            </div>

            <div class="filter"></div>
        </section>

    </header>

    <!-- ///////////////////////////  CONTENU PRINCIPAL /////////////////////////// -->
    
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
