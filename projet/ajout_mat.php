<!DOCTYPE html>
	<html>
		<head>
			<title>ajout de matériel</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="title" content="ajout matériels" />
			<style type="text/css" media="screen">
				p { color:blue; }
			</style>
		</head>
		<body>
			<?php 
				include("connexion.inc.php");
			?>
			<?php  
				$mat = $_GET['mat'];
				?>
				<?php
				$res3= $cnx->query('select count(*) from materiels');
				$count = $res3->fetch();
				$id = 4000 + $count[0];
				
				$resultat3 = $cnx->exec("insert into materiels(id_mat,type_mat) values('$id','$mat')");


				if ($resultat3 == 0) {
				echo " veuillez bien remplir le formulaire <a href=ajout_mat.html>en suivant le lien </a> "; 
				}
				else{
				echo "le matériel a été ajouté ";
				}
				$res3->closeCursor();
				$resultat3->closeCursor();
			?>
		</body>
</html>
