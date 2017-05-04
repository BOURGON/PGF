<?php session_start();
include('header.php');
if(!empty($_POST['changeNaissance'])) {
	Membre::profilVisibilite($_SESSION['id'], 'naissance');
}
if(!empty($_POST['changeGenre'])) {
	Membre::profilVisibilite($_SESSION['id'], 'genre');
}
if(!empty($_POST['changeNom'])) {
	Membre::profilVisibilite($_SESSION['id'], 'nom');
}
if(!empty($_POST['changePrenom'])) {
	Membre::profilVisibilite($_SESSION['id'], 'prenom');
}
if(!empty($_POST['changeEmail'])) {
	Membre::profilVisibilite($_SESSION['id'], 'email');
}
if(!empty($_POST['changeFacebook'])) {
	Membre::profilVisibilite($_SESSION['id'], 'facebook');
}
if(!empty($_POST['changeTwitter'])) {
	Membre::profilVisibilite($_SESSION['id'], 'twitter');
}
if(!empty($_POST['changeSite'])) {
	Membre::profilVisibilite($_SESSION['id'], 'site');
}
if(!empty($_POST['changeTel'])) {
	Membre::profilVisibilite($_SESSION['id'], 'tel');
}
if(!empty($_POST['changeAdresse'])) {
	Membre::profilVisibilite($_SESSION['id'], 'adresse');
}
if(!empty($_POST['changeCp'])) {
	Membre::profilVisibilite($_SESSION['id'], 'cp');
}
if(!empty($_POST['changeVille'])) {
	Membre::profilVisibilite($_SESSION['id'], 'ville');
}
if(!empty($_POST['maj'])) {
	extract($_POST);
	if(Message::interdit($description)) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			Membre::majProfil($_SESSION['id'], $naissance, $genre, $nom, $prenom, $email, $facebook, $twitter, $site, $tel, $adresse, $cp, $ville, $mailing, $description);
		}
		else {
			$err = '<span class="error-info">Votre adresse email n\'est pas conforme,<br />veuillez recommencer la mise &agrave; jour de votre profil.</span>';
		}
	}
	else {
		$err = '<span class="error-info">Votre description contient du language SMS ou des mots interdits,<br />veuillez recommencer la mise &agrave; jour de votre profil.</span>';
	}
}
include('menu.php');
echo '<form action="" method="post">
<div class="profil-wrap">
<div class="title">Votre profil <span class="exp-pseudo"> '.Membre::info($_SESSION['id'], 'pseudo').'</span></div>
';
if(!empty($err)) {
	echo '<div class="list">
'.$err.'
</div>';
}
echo '<div class="col1">
<input type="hidden" name="id_avatar" value="'.Membre::info($_SESSION['id'], 'id_avatar').'">
<img src="'.URLSITE.'/'.Avatar::membre(Membre::info($_SESSION['id'], 'id_avatar')).'" width="120" height="120" alt="Avatar" title="Avatar"><div class="list"><a href="avatar.php">Changer d\'Avatar</a></div></div>
<div class="col2">

<div class="list">
<div class="label">Votre nom : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'nom').'" name="nom"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'nom').'" name="changeNom" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre Pr&eacute;nom : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'prenom').'" name="prenom">
<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'prenom').'" name="changePrenom" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre date de naissance : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'naissance').'" name="naissance">
<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'genre').'" name="changeNaissance" class="profil-mask">
</div>

<div class="list">
<div class="label">Vous etes : </div><div class="radio-box">
<input name="genre" type="radio" value="1" ';
if(Membre::info($_SESSION['id'], 'genre')=='1') { 
	echo 'checked'; 
}
echo '>Un homme </div>
    <div class="radio-box"><input name="genre" type="radio" value="3" ';
if(Membre::info($_SESSION['id'], 'genre')=='3') { 
	echo 'checked'; 
}
echo ' >Une femme</div>
<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'genre').'" name="changeGenre" class="profil-mask"></div>

<div class="list">
<div class="label">Votre Email : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'email').'" name="email"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'email').'" name="changeEmail" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre Pseudo Facebook : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'facebook').'" name="facebook"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'facebook').'" name="changeFacebook" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre Pseudo Twitter : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'twitter').'" name="twitter"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'twitter').'" name="changeTwitter" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre site Web : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'site').'" name="site"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'site').'" name="changeSite" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre N&deg; de tel : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'tel').'" name="tel"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'tel').'" name="changeTel" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre adresse : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'adresse').'" name="adresse"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'adresse').'" name="changeAdresse" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre code postal : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'cp').'" name="cp"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'cp').'" name="changeCp" class="profil-mask">
</div>

<div class="list">
<div class="label">Votre ville : </div>
<input  class="input" type="text" value="'.Membre::info($_SESSION['id'], 'ville').'" name="ville"><input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'ville').'" name="changeVille" class="profil-mask">
</div>

 <div class="list"><div class="label2">Recevoir les emails de l\'espace membre : </div>
<select class="active-mail" name="mailing"><option value="1" ';
if(Membre::info($_SESSION['id'], 'mailing')=='1') { 
	echo 'checked'; 
} 
echo '>Oui</option>
<option value="0" ';
if(Membre::info($_SESSION['id'], 'mailing')=='0') { 
	echo 'checked'; }
echo '>Non</option></select></div>   

 <div class="clear"><div class="list"><a href="change_pass.php">Changer votre mot de passe</a></div></div>
 
 <div class="clear"><div class="label3">Votre description : </div>
 <textarea name="description" class="descript">'.str_replace('<br />', "\n",Membre::info($_SESSION['id'], 'description')).'</textarea>
 </div>
<div class="clear"><div class="list"><input type="submit" value="Mettre le profil &agrave; jour" name="maj" class="maj-confirm"></div></div>
</div>
</div>
</form>';
include('footer.php');
?>