<?php session_start();
include('header.php');
include('menu.php');
echo '<div class="messagerie-wrap">
<div class="title">Envoyer un message a tous les membres</div>
<script language="javascript">
function smiley(texte){
document.formulaire.message.value+=" "+texte;
} 
</script>
<form method="post" action="" name="formulaire">
<div class="clear">';
if(!empty($_POST['envoie_message'])) {
	extract($_POST);
	echo '<div style="text-align:center;">';
	echo Message::messageAll($titre, $message);
	echo '</div>';
}
echo '
<div class="label">Titre du message : </div><div class="input-box"><input class="input" type="text" name="titre" /></div></div>
<div class="clear"><div class="label">Votre message : </div><div class="input-box"><textarea class="message" name="message"></textarea></div></div>
<div class="clear"><div class="label">Ins&eacute;rer un Smiley : </div>
<div class="clear"><input type="submit" name="envoie_message" value="Envoyer le Message" class="button" /></div>
</form>
</div>';
include('footer.php');
?>