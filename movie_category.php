<?php 

// Récupérer l'ID des films dans l'url
$id=isset($_GET['id'])? $_GET['id'] : 0;
// récupérer la base de données
require_once(__DIR__.'/config/database.php');

//récupèrer les informations de la catégorie
$query = $db ->prepare('SELECT*FROM category WHERE id= :id');  // :id est un paramètre
$query -> bindValue(':id', $id, PDO::PARAM_INT); // on s'assure que l'id est bien un entier
$query ->execute(); // execute la requête
$category = $query->fetch();

// renvoyer une 404 si la pizza n'existe pas
if($category === false) {
    http_response_code(404); // network
    header('location: index.php'); // on renvoie à la page Index
}

$currentPageTitle = $category['name'];

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); 

?>

<main>
    <section class="container-fluid pt-4 pb-5 position-relative category-encart">
        <?php echo '<img src="'.$category['background'].' " alt="" class="img-filter-category">';?>
        <div class="container-fluid position-absolute bg-category">
            <div class="filter-category"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col pt-5 py-3 encart-titre-category">
                    <h2 class="display-4 text-center text-white py-4"> <?php echo($category['name']);?></h2>
                </div>
            </div>
        </div>
    </section>
    
    <?php var_dump($category['background']); ?>






<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer_single.php'); ?>