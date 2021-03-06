<?php 

// Récupérer l'ID du film dans l'url
$id=isset($_GET['id'])? $_GET['id'] : 0;
// récupérer la base de données
require_once(__DIR__.'/config/database.php');


//////////////////////    récupèrer les informations du film ////////////////////////////

$query = $db -> prepare('SELECT * FROM movies WHERE id = :id');
$query -> bindValue(':id', $id, PDO::PARAM_INT); // on s'assure que l'id est bien un entier
$query -> execute(); // execute la requête
$movie = $query -> fetch();

//////////////////////////////////////////////////////////////////////////////////////////

$currentPageTitle = 'Modifier la vidéo';
require_once(__DIR__.'/partials/header.php');

?>

<main>

<div class="container-fluid position-relative deuxieme-section02 px-0">
    <div class="container height-single mb-5 pb-3">

        <div class="row">   
            <div class="col">
                <div class="jumbotron jumbotron-fluid bg-transparent margin-sup pb-0">
                    <div class="container pt-3 content-category">
                        <nav aria-label="breadcrumb position-relative ">
                            <ol class="breadcrumb bg-transparent ariane">
                                <li class="breadcrumb-item"><a href="index.php" class="text-danger">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifier la vidéo</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


<!-- //////////////////////////////  VERIFICATION  /////////////////////////////// -->

<?php 
    // On déclare les variables pour éviter les erreurs
    $title = $description = $video = $cover = $released = $category = $validation = null;

    //////////////////////////////  VERIFICATION DU FORMULAIRE  ///////////////////////////////

    if (!empty($_POST)) { // Récupére les informations saisies dans le formulaire
        $title = $_POST['title'];
        $description = $_POST['description'];
        $video = $_POST['video_link'];
        $cover = $_FILES['cover'];
        $released = $_POST['released'];
        $category = $_POST['category'];
    
        $errors = [];

        if (empty($title)) { // Vérifie si le nom est vide
            $errors['title'] = 'Le champs "Title" ne doit pas être vide. <br />';
        }
        if (empty($description)) { // Vérifie si le nom est vide
            $errors['description'] = 'Le champs "Description" ne doit pas être vide. <br />';
        }
        if (empty($video)) { // Vérifie si le nom est vide
            $errors['video'] = 'Le champs "URL" ne doit pas être vide. <br />';
        }
        if ($cover['error'] === 4 ) { // Vérifie si le nom est vide
            $errors['cover'] = 'Le champs "L\'affiche" ne doit pas être vide. <br />';
        }
        if (empty($released)) { // Vérifie si le nom est vide
            $errors['released'] = 'Le champs "Date" ne doit pas être vide. <br />';
        }
        if (empty($category) || !in_array($category,['1','2','3','4','5','6','7','8'] )) { // Vérifie si le nom est vide
            $errors['category'] = 'Le champs "Extension" ne doit pas être vide. <br />';
        }

        // ////////////////////////  Upload de l'image  ////////////////////////////////
        

        $file = $cover['tmp_name']; // Emplacement du fichier temporaire 
        $fileName = 'img/'.$cover['name'];  // Variable pour la base de données
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // Permet d'ouvrir un fichier
        $mineType = finfo_file($finfo, $file); // Ouvre le fichier et renvoie image/jpg
        $allowedExtensions = ['image/jpg', 'image/jpeg', 'image/png', 'image/png'];
        // Si l'extension n'est pas autorisée, il y a une erreur
        if(!in_array($mineType, $allowedExtensions)){
            $errors['cover'] = 'Ce type n\'est pas autorisé';
        }
        // vérifier la taille du fichier ( "size" est en octet / inférieur à 30ko autorisé )
        if($cover['size']/ 1024 > 30) {
            $errors['cover'] = 'L\'image ets trop lourde !';            
        }
        if(!isset($errors['cover'])){
            move_uploaded_file($file, __DIR__.'/assets/'.$fileName);   // on déplace le fichier uploadé où on le souhaite 
        }   
        
        // ///////////////////////////////////////////////////////////////////////////

        
        if (empty($errors)) {
            // on défini la variable VALIDATION
            $validation = 'Envoi du mail';

            // envoie à la base de donnée
            $query = $db ->prepare('INSERT INTO movies (`title`,`description`,`video_link`, `cover`,`released_at`,`category_id`) 
                                                VALUES (:title, :description, :video, :cover, :released, :category)');
            $query -> bindValue(':title', $title, PDO::PARAM_STR);
            $query -> bindValue(':description', $description, PDO::PARAM_STR);
            $query -> bindValue(':video', $video, PDO::PARAM_STR);
            $query -> bindValue(':cover', $fileName, PDO::PARAM_STR);
            $query -> bindValue(':released', $released, PDO::PARAM_STR);
            $query -> bindValue(':category', $category, PDO::PARAM_STR);

            if ($query->execute()) { // On insère la video dans la BDD
                $success = true;
            }
        }
    }
?>

        <!-- //////////////////////////////  FORMULAIRE /////////////////////////////// -->
        <div class="container content-category">
            <div class=" col-sm-12 col-md-6 mx-auto">
                <form method="POST" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="fomrm-group col-md-12">
                            <h2 class="display-4 text-center text-white pb-3"> Modifier la vidéo</h2>
                        </div>
                    </div>
        
                    <!-- /////////////////// title //////////////////// -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="title" class="form-control <?= (isset($movie['title'])) ? 'is-invalid' : ''; ?>"
                                value="<?php echo $movie['title']; ?>" placeholder="Titre de la vidéo">
                            <!-- vérification des infos ;)-->
                            <?php 
                                if(isset($errors['title'])) {
                                    echo '<div class="invalid-feedback">'.$errors['title'].'</div>';
                                }
                            ?>
                        </div>
                    </div>
        
                    <!-- /////////////////// description //////////////////// -->
                    <div class="row ">
                        <div class="form-group col-md-12">
                            <textarea class="form-control <?= (isset($errors['description'])) ? 'is-invalid' : ''; ?>" name="description"
                                rows="4" placeholder="Description de la vidéo"><?php echo $movie['description']; ?></textarea>
                            <!-- vérification des infos ;)-->
                            <?php 
                                if(isset($errors['description'])) {
                                    echo '<div class="invalid-feedback">'.$errors['description'].'</div>';
                                }
                            ?>
                        </div>
                    </div>
        
                    <!-- /////////////////// video_link //////////////////// -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="video_link" class="form-control <?= (isset($errors['video'])) ? 'is-invalid' : ''; ?>"
                                value="<?php echo $movie['video_link']; ?>" placeholder="URL de la vidéo">
                            <!-- vérification des infos ;)-->
                            <?php 
                                if(isset($errors['video'])) {
                                    echo '<div class="invalid-feedback">'.$errors['video'].'</div>';
                                }
                            ?>
                        </div>
                    </div>
        
                    <!-- /////////////////// cover //////////////////// -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="file" name="cover" class="form-control <?= (isset($errors['cover'])) ? 'is-invalid' : ''; ?>"
                            value="">
                            <!-- vérification des infos ;)-->
                            <?php 
                                if(isset($errors['cover'])) {
                                    echo '<div class="invalid-feedback">'.$errors['cover'].'</div>';
                                }
                            ?>
                        </div>
                    </div>
        
        
                    <!-- /////////////////// released_at //////////////////// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="date" name="released" class="form-control <?= (isset($errors['released'])) ? 'is-invalid' : ''; ?>"
                                value="<?php $movie['released_at']; ?>" >
                            <!-- vérification des infos ;)-->
                            <?php 
                                if(isset($errors['released'])) {
                                    echo '<div class="invalid-feedback">'.$errors['released'].'</div>';
                                }
                            ?>
                        </div>
        
                        <!-- /////////////////// category_id //////////////////// -->
                        <div class="form-group col-md-6">
                            <select name="category" class="form-control <?= (isset($errors['category'])) ? 'is-invalid' : ''; ?>"
                                value="<?php echo $movie['catgery_id']; ?>">
                                <!-- vérification des infos ;)-->
                                <option value="">Choisissez l'extension</option>
                                <option <?php //echo($genre==="animation" ) ? 'selected' : '' ; ?> value="animation">Animation</option>
                                <option <?php echo($category === "1") ? 'selected' : ''; ?> value ="1">Vanilla</option>
                                <option <?php echo($category === "2") ? 'selected' : ''; ?> value ="2">Burning Crusade</option>
                                <option <?php echo($category === "3") ? 'selected' : ''; ?> value ="3">Wrath of the Lich King</option>
                                <option <?php echo($category === "4") ? 'selected' : ''; ?> value ="4">Cataclysm</option>
                                <option <?php echo($category === "5") ? 'selected' : ''; ?> value ="5">Mists of Pandaria</option>
                                <option <?php echo($category === "6") ? 'selected' : ''; ?> value ="6">Warlords of Draenor</option>
                                <option <?php echo($category === "7") ? 'selected' : ''; ?> value ="7">Legion</option>
                                <option <?php echo($category === "8") ? 'selected' : ''; ?> value ="8">Battle for Azeroth</option>
                            </select>
                            <!-- vérification des infos ;)-->
                            <?php 
                                if(isset($errors['category'])) {
                                    echo '<div class="invalid-feedback">'.$errors['category'].'</div>';
                                }
                            ?>
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div style="width:200px;height:0;padding-bottom:70%;position:relative;"><iframe src="https://giphy.com/embed/KWBHHKwJzkADe" width="200px" height="auto" style="position:relative" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                        </div>
                        <div class="form-group col-md-6 d.flex align-self-center">
                            <button type="submit" class="btn btn-success btn-block btn-ajouter w-75 mx-auto"">Ajouter la vidéo</button>
                        </div>

                    </div>
        
                </div>
            </form>
        </div>
    </div>
        

    <?php if (isset($success) && $success) { ?>
        <div class="alert alert-success alert-dismissible fade show valid">
            La pizza <strong><?php echo $title; ?></strong> a bien été ajouté avec l'id <strong><?php echo $db->lastInsertId(); ?></strong> !
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <div class="filter-category03 position-absolute"></div>


  


    </div>
</div>

<!-- //////////////////////////////  VERIFICATION du FORMULAIRE  /////////////////////////////// -->



<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer02.php'); ?>