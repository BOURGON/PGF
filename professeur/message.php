<?php session_start();
include('header.php');
include('menu.php');
Message::lu($_GET['id']);
if(!empty($_POST['delete'])) {
	Message::efface($_POST['id']);
	redirection('messagerie.php');
}
if(!empty($_POST['repondre'])) {
	redirection('message_new.php?id='.Membre::info(Message::info($_GET['id'], 'id_expediteur'), 'id'));
}
echo '<div class="messagerie-wrap">
<div class="title">le message de<span class="exp-pseudo"> '.Membre::info(Message::info($_GET['id'], 'id_expediteur'), 'pseudo').'</span></div>
<div class="clear"><div class="label">Exp&eacute;diteur : </div><div class="input-box"><div class="mess-info-recept">'.Membre::info(Message::info($_GET['id'], 'id_expediteur'), 'pseudo').'</div></div></div>
<div class="clear"><div class="label">Objet : </div><div class="input-box"><div class="mess-info-recept">'.Message::info($_GET['id'], 'titre').'</div></div></div>
<div class="clear"><div class="label">Votre message : </div><div class="input-box"><div class="mess-txt-recept">'.Smiley::affiche(Message::info($_GET['id'], 'message')).'</div></div></div>
<div class="clear">
<div class="place">
<form action="" method="post">
<input type="submit" value="Effacer" name="delete" class="mess-action">
<input type="hidden" name="id" value="'.$_GET['id'].'">
<input type="submit" value="R&eacute;pondre" name="repondre" class="mess-action">
</form>
</div>
</div>
</div>';
include('footer.php');
?>
