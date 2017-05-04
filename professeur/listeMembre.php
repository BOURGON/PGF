<?php session_start();
include('header.php');
include('menu.php');
echo '<div class="member-list-wrap">
<div class="title">liste des membres</div>
<form method="post" action="">
<div class="clear">';
if(!empty($_POST['bannir'])) {
	echo '<div class="list">
<input type="hidden" name="id" value="'.$_POST['id'].'">
Veuillez expliquer la raison du bannissement du membre <span class="blue"> '.Membre::info($_POST['id'], 'pseudo').' </span> :</div>
<textarea class="info-bann"  name="message"></textarea>
<input name="validBannir" value="Confirmer le bannissement" class="button" type="submit">
</div>
</form>';
}
if(!empty($_POST['validBannir'])) {
	Admin::bannir($_POST['id'], $_POST['message']);
}
if(!empty($_POST['debannir'])) {
	Admin::debannir($_POST['id']);
}
if(!empty($_POST['moderateur'])) {
	Admin::passeModo($_POST['id']);
}
if(!empty($_POST['membre'])) {
	Admin::passeMembre($_POST['id']);
}
if(!empty($_POST['inscription'])) {
	Activation::activationAuto(Membre::info($_POST['id'], 'pseudo'));
}
echo '<div class="clear">
<div class="col1"></div>
<div class="col2">Membre</div>
<div class="col3">Niveau</div>
<div class="col4">Modifier le statut</div>
</div>
<div class="clear">
'.InfoSite::listeMembre($_SESSION['id']).'
</div>
</div>';
include('footer.php');
?>