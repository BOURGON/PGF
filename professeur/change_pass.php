<?php session_start();
include('header.php');
include('menu.php');
echo '<div class="modif-pass-wrap">
<div class="title">changer votre mot de passe <span class="exp-pseudo"> '.Membre::info($_SESSION['id'], 'pseudo').'</span></div>
<form action="" method="post">';
if(!empty($_POST['changerPass'])) {
	extract($_POST);
	echo '<div style="text-align:center;">
	'.Membre::newPass($_SESSION['id'], $passActuel, $newPassUn, $newPassDe).'
	</div>';
}
echo '<div class="clear">
<div class="label">Votre mot de passe actuel : </div><input class="input" type="text" name="passActuel"></div>
<div class="clear"><div class="label">Votre nouveau mot de passe : </div><input class="input" type="text" name="newPassUn"></div>
<div class="clear"><div class="label">Confirmer votre nouveau mot de passe : </div><input class="input" type="text" name="newPassDe"></div>
<div class="clear"><input type="submit" value="Valider le nouveau mot de passe" name="changerPass" class="button"></div>
</form> 
</div>';
include('footer.php');
?>