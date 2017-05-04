<?php session_start();
include('header.php');
Connexion::deconnexion($redirection = "");
echo '<div class="install-wrap">
<div class="clear">
<div class="title-admin-active"><p>Vous avez &eacute;t&eacute; banni(e) par l\'administrateur ou un mod&eacute;rateur du site.</p>
<p>Vous devez avoir re&ccedil;u un Email  vous expliquant la raison de votre bannissement.<br>
Pensez &agrave; v&eacute;rifier dans votre dossier Spams.</p></div>
</div>
</div>';
include('footer.php');
?>