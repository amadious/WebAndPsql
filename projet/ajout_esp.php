<!DOCTYPE html>
	<html>
		<head>
			<title>ajout de matériel</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  			<meta name="title" content="ajout espece" />
  			<style type="text/css" media="screen">
  				p { color:blue; }
  			</style>
		</head>
	<body>
		<?php 
			include("connexion.inc.php");	
 		?>
 		<?php  
			 $mat = $_GET['type'];
			 $type = $_GET['coulor'];
			 $nb = $_GET['nb_patte'];
			 $ailes = $_GET['ailes'];
			 $infos = $_GET['infos'];
		?>
		<?php
		   $res4= $cnx->query('select count(*) from especes');	
			$count = $res4->fetch();
			$id = $count[0]+1;

			$resultat4 = $cnx->exec("insert into especes values('$id','$mat','$type','$nb','$ailes','$infos')");
			if ($resultat4 == 0) {
				echo " veuillez bien remplir le formulaire <a href=ajout_esp.html>en suivant le lien </a> "; 
			}
			else{
				echo "l'éspece a été ajoutée ";
			}
			$res4->closeCursor();
			$resultat4->closeCursor();
		?>
	</body>
</html>