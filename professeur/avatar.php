<?php session_start();
include('header.php');
if(!empty($_POST['changeAvatar'])) {
	extract($_POST);
	Avatar::maj($_SESSION['id'], $id_avatar);
}
include('menu.php');
echo '<div class="avatar-wrap">
<div class="title">Les avatars</div>
<form method="post" action="">
<div class="clear"><input type="submit" value="Valider l\'Avatar" name="changeAvatar" class="input"></div>
<div class="clear">
'.Avatar::liste().'
</div>
</form>
<div class="list">Les avatars sont sous licence, vous les trouverez ici : <a class="link1" href="http://tux.crystalxp.net/">http://tux.crystalxp.net/</a></div>
</div>
';
include('footer.php');
?>