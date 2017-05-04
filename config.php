<?php 
$debeug=0;
	$monUrl ='http://' . $_SERVER['SERVER_NAME'];
	$monUrl = filter_var($monUrl, FILTER_VALIDATE_URL);
	if ($monUrl!='http://localhost')
	{
	  $init=1;
	}else{
	 $init=0;
	}
	
if ($init>0){
$PARAM_hote        = 'localhost'; 
//$PARAM_nom_bd      = 'creps54_inscription_montpelier'; 

$PARAM_nom_bd      = 'creps54_inscription'; 
$PARAM_utilisateur = 'creps54_creps54';
$PARAM_mot_passe   = 'vr5qaa5wyx04lo40k8'; 
$PARAM_nom_site    = 'Base des formations'; 
$PARAM_mail_site   = 'jlouis.bourgon@oriontronic.com';
$PARAM_url_site    = 'https://raza.crepsnancyformation.com'; 
$PARAM_nom_bd2		 = 'creps54_raza';	
//$PARAM_nom_bd      = 'oriont_inscription';  
//$PARAM_utilisateur = 'oriont_creps21'; 
//$PARAM_mot_passe   = 'XtUk)HSQsoE&'; 

//$PARAM_mail_site   = 'jlouis.bourgon@oriontronic.com'; 
//$PARAM_url_site    = 'http://crepsformationbfc.fr';
//$PARAM_nom_bd2		 = 'oriont_formation';	
//$PARAM_url_site    = 'http://crepsmontpelierformation.crepsnancyformation.com/'; 

//$PARAM_nom_bd2		 = 'creps54_formation_montpelier';	

} else {

$PARAM_hote        = 'localhost'; 
$PARAM_nom_bd      = 'inscription';
//$PARAM_nom_bd      = 'prodoc_acces'; 
$PARAM_utilisateur = 'root'; 
$PARAM_mot_passe   = ''; 
$PARAM_nom_site    = 'formation_dijon'; 
$PARAM_mail_site   = 'jlouis.bourgon@oriontronic.com'; 
$PARAM_url_site    = 'http://localhost/formation_rogue_oneVraza_zero/';
//$PARAM_url_site    = 'http://192.168.50.242/formation_rogue_one/';
// 2e base : formation
$PARAM_nom_bd2 = 'savraza';
}



?>
