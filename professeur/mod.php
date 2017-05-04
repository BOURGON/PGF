		<?php 
		 session_start();
		include('header.php');
		include('menu.php');
		// Connexion à la base mysql
		$connect_host='1';
		if ($connect_host> 0)    {$db_host = "localhost";$db_base = "creps54_inscription";$db_user = "creps54_creps54";$db_pass = "vr5qaa5wyx04lo40k8";} else {$db_host = "localhost:3306";$db_base = "test_espace_membre";$db_user = "root";$db_pass = "";}
		
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
		
		?>
		
		</head>
		<body>
		<?php 
        // memorisation de la variable de session table
        if (isset($_GET['table'])) { $_SESSION['table'] = $table = $_GET['table']; } else { $table = $_SESSION['table'] ; }
        if (isset($_GET['ref'])) { $_SESSION['ref'] = $ref = $_GET['ref']; } else { $ref = "" ; }
       
		
		if ( ! isset($_POST['action'])){?>
						<div class="clear">
					
									<?php 
								  
									if ( $ref= $_GET['ref'])
									{?>
                                     <!-- attention l 'action envoie les données dans le fichier action"le fichier" parle bouton submit -->
                                     <form id="form" method="post" action="mod.php">
                                     <!-- on recupere la valeur de ref-->
                                     <input type="hidden" name="ref" value="<?php echo $ref?>"/>
                                     <input type="hidden" name="table" value="<?php echo $table?>"/>
                                    <?php
                                                            
										
										
										
									$reqSQL = "SELECT pseudo,email,nom,prenom FROM $table WHERE id = '".$ref."'";
									
									$resSQL = mysql_query($reqSQL) or die('Requête invalide : ' . mysql_error()) ;
									//recuperer le nb des colonnes et lignes
									$nblig = mysql_num_rows($resSQL);
									$nbcol = mysql_num_fields($resSQL);
									
									// test si on modifie n° de la fiche - test si n° de ligne trouvé est different de zero donc => modif fiche trouvée
									if ($nblig)
									{
										//recupere la valeur de la fiche trouvée de la mysql dans la page sous forme de table
											$ligSQL = mysql_fetch_array($resSQL);
							
						
										echo "<table border ='1' align='center'>";
											
											// Ligne d'entête du tableau
											for ($i=0;$i<$nbcol;$i++)
											{
												//interroge si rubrique est ref pour ne pas l'afficher
												//on bloque la modification e la cle ref
												if(mysql_field_name($resSQL,$i) =="Ref"){$masque="readonly";}else{$masque="";}
												
												echo "<tr class='button'>";
												// on peut mettre du style dans le td pour aligner  gauche 
													echo "<td class='button'>";
													echo $i." - ".mysql_field_name($resSQL,$i);
													echo "</td>";
													echo "<td>";
													echo "</td>";
													echo "<td class='button2'>";
													echo "<div class='clear'><div class='input-box'><textarea class='message' name='tabsaisies[]' onblur='verifChamp(this)'onKeypress='if(event.keyCode==39||  event.keyCode==33  ||  event.keyCode==34||  event.keyCode==35 || event.keyCode==36|| event.keyCode==38 || event.keyCode==47 || event.keyCode==123 || event.keyCode==125) event.returnValue = false;if (event.which==39||  event.which==33  ||  event.which==34||  event.which==35 || event.which==36|| event.which==38 || event.which==47 || event.which==123 || event.which==125) return false;'>".$ligSQL[$i]."</textarea></div></div>";
											//echo "<input $masque type='text' style='background-color:#8f8f8f' value = '$ligSQL[$i]' name='tabsaisies[]' />";
											echo "<input type='hidden' value ='".mysql_field_name($resSQL,$i)."' name='tabrubriques[]'/>";
													
													
													
													echo "</td>";
												echo "</tr>\n";
											}
											
											echo "</table>";
					
					
						echo "<p align=center >";
					echo "<input type='reset' value='Annuler' onClick='window.close()'> ";
					//echo "<input type='reset' value='Annuler' onclick=\"window.location.href='liste.php?table=$table&cle=$cle&tri=$tri'\"/>";
					echo "<input type='submit' value='Valider' name='action'/></p>";
					
					}
					//fin du test si la ligne est nulle si elle est nulle alors on repart sur la page liste php
					else
					{
						echo "<script language='javascript'>alert ('La fiche n°$ref \'existe pas ')</script>'";
						echo "<script language='javascript'>window.location.href='liste.php'</script>'";
					}
					}
					//retour a la page liste si il y a rien dans le guest de l'url
					else{
						echo "<script language='javascript'>window.location.href='liste.php'</script>'";
						}
					?>
					</form>
					</div>
					<?php
					// fin de l'action du bouton valider cette accolade-> Si aucune action est vue affiche de le masque de saisie
}

			else
			{// si une action avec le bouton est vue il faut traiter l'ajout des données saisies a la base mysql
						$values = $_POST['tabsaisies'];
						
						//$ rubriques est un tableau ainsi que value
						$rubriques = $_POST['tabrubriques'];
						
						//recuperation de l valeur ref
						$ref = $_POST['ref'];
						$affectation='';
						 echo var_dump($_POST);
					// boucles pour construire la requete qui met a jour les champs attention au ;
					// lsi on laisse -1 on perd pass il nefait que 2 boucles for ($i= 1; $i <count($values)-1;$i++)
					for ($i= 1; $i <count($values);$i++)
							{
								//affecttion = affecattion+
								$affectation.= $rubriques[$i]."='".$values[$i]."',";
								
								//on une chaine des valeurs mais avec une virgule de trop
							}
						$affectation=substr($affectation,0,-1);
											 

					
					$reqSQL = "UPDATE $table SET $affectation WHERE id='".$ref."'";
					$resSQL = mysql_query($reqSQL) or die('Requête invalide pour une insertion : ' . mysql_error()) ;
					
					switch( $_POST['action'] )
								{
									case "Valider" :
									/*echo "<script language='javascript'>window.close()</script>";*/
									echo "<script language='javascript'>window.location.href='liste.php'</script>'";
									
									default : 
										if ($debug < 2) echo "<script language='javascript'>window.location.href='liste.php'</script>'";
								}
			
				
				}

?>
</body>

</html>
