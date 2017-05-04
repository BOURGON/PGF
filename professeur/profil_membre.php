<?php session_start();
include('header.php');
include('menu.php');
switch(Membre::info($_GET['id'], 'niveau')) {
	case 1 : 
	$Niveau = 'Membre';
	break;
			
	case 2 : 
	$Niveau = 'Mod&eacute;rateur';
	break;
			
	case 3 : 
	$Niveau = 'Administrateur';
	break;
	
	case 4 : 
	$Niveau = 'Cr&eacute;ateur';
	break;
			
	case 5 :
	$Niveau = 'Banni';
	break;
}
echo '<div class="fiche-profil-wrap">
<div class="title">Profil du membre <span class="blue">'.Membre::info($_GET['id'], 'pseudo').'</span> - Statut : <span class="blue">'. $Niveau.'</span></div>
<div class="clear">
<div class="col1"><img src="'.URLSITE.'/'.Avatar::membre(Membre::info($_GET['id'], 'id_avatar')).'" width="120" height="120" alt="Avatar" title="Avatar"></div>
<div class="col2">

<div class="list"><div class="label">Nom : </div><div class="rep">'.Membre::info($_GET['id'], 'nom').'</div></div>

<div class="list"><div class="label">Prenom : </div><div class="rep">'.Membre::info($_GET['id'], 'prenom').'</div></div>

<div class="list"><div class="label">Date de naissance : </div><div class="rep">'.Membre::info($_GET['id'], 'naissance').'</div></div>

<div class="list"><div class="label">Genre : </div><div class="rep">'; 
if(Membre::info($_GET['id'], 'genre')=='3') { 
	echo 'Femme'; 
} 
else { 
	echo 'Homme'; 
} 
echo '</div></div>

<div class="list"><div class="label">Email : </div><div class="rep">'.Membre::info($_GET['id'], 'email').'</div></div>

<div class="list"><div class="label">Pseudo Facebook : </div><div class="rep">'.Membre::info($_GET['id'], 'facebook').'</div></div>

<div class="list"><div class="label">Pseudo Twitter : </div><div class="rep">'.Membre::info($_GET['id'], 'twitter').'</div></div>

<div class="list"><div class="label">Site Web : </div><div class="rep">'.Membre::info($_GET['id'], 'site').'</div></div>

<div class="list"><div class="label">N&deg; de tel : </div><div class="rep">'.Membre::info($_GET['id'], 'tel').'</div></div>

<div class="list"><div class="label">Adresse : </div><div class="rep">'.Membre::info($_GET['id'], 'adresse').'</div></div>

<div class="list"><div class="label">Code Postal : </div><div class="rep">'.Membre::info($_GET['id'], 'cp').'</div></div>

<div class="list"><div class="label">Ville : </div><div class="rep">'.Membre::info($_GET['id'], 'ville').'</div></div>

<div class="list"><div class="label">Description : </div><div class="rep">'.str_replace('<br />', "\n",Membre::info($_GET['id'], 'description')).'</div></div>

</div>
</div>
</div>';
include('footer.php');
?>
