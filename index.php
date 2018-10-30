<!-- Le fichier Header.php est inclus sur la page -->
<?php require_once(__DIR__.'/partials/header.php'); 

// Récupère 3 vidéos de la categorie 8 (bfa)
// ATTENTION on renomme l'ID de MOVIES -> en 'id_movie' car confusion avec les ID
$query = $db -> query('SELECT *, movies.id as id_movie FROM movies INNER JOIN category ON movies.category_id = category.id WHERE category_id = 8 LIMIT 3');
$movies = $query -> fetchAll();

// récupère un film avec la catégorie 8 (bfa)
$query = $db -> query('SELECT * FROM movies WHERE category_id = 8');
$bfa = $query -> fetch();

// Récupère 3 vidéos de la categorie 7 (legion)
// ATTENTION on renomme l'ID de MOVIES -> en 'id_movie' car confusion avec les ID
$query = $db -> query('SELECT *, movies.id as id_movie FROM movies INNER JOIN category ON movies.category_id = category.id WHERE category_id = 7 LIMIT 3');
$legions = $query -> fetchAll();

// récupère un film avec la catégorie 7 (legion)
$query = $db -> query('SELECT * FROM movies WHERE category_id = 7');
$leg = $query -> fetch();

?>

    <!-- ///////////////////////////  CONTENU PRINCIPAL /////////////////////////// -->

    <main>
        <section class="container-fluid pt-4 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 pt-5 py-3 encart-titre">
                        <h2 class="display-6 text-white"> <?php echo($bfa['title']);?></h2>
                        <p class="text-muted">Le jeu prend place dans le monde imaginaire d’Azeroth à son début.</p>
                    </div>
                    <div class="col-md-3 pt-5 py-3 text-right">
                        <a href="<?php echo'movie_category.php?id='. $bfa['id']; ?>" ><button type="button" class="btn btn-outline-light rounded-0 border-0 btn-tous">Voir toutes les vidéos</button></a>
                    </div>
                </div>
                
                <!-- ///////////////////////////  1er CONTENU /////////////////////////// -->
                
                
                <div class="row">
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
        </section>


        <!-- ///////////////////////////  WOW le film /////////////////////////// -->

        <section class="container-fluid encart-commencement position-relative">
            <div class=" wow-commencement"></div>
            <div class="container h-100 position-relative align-items-center">
                <div class="row h-100 w-100 align-items-center">
                    <div class="col-md-4 volet-gauche">
                        <div class="col pt-5">
                            <img src="assets/img/miniature-warcraft-le-film.jpg" alt="" class="affiche-film">
                        </div>
                        <div class="col pt-3">
                            <h2 class="display-6 text-white">Warcraft</h2>
                            <h2 class="display-6 text-white">Le commencement</h2>
                            <p class="p-2 bg-menu text-white">Sortie en Avril 2016</p>

                        </div>
                    </div>

                    <div class="col-md-8 d-flex justify-content-center">
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
                        <h2 class="display-6 text-white"><?php echo($leg['title']);?></h2>
                        <p class="text-muted">L’extension se déroule après « The Burning Crusade ».</p>
                    </div>
                    <div class="col-md-3 pt-5 py-3 text-right">
                        <a href="<?php echo'movie_category.php?id='. $leg['id']; ?>" ><button type="button" class="btn btn-outline-light rounded-0 border-0 btn-tous">Voir toutes les vidéos</button></a>
                    </div>
                </div>
                
                
                <div class="row">
                    <?php  foreach ($legions as $legion){ ?>
                        <div class="col-md-4">
                            <div class="card mb-3 bg-transparent position-relative encart-visuel">
                                <a href="<?= "movie_single.php?id=" . $legion['id_movie'] ?>" class="filtre-sombre position-relative">
                                    <div class="icone-play position-absolute text-white "><i class="fas fa-play-circle icone-web"></i></div>
                                    <div class="encart-viv">
                                        <img class="card-img-top" src="assets/<?php echo($legion['cover']);?>" alt="<?php echo($legion['title']);?>">
                                    </div>
                                </a>
                                <div class="card-body p-0 d-flex">
                                    <h6 class="col-8 p-2 text-white "><?php echo($legion['title']);?></h6>
                                    <p class="col-4 p-2 text-danger text-right"><?php echo($legion['released_at']);?></p>
                                </div>
                            </div>   
                        </div>
                        <?php 
                    }
                ?>
                </div>

                    
                </div>
            </div>
        </section>

<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer.php'); ?>
