<!DOCTYPE html>
<html>
	<head>
		<title>Ajout de matériel</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="title" content="saisir" />
		<meta name="description" content="ajouter sortie"/>
		<style type="text/css" media="screen">
			p { color:blue; }
		</style>
	</head>
	<body>
		<?php 
			include("connexion.inc.php");
		?>
		<?php  
			$theme = $_GET['theme'];
			$lieu = $_GET['lieu'];
			$date = $_GET['date'];
			$d = $_GET['distance'];
			$effectif = $_GET['effectif'];
		?>
		<?php
			$res5= $cnx->query('select count(*) from sortie');
			$count = $res5->fetch();
			$id = 1001 + $count[0];
						
			$resultat5 = $cnx->exec("insert into sortie values('$id','$theme','$lieu','$date','$d','$effectif')");
			if ($resultat5 == 0) {
			echo " Veuillez bien remplir le formulaire <a href=ajout_sortie.html>en suivant le lien </a> "; 
			}
			else{
			echo "la sortie est ajoutée ";
			}
			$res5->closeCursor();
			$resultat5->closeCursor();
		?>

	</body>
</html>