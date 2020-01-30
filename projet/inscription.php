<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
// Afficher les erreurs et les avertissements
error_reporting(E_STRICT);
?>

<!DOCTYPE html>
<html>
 
 <head>
 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 

  <meta name="title" content="saisir" />
  <meta name="description" content="exo1"/>
  <meta name="keywords" content="bonjour"/>
 
  <style type="text/css" media="screen">
  p { color:blue; }
  </style>
 
 
 </head>
 
 
 <body>
	 <?php include('connexion.inc.php');?>
	<?php $prenom = $_GET['prenom'];
		   $nom = $_GET['nom'];
		   $adresse	= $_GET['adresse'];	  
		   $tel = $_GET['tel'];
		   $moy = $_GET['moy'];
		   $pass = $_GET['pwd'];
		   $statut = $_GET['statut'];
		  	$date_p = date("Y-m-d");
		   
	?>
		
			<?php
							
				if($statut == 1) {
						$prix = 30 ;				
				}
				elseif($statut == 2) {
						$prix = 15 ;
					}
				elseif($statut == 3) {
						$prix = 20 ;					
					}
				else { 
					   $prix = 40 ;				
				}

				$rr = $res2 = $cnx->query('select * from cotisation');
				$resultat2= $cnx->exec("insert into cotisation(prix,moy_paiement,date_paiement ,statut) values('$prix','$moy','$date_p','$statut')");				
				$res2 = $cnx->query('select count(*) from cotisation');
				$count = $res2->fetch();
				$cotisation = $count[0]; 
	
				if($resultat2 == 0)
	{
	echo "<br>Erreur lors de l ajout de votre cotisation ";
	echo("</br><br>Merci de Remplir <a href=inscription.html>ce formulaire</br>");
	
	}
		
		
		
				$res=$cnx->query('select * from adherent');
				$resultat= $cnx->exec("insert into adherent(nom,id_cotisation,prenom,n_tel,statut,adresse,pass) values('$nom','$cotisation','$prenom','$tel','$statut','$adresse','$pass')"); 
	if($resultat == 0)
	{
	echo "<br>Erreur lors de l ajout de votre adherent ";
	echo("</br><br>Merci de Remplir <a href=inscription.html>ce formulaire</br>");
	
	}
	else{
		echo "Bravo vous venez de vous êtes inscrit !!!";
		echo("</br><br>pour revenir a la page accueil  <a href=home.html>suivez ce lien</br>");
	}

		$resultats->closeCursor(); 
		$res->closeCursor();
		$res2->closeCursor();
		$resultat2->closeCursor();
		?>
		
		
 
 </body>
</html>

