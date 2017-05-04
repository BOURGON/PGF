<?php //session_start();
include('function.php');

	// Créer l'historique de la déconnexion du membre
	if (isset($_SESSION['jeton'])){

		if (!(empty($_SESSION['connect']))) {

			Historique::creerAction('Déconnexion');

		}
	}
Connexion::deconnexion('index.php');

$debeug=0;
if ($debeug==1){
echo'---------------------------------------------';
echo'  <div id="page-wrapper"> <div class="container-fluid">
       <div class="row">
		<div class="col-lg-2"></div>
        <div class="col-lg-10">';
ini_set('display_errors','on');
error_reporting(E_ALL);

echo'POST';
echo var_dump($_POST);
echo'GET';
echo var_dump($_GET);
echo'SESSION';
echo var_dump($_SESSION);
echo'</div></div></div>

PAGE DECONNEXION

</div>';


}


?>