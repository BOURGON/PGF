<?php 
 session_start();
include('header.php');
include('menu.php');
// Connexion à la base mysql
$connect_host='0';
if ($connect_host> 0)    {$db_host = "localhost";$db_base = "creps54_inscription";$db_user = "creps54_creps54";$db_pass = "vr5qaa5wyx04lo40k8";} else {$db_host = "localhost:3306";$db_base = "inscription";$db_user = "root";$db_pass = "";}

//

if ( $serveur = mysql_connect($db_host,$db_user,$db_pass) )  {
	if ( mysql_select_db($db_base,$serveur) ) {
	} else {
		echo "<li>La base $db_base n'existe pas.</li>";
	}
} else {
	echo "<li>Le serveur $db_host n'est pas accessible.</li>";
}
/// 
$debug=0;
$table= "JejeScriptMembres";
$cle='Id';
$tri='ASC';

 ?>
</head>
<body>
<?php 
// memorisation de la variable de session table
if (isset($_GET['table'])) { $_SESSION['table'] = $table = $_GET['table']; } else { $table = $_SESSION['table'] ; }
?>
<?php //verifie les boutons ! n'est pas. Si aucune action est vue affiche de le masque de saisie de modific	ation,?>
<!-- titre attention le ref est en minuscule on le recupere de l'url -->

<?php 
//recuperation de l& fiche a modifier, des noms de rubrique pour une seule fiche de la table courante test en php il y un seul = pas un double
// on compare la velur de ref avec une valeur qui vient du $ guet 
//attention variable '".$ref." concatenation 
// test si le guet de url  n'est pas vide
if ($ref= $_GET['id'])
{
	$reqSQL = "DELETE FROM $table WHERE id = '$ref' LIMIT 1";
	/**/if ($debug > 0) echo "<li>reqSQL: $reqSQL";
	//applique la requete on a une ressource non exploitable par php pour l exploiter 
	// la on toute la table abec tout dedans
	$resSQL = mysql_query($reqSQL) or die('Requête invalide : ' . mysql_error()) ;
	
	/**/if ($debug < 2) echo "<script language='javascript'>window.location.href='liste.php?table=$table&cle=$cle&tri=$tri'</script>'";
}
// on libère l'espace mémoire alloué pour cette requête
mysql_free_result ($reqSQL);
// on ferme la connexion à la base de données.
mysql_close ();  
?>