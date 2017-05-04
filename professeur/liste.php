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
 <head>

 <link href="../adminpanel/view/moderateur/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 


/**/if ($debug > 0) $cle = $_GET['cle'];
/**/if ($debug > 0) $tri = $_GET['tri'];
// si pas de tri demandé par l utilisateur -> tri par defaut attention id est mon entete de table sql
if ( ! isset($_SESSION[$table]['cle'])){ $cle = "id";} else { $cle = "id" ; }
if ( ! isset($_SESSION[$table]['tri'])){ $tri = "ASC";}else { $tri = "ASC";  }
?>
<?php /**/if ($debug > 0) ListeTableauRecursif($_SESSION);?>
<!--<h1><?php //echo "Table ".ucfirst($table) ?></h1>-->
<?php 
/**/if ($debug > 0) echo "<li>table: $table<li>cle: $cle<li>tri: $tri";
if (isset($tri)) { $order = "ORDER BY $cle $tri" ; } else { $order = "" ; }

$reqSQL = "SELECT id,pseudo,password,email,nom,prenom,tel FROM $table $order";
$resSQL = mysql_query($reqSQL) or die('Requête invalide : ' . mysql_error()) ;
if (mysql_num_fields($resSQL)< 10) {$nb4col = mysql_num_fields($resSQL);} else{$nb4col=10;}
$nblig = mysql_num_rows($resSQL);
// fait cela si un jour je veux faire qu'un fichier liste ou l'on determine nombre de colonnes à afficher
//if (isset($nbcol)) { $nbcol = $nbcol ; } else { $nbcol = mysql_num_fields($resSQL) ; }
//$nbcol = mysql_num_fields($resSQL);
	/*if ($debug > 0) echo "<li>Lignes: $nblig<li>Colonnes: $nbcol <li>date: $theDate" ;*/
?>
<!-- BOUTON DES MENUS --->
<p align="center"><input type="button" value="Retour" onClick="window.location.href='index.php'" />
<?php 
echo"<input type='button' value='Ajouter une fiche' onClick=\"window.location.href='ajou.php?table=$table&ref=$cle'\" />";
?><input type="button" value="Imprimer" onClick="window.print()" /></p>
<?php
echo "<table  witdh='500' class='tabresultat'>";

// Ligne d'entête du tableau
echo "<tr>";
for ($i=0;$i<$nb4col;$i++)
{// pour changer la couleur de la fleche ;color :#000
	if ( $cle == mysql_field_name($resSQL,$i) ) { $coulTri="style='color:#FFF'" ; } else { $coulTri="" ; }
	if ( $cle == mysql_field_name($resSQL,$i) && $tri == "ASC" ) 	{ $coulCleASC = "; color:#F00" ; } 	else { $coulCleASC="; color:#000" ; }
	if ( $cle == mysql_field_name($resSQL,$i) && $tri == "DESC" ) 	{ $coulCleDESC = "; color:#F00" ; } else { $coulCleDESC="; color:#000" ; }
	echo "<td class='button2' $coulTri>";
	echo " <a href='liste.php?table=$table&cle=".mysql_field_name($resSQL,$i)."&tri=ASC' style='text-decoration:none$coulCleASC'>&uarr;</a> ";
	echo mysql_field_name($resSQL,$i);
	echo " <a href='liste.php?table=$table&cle=".mysql_field_name($resSQL,$i)."&tri=DESC' style='text-decoration:none$coulCleDESC'>&darr;</a> ";
	echo "</td>";
}
//insertion des colonnes modif et suppression et concultation de fiche
echo "<td class='button2'>Mod.</td>";
echo "<td class='button2'>Sup.</td>";
echo "</tr>";

// Lignes de corps du tableau
for ($i=0;$i<$nblig;$i++) 
{
	$ligSQL = mysql_fetch_array($resSQL);
	if ( fmod($i,2) ) 
	{
		$impair = "1";
	}
	else
	{
		$impair = "0";
	}
	echo "<tr class='celresultat$impair'>";
	for ($j=0;$j<$nb4col;$j++) 
	{
		echo "<td class='button' >";
		switch ($j)
										  { //mail
											case'2':
											
											echo 'test'. $ligSQL[$j];
											
											break;
											
											
											case'3':
											echo"<a href='mailto:$ligSQL[$j]?SUBJECT=Demande d informations pour la base Formation'> $ligSQL[$j]</a>";
											break;
											 break; 
											
											 
											default :
											echo $ligSQL[$j];
											break;}
											
									
	
		echo "</td>";
	}
	echo "<td  class='button'onclick=\"window.location.href='mod.php?table=$table&ref=".$ligSQL['id']."' \" ><i class='fa fa-fw fa-pencil'></i> </td>";
	echo "<td class='celsup' onclick=\"if(confirm('Supprimer la fiche ".$ligSQL['id']." ?')) window.location.href='supp.php?table=$table&id=".$ligSQL['id']."' \" ></td>";

	echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
