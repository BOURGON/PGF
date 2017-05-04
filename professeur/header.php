<?php
include('../function.php');
ProtectEspace::professeur($_SESSION['id'], $_SESSION['captcha'], $_SESSION['jeton'], $_SESSION['niveau']);
echo '<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Espace Membre en PHP - Par JejeScript et DBMwebdesign.fr</title>';
	  
include('../design/JejeScriptCss.php');

echo '</head>
<body>';
?>