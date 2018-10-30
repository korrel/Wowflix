
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