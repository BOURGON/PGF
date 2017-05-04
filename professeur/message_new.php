<?php session_start();
include('header.php');
include('menu.php');
echo '<div class="messagerie-wrap">
<div class="title">Envoyer un message</div>
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
	echo Message::messageEnvoi($_SESSION['id'], $destinataire, $titre, $message);
	echo '</div>';
}
echo '<div class="clear"><div class="label">Choisir un destinataire : </div>';
if(!empty($_GET['id'])) {
echo '<input type="hidden" value="'.$_GET['id'].'" name="destinataire" />
<div class="input-box"><input class="input" type="text" value="'.Membre::info($_GET['id'], 'pseudo').'" /></div></div>';
}
else {
echo '<div class="input-box"><select class="input" name="destinataire"><option>Choix du destinataire</option>
'.Message::choixDestinataire($_SESSION['id']).'
</select></div></div>';
} 
echo '<div class="clear"><div class="label">Titre du message : </div><div class="input-box"><input class="input" type="text" name="titre" /></div></div>
<div class="clear"><div class="label">Votre message : </div><div class="input-box"><textarea class="message" name="message"></textarea></div></div>
<div class="clear"><div class="label">Ins&eacute;rer un Smiley : </div><div class="smiley">
'.Smiley::liste().'
</div></div>
<div class="clear"><input type="submit" name="envoie_message" value="Envoyer le Message" class="button" /></div>
</form>
</div>
</div>';
include('footer.php');
?>