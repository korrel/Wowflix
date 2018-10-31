<?php 

///////////////////////////////////////////////////////////////////////////////////////////

$currentPageTitle = 'Ajouter une vidéo';
require_once(__DIR__.'/partials/header.php');

?>

<main>

<div class="container-fluid position-relative deuxieme-section px-0">
    <div class="container height-single mb-5 pb-3">

        <div class="row">   
            <div class="col">
                <div class="jumbotron jumbotron-fluid bg-transparent margin-sup pb-0">
                    <div class="container pt-3 content-category">
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

        <!-- //////////////////////////////  FORMULAIRE /////////////////////////////// -->
        <div class="container content-category">
            <div class=" col-sm-12 col-md-6 mx-auto">
                <form method="POST" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="fomrm-group col-md-12">
                            <h2 class="display-4 text-center text-white pb-3"> Ajouter une vidéo</h2>
                        </div>
                    </div>
        
                    <!-- /////////////////// title //////////////////// -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="title" class="form-control"
                                value="<?php //echo $title; ?>" placeholder="Titre de la vidéo">
                            <!-- vérification des infos ;)-->
                            <?php 
                            /*
                                if(isset($errors['title'])) {
                                    echo '<div class="invalid-feedback">'.$errors['title'].'</div>';
                                }
                            */
                            ?>
                        </div>
                    </div>
        
                    <!-- /////////////////// description //////////////////// -->
                    <div class="row ">
                        <div class="form-group col-md-12">
                            <textarea class="form-control " name="description"
                                rows="4" placeholder="Description de la vidéo"></textarea>
                        </div>
                    </div>
        
                    <!-- /////////////////// video_link //////////////////// -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="video_link" class="form-control"
                                value="" placeholder="URL de la vidéo">
                        </div>
                    </div>
        
                    <!-- /////////////////// cover //////////////////// -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="file" name="cover" class="form-control"
                            value="" placeholder="">
                        </div>
                    </div>
        
        
                    <!-- /////////////////// released_at //////////////////// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="date" name="released_at" class="form-control "
                                value="" placeholder="">
                        </div>
        
                        <!-- /////////////////// category_id //////////////////// -->
                        <div class="form-group col-md-6">
                            <select name="genre" class="form-control"
                                value="" placeholder="Genre">
                                <!-- vérification des infos ;)-->
                                <option value="">Choisissez l'extension</option>
                                <option <?php //echo($genre==="animation" ) ? 'selected' : '' ; ?> value="animation">Animation</option>
                                <option value="action">Action</option>
                                <option value="action">Action</option>
                                <option value="action">Action</option>
                                <option value="action">Action</option>
                                <option value="action">Action</option>
                                <option value="action">Action</option>
                                <option value="action">Action</option>
                                <option value="action">Action</option>
                            </select>
                        </div>
                    </div>
        
                    <button type="submit" class="btn btn-success btn-block btn-ajouter w-75 mx-auto"">Ajouter la vidéo</button>
        
                    </div>
                </form>
            </div>
        </div>

        <div class="filter-category position-absolute"></div>

    </div>
</div>

<!-- //////////////////////////////  VERIFICATION du FORMULAIRE  /////////////////////////////// -->



<!-- Le fichier Header.php est inclus sur la page-->
<?php require_once(__DIR__.'/partials/footer02.php'); ?>