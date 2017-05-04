<?php
echo '<div class="module-wrap">
<div class="col1">
<div class="membre-logo"></div>
</div>
<div class="admin-panel">
<div class="clear">
<div class="label">Changer de design : </div>
<form method="post" action="">
<input type="submit" value="bleu" name="design" class="design-switch" />
<input type="submit" value="violet" name="design" class="design-switch" />
<input type="submit" value="vert" name="design" class="design-switch" />
</form>
</div>
<div class="info">
<div class="clear">Bonjour '.Membre::info($_SESSION['id'], 'nom').' '.Membre::info($_SESSION['id'], 'prenom').'</div>
<div class="clear">'.Message::nouveauNb($_SESSION['id']).'</div>
</div>
<div class="action">
<a href="index.php">Accueil</a>
<a href="#" class="bouton">Messagerie</a>
<a href="#" class="bouton">Profil</a>
<a href="" class="bouton">Nom_de_page</a>
<a href="#" class="bouton">Deconnexion</a>
</div>
</div>
</div>';
?>