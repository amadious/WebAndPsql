<?php
    session_start ();
?>

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
			$ids = $_GET['id'];
			$ida = $_SESSION['login'];
		?>
		<?php
			$res7 = $cnx->query('select * from participer');
			$resultat7 = $cnx->exec("insert into participer values ('$ida','$ids')");

			if ($resultat7 == 0) {
				echo " veuillez bien remplir le formulaire <a href=ajout_sess_observ.php>en suivant le lien </a> "; 
			}
			else{
				echo "vous êtes inscrit a la sortie ";
				echo "suivre le lien pour remplir a la page d'acceuille <a href=home_sess.php>en suivant le lien </a> ";
				
			}
			$res7->closeCursor();
			$resultat7->closeCursor();
		?>
	</body>
</html>


<?php	
	if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
		echo '<a href="loug_out.php"><img src="image/logout.jpg" alt="déconnexion" /></a>';
	}else {
		echo 'Les variables ne sont pas déclarées.';
	}
?>