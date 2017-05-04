<?php session_start();
include('header.php');
if(!empty($_POST['Activation'])) {
	InfoSite::activationChange($_POST['mode']);
}
include('menu.php');
echo '<div class="active-wrap">
<div class="title">configuration de l\'espace membre</div>
<form action="" method="post">
<div class="clear">
<div class="label">Mode d\'Activation des Membres : </div>
<div class="input-box"><select class="input" name="destinataire"><option>Choisir un mode d\'activation</option>
'.InfoSite::listeActivation().'
</select></div></div>
<div class="clear">
<input type="submit" name="envoie_message" value="Confirmer" class="button" />
</div>
</form>
</div>';
include('footer.php');
?>