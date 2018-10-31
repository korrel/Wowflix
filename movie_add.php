<?php 

///////////////////////////////////////////////////////////////////////////////////////////

$currentPageTitle = 'Ajouter une vidéo';
require_once(__DIR__.'/partials/header.php');

?>

<main>

<div class="container-fluid position-relative deuxieme-section">
    <div class="container height-single mb-5 pb-3">

        <div class="row">   
            <div class="col">
                <div class="jumbotron jumbotron-fluid bg-transparent margin-sup">
                    <div class="container pt-5">
                        <nav aria-label="breadcrumb position-relative ">
                            <ol class="breadcrumb bg-transparent ariane">
                                <li class="breadcrumb-item"><a href="index.php" class="text-danger">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter une vidéo</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- //////////////////////////////  VERIFICATION du FORMULAIRE  /////////////////////////////// -->


<!-- //////////////////////////////  FORMULAIRE /////////////////////////////// -->
<div class="container">
    <div class="row">
        <form class="mx-auto" method="POST" enctype="multipart/form-data">

            <!-- /////////////////// title //////////////////// -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" name="title" class="form-control <?= (isset($errors['title'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $title; ?>" placeholder="Titre du film">
                    <!-- vérification des infos ;)-->
                    <?php 
                            if(isset($errors['title'])) {
                                echo '<div class="invalid-feedback">'.$errors['title'].'</div>';
                        }?>
                </div>
            </div>

            <!-- /////////////////// description //////////////////// -->
            <div class="row ">
                <div class="form-group col-md-12">
                    <textarea class="form-control <?= (isset($errors['descripion'])) ? 'is-invalid' : ''; ?>" name="description"
                        rows="4" placeholder="Description du film"></textarea>
                    <!-- vérification des infos ;)-->
                    <?php 
                            if(isset($errors['description'])) {
                                echo '<div class="invalid-feedback">'.$errors['description'].'</div>';
                        }?>
                </div>
            </div>

            <!-- /////////////////// video_link //////////////////// -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" name="bandeAnnonce" class="form-control <?= (isset($errors['bandeAnnonce'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $bandeAnnonce; ?>" placeholder="URL de la bande annonce">
                    <!-- vérification des infos ;)-->
                    <?php 

                        if(isset($errors['bandeAnnonce'])) {
                            echo '<div class="invalid-feedback">'.$errors['bandeAnnonce'].'</div>';
                        }
                    ?>
                </div>
            </div>

            <!-- /////////////////// cover //////////////////// -->
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="file" name="image" class="form-control <?= (isset($errors['image'])) ? 'is-invalid' : ''; ?>">
                    <!-- vérification des infos ;)-->
                    <?php 
                            if(isset($errors['image'])) {
                                echo '<div class="invalid-feedback">'.$errors['image'].'</div>';
                        }?>
                </div>
            </div>


            <!-- /////////////////// released_at //////////////////// -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" name="date" class="form-control <?= (isset($errors['date'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $date; ?>" placeholder="jj/mm/aaaa">
                    <!-- vérification des infos ;)-->
                    <?php 
                            if(isset($errors['date'])) {
                                echo '<div class="invalid-feedback">'.$errors['date'].'</div>';
                        }?>
                </div>

                <!-- /////////////////// category_id //////////////////// -->
                <div class="form-group col-md-4">
                    <select name="genre" class="form-control <?= (isset($errors['genre'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $genre; ?>" placeholder="Genre">
                        <!-- vérification des infos ;)-->
                        <option value="">Choisissez une catégorie</option>
                        <option <?php echo($genre==="animation" ) ? 'selected' : '' ; ?>
                            value="animation">Animation</option>
                        <option <?php echo($genre==="action" ) ? 'selected' : '' ; ?> value="action">Action</option>
                        <option <?php echo($genre==="comedie" ) ? 'selected' : '' ; ?> value="comedie">Comédie</option>
                        <option <?php echo($genre==="horreur" ) ? 'selected' : '' ; ?> value="horreur">Horreur</option>
                        <option <?php echo($genre==="science-fiction" ) ? 'selected' : '' ; ?>
                            value="science-fiction">science-fiction</option>
                    </select>
                    <?php 
                            if(isset($errors['genre'])) {
                                echo '<div class="invalid-feedback">'.$errors['genre'].'</div>';
                        }?>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-block btn-ajouter w-75 mx-auto"">Ajouter la vidéo</button>

            </div>
        </form>
    </div>
</div>

<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer02.php'); ?>