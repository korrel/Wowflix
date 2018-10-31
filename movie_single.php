<?php 

// Récupérer l'ID du film dans l'url
$id=isset($_GET['id'])? $_GET['id'] : 0;
// récupérer la base de données
require_once(__DIR__.'/config/database.php');


//////////////////////    récupèrer les informations du film ////////////////////////////

$query = $db ->prepare('SELECT*FROM movies WHERE id= :id');  // :id est un paramètre
$query -> bindValue(':id', $id, PDO::PARAM_INT); // on s'assure que l'id est bien un entier
$query ->execute(); // execute la requête
$movie = $query->fetch();

$query = $db ->prepare('SELECT*FROM category WHERE id= :id');  // :id est un paramètre
$query -> bindValue(':id', $movie['category_id'], PDO::PARAM_INT); // on s'assure que l'id est bien un entier
$query ->execute(); // execute la requête
$category = $query->fetch();

////////////////////////////////////  erreur 404   /////////////////////////////////////////

// renvoyer une 404 si la pizza n'existe pas
if($movie === false) {
    http_response_code(404); // network
    // on pourrait aussi rediriger l'utilisateur vers la page d'index
    header('location: index.php');
}

///////////////////////////////////////////////////////////////////////////////////////////

$currentPageTitle = $movie['title'];
require_once(__DIR__.'/partials/header.php');

?>


<div class="container-fluid position-relative deuxieme-section">
    <div class="container height-single mb-5 pb-3">

        <div class="row">   
            <div class="col">
                <div class="jumbotron jumbotron-fluid bg-transparent margin-sup">
                    <div class="container pt-5">
                        <nav aria-label="breadcrumb position-relative ">
                            <ol class="breadcrumb bg-transparent ariane">
                                <li class="breadcrumb-item"><a href="index.php" class="text-danger">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="movie_category.php" class="text-danger"><?= $category['name']; ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $movie['title']; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <iframe width="100%" height="400px" src="<?= $movie['video_link']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <h2 class="display-6 text-white pt-2 pb-3"> <?= $movie['title']; ?></h2>
                <p class="text-white text-justify bg-date p-2"><?= $movie['released_at']; ?></p>
                <p class="text-muted text-justify"><?= $movie['description']; ?></p>
                <img class="img-cover" src="assets/<?= $movie['cover']; ?>">
            </div>
        </div>

    </div>
</div>

<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer_single.php'); ?>