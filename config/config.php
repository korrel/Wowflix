<?php

/////////////////////////////////////////////////////////////////////
//
//          /**** Fichier de config global  ****/
//          Ce fichier contiendra nos variables "globales" pour notre site.
//          Titre du site, titre de la page, page courante ...
//
/////////////////////////////////////////////////////////////////////

$siteName = 'Wowflix';

// Si REQUEST_URI vaut /home/toto/fichier.php --> on enlève ".php"
$currentPageUrl = basename ($_SERVER['SCRIPT_FILENAME'], '.php');

$current_category = 'movie_category.php?'.basename($_SERVER['QUERY_STRING']);


?>