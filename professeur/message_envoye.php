<?php session_start();
include('header.php');
include('menu.php');
echo '<div class="messagerie-wrap">
<div class="title">Messages envoyes</div>
<div class="clear"><!--option d\'envoi-->
<a href="message_new.php">&nbsp;Nouveau message&nbsp;</a>
<a href="message_envoye.php">&nbsp;Messages envoy&eacute;s&nbsp;</a>
<a href="messagerie.php">&nbsp;Messages re&ccedil;us&nbsp;</a>
</div>
<div class="clear"><!--signalétique-->
<div class="new-mess-alt">Nouveaux messages</div>
<div class="arch-mess">Messages d&eacute;j&agrave; lus</div>
<div class="suppr-mess">Effacer par le destinataire</div>
</div>
<div class="clear"><!--boite aux lettres-->
<div class="col1">&eacute;tat</div>
<div class="col2">Date de reception</div>
<div class="col3">Expediteur</div>
<div class="col4">Objet du message</div>
</div>
<div class="clear">
'.Message::listeEnvoi($_SESSION['id']).'
</div>
</div>';
include('footer.php');
?>