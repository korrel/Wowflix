<?php 

// Récupérer l'ID des films dans l'url
$id=isset($_GET['id'])? $_GET['id'] : 0;
// récupérer la base de données
require_once(__DIR__.'/config/database.php');


$query = $db -> prepare('SELECT *, movies.id as id_movie FROM movies INNER JOIN category ON movies.category_id = category.id WHERE category_id = :tot');
$query -> bindValue(':tot', $id, PDO::PARAM_INT); // on s'assure que l'id est bien un entier
$query ->execute(); // execute la requête
$movies = $query -> fetchAll();

$query = $db -> prepare('SELECT * FROM category WHERE id = :id');
$query -> bindValue(':id', $id, PDO::PARAM_INT); // on s'assure que l'id est bien un entier
$query ->execute(); // execute la requête
$category = $query -> fetch();


// renvoyer une 404 si la film n'existe pas
if($category === false) {
    http_response_code(404); // network
    header('location: index.php'); // on renvoie à la page Index
}

$currentPageTitle = $category['name'];

// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php'); 

?>

<main>
    <section class="container-fluid position-relative px-0 category-encart">
        <?php echo '<img src="'.$category['background'].' " alt="'.$category['name'].'" class="img-filter-category">';?>
        <div class="container-fluid position-absolute bg-category">
            </div>
            <div class="container content-category">
                <div class="row">
                    <div class="col pt-5 py-3 encart-titre-category">
                        <h2 class="display-4 text-center text-white py-4"> <?php echo($category['name']);?></h2>
                    </div>
                </div>
                
                <!-- ///////////////////////////  1er CONTENU /////////////////////////// -->
                
                
                <div class="row py-3">
                    <?php  foreach ($movies as $movie){ ?>
                        <div class="col-md-4">
                            <div class="card mb-3 bg-transparent position-relative encart-visuel">
                                <a href="<?= "movie_single.php?id=" . $movie['id_movie'] ?>" class="filtre-sombre position-relative">
                                        <div class="icone-play position-absolute text-white "><i class="fas fa-play-circle icone-web"></i></div>
                                        <div class="encart-viv">
                                            <img class="card-img-top" src="assets/<?php echo($movie['cover']);?>" alt="<?php echo($movie['title']);?>">
                                        </div>
                                    </a>
                                    <div class="card-body p-0 d-flex">
                                        <h6 class="col-8 p-2 text-white "><?php echo($movie['title']);?></h6>
                                        <p class="col-4 p-2 text-danger text-right"><?php echo($movie['released_at']);?></p>
                                    </div>
                                </div>   
                            </div>
                            <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="filter-category position-absolute"></div>
    </section>
    
    






<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer_single.php'); ?>