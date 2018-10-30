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



<h2> Page d'une vidéo</h2>

<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer.php'); ?>