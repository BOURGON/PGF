<?php session_start();
include('header.php');
include('menu.php');
if(!empty($_POST['supprime_connexion'])) {
	ProtectEspace::deleteJeton($_POST['id_jeton']);
}
echo '<div class="member-list-wrap">
<div class="title">liste des adresse IP  connectees</div>
<div class="clear">
<div class="col1"></div>
<div class="col2">Date</div>
<div class="col3">IP</div>
<div class="col4">Action</div>
</div>
<div class="clear">
'.ProtectEspace::listeJeton($_SESSION['id']).'
</div>
</div>';
include('footer.php');
?>