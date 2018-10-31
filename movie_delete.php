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


<div class="container-fluid position-relative deuxieme-section px-0">
    <div class="container height-single mb-5 pb-3">

        <div class="row">   
            <div class="col">
                <div class="jumbotron jumbotron-fluid bg-transparent margin-sup">
                    <div class="container pt-5">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- //////////////////////  CONTROLE DE SUPPRESSION /////////////////////// -->
        <?php 

        if (isset($_POST)) {

                // Récupérer l'ID des films dans l'url
                $id=isset($_GET['id'])? $_GET['id'] : 0;

                 // Suppression
                $query = $db->prepare('DELETE FROM movies WHERE id = :id');
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
        }

        ?>


        <div class="row content-category mb-5" >
            <div class="col-md-8 mx-auto px-0 d-flex justify-content-between">
                <div class="col-md-8 px-0">
                    <h2 class="display-6 text-white pt-2 pb-3"> <?= $movie['title']; ?></h2>
                </div>
                <div class="col-md-4 px-0 d-flex justify-content-end">
                    <form class="form-inline">
                        <a><button type="submit" class="btn btn-danger btn-dangereux">Supprimer la vidéo</button><a>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="row content-category">
            <div class="col-md-8 mx-auto">
                <iframe width="100%" height="400px" src="<?= $movie['video_link']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            
        </div>


    </div>
    <div class="filter-category02 position-absolute"></div>
</div>

<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer02.php'); ?>