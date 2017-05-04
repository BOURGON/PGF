<?php
	session_start();

	require_once('header.php');
	require_once('adminpanel/controller/indexFormController.php');
	require_once('adminpanel/controller/preInscriptionController.php');
	
	Index::dispatcher();



?>