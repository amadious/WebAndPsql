<!DOCTYPE html>
<html>
	<head>
		<title>Ajout de matériel</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="title" content="Ajout nichoirs" />
		<style type="text/css" media="screen">
			p { color:blue; }
		</style>
	</head>
	<body>
		<?php 
			include("connexion.inc.php");
		?>
		<?php  
			$date = $_GET['date'];
			$lieu = $_GET['lieu'];
		?>
		<?php
			$res6= $cnx->query('select count(*) from nichoirs');
			$count = $res6->fetch();
			$id = 61 + $count[0];
			$resultat6 = $cnx->exec("insert into nichoirs values('$id','$date','$lieu')");
			if ($resultat6 == 0) {
			echo " veuillez bien remplir le formulaire <a href=ajout_nich.html>en suivant le lien </a> "; 
			}
			else{
			echo "le nichoir a été ajouté ";
			}
			$res6->closeCursor();
			$resultat6->closeCursor();
		?>
	</body>
</html>