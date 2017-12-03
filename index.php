<?php 
////////////////////////////////////// SI LE $_GET DE P EST SÉTÉ ////////////////////////////////////
if (isset($_GET['p'])) {
////////////////////// ////////  ALORS ELLE VAUDRAT BIEN LA VALEUR PASSÉ ////////////////////////////
    $p = $_GET['p'];
} else {
// ////////////////  SINON ELLE RENVERRA AUTOMATIQUEMENT VERS LA PAGE ACCUEIL DU SITE ////////////////
    $p = 'home';
}
// /////////////////////////  MISE EN MEMOIRE TAMPON DES VALEURS DE LA PAGE /////////////////////////
ob_start();
////// /// SI LA VARIABLE SÉTÉ VAUT ACCUEIL ALORS ON INCLUE LA PAGE ACCUEIL DANS LE $CONTENT  ///////
if ($p === 'home') {
    include('pages/home.php');
}


$content = ob_get_clean();
include('pages/template/default.php');