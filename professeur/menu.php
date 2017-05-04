<?php
echo '<div class="module-wrap">
<div class="col1">
<div class="prof-logo"></div>
</div>
<div class="admin-panel">
<div class="clear">
<div class="label">Acces a la base >>> </div>
<form method="post" action="">
 <input type="reset" value="Prof Panel" class="design-switch" onclick=\'window.location.href="'.URLSITE.'/adminpanel/view/prof"\'/>
</form>
</div>
<div class="info">
<div class="clear">Bonjour '.Membre::info($_SESSION['id'], 'nom').' '.Membre::info($_SESSION['id'], 'prenom').'</div>

<div class="clear">'.ProtectEspace::compteJeton($_SESSION['id']).'</div>
<div class="clear">'.InfoSite::membreNb().'</div>
</div>
<div class="action">
<a href="index.php">Accueil</a><a href="aide.php" class="bouton">Aide</a>
<a href="profil.php" class="bouton">Profil</a>
<a href="'.URLSITE.'/deconnexion.php" class="bouton">D&eacute;connexion</a>
</div>
</div>
</div>';
?>