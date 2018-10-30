<?php

// Le fichier config.php et databas.php est inclus sur toutes les pages -->
// ATTENTION on part du fichier HEADER qui inclus le fichier PHP
require_once(__DIR__.'/../config/config.php'); 
require_once(__DIR__.'/../config/database.php'); 
require_once(__DIR__.'/../config/function.php');

// Récupère toutes les catégories
$query = $db -> query('SELECT * FROM category');
$films = $query -> fetchAll();

?>

<!-- ///////////////////////////  html /////////////////////////////////-->

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plateform qui regroupe toutes les cinématiques du jeu World Of Warcraft">
    <meta name="author" content="Sébastien Renoult">
    <link rel="icon" href="assets/img/favicon.png">

    <title>
        <?php 
            if (empty($currentPageTitle)) {  // si on est sur la page d'accueil
                echo $siteName. ' | Cinématiques de World of Warcraft';
            }else { // si on est sur une autre page
                echo $currentPageTitle . ' | ' .$siteName;
            }
        ?>
    </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <!-- Custom styles du site -->
    <link rel="stylesheet" href="assets/css/style.css" >
  </head>

  <body>
    <!-- ///////////////////////////  header /////////////////////////// --> 
    <header class="container-fluid px-0 position-relative bandeau-header">
        
        <!-- ///////////////////////////  NAVBAR /////////////////////////// --> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-menu">
            <a class="navbar-brand" href="index.php"><?= ($siteName); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto menu-principal">
                    <li class="nav-item active p-2 <?= ($currentPageUrl === 'index')? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>

                    <!-- //////////// génération de mon menu avec la BD ///////////////////////-->

                    <?php foreach($films as $film) { ?>
                    
                    <li class="nav-item p-2 <?= ($currentPageUrl === $current_category ? 'active' : ''); ?> ">
                        <a class="nav-link" href="<?php 
                            echo'movie_category.php?id='. $film['id']; ?>"><?= ($film['Acronyme']); ?></a>
                    </li>

                    <?php } ?>
                </ul>
            </div>


            <a href="movie_add.php" class="btn btn-sm btn-outline-dark btn-nav-ajout px-3 <?= ($currentPageUrl === 'movie_add')? 'active' : ''; ?>" type="button">Ajouter une vidéo</a>
        </nav>

        <!-- ///////////////////////////  JUMBOTRON /////////////////////////// --> 

        <?php 
        if (empty($currentPageTitle)) { ?>

        <section class="container-fluid intro px-0 position-relative border-bottom border-danger">
            <video autoplay muted loop id="bg-video">
                <source src="assets/video/wow.mp4" type="video/mp4">
            </video>
            
            <div class="jumbotron jumbotron-fluid bg-transparent intro-content">
                <div class="container text-center text-white">
                    <h1 class="display-4">Battle for Azeroth est là !</h1>
                    <p class="lead">Venez découvrir la nouvelle cinématique de la nouvelle extension de World of Warcraft</p>
                    <a href="https://www.youtube.com/watch?v=jSJr3dXZfcg " target="_blank"><button type="button" class="btn btn-danger btn-redy"><i class="fas fa-play-circle"></i> Voir la bande annonce</button></a>
                </div>
            </div>

            <div class="filter"></div>
        </section>
            
        <?php } ?>

    </header>