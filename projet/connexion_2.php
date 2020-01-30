 <?php
	session_start ();        
	include("connexion.inc.php");
    // on teste si nos variables sont définies
    if (isset($_POST['login']) && isset($_POST['pwd'])) {
	 	
    	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	 	
	 	$resultat=$cnx->query('SELECT * FROM adherent');
	 	
	 	foreach($resultat as $ligne){
	 			if($ligne['id_adherent'] == $_POST['login'] && $ligne['pass'] == $_POST['pwd']) {
	 					$_SESSION['login'] = $_POST['login'];
    					$_SESSION['pwd'] = $_POST['pwd'];		
						header ('location:connexion.php');				
				}
				else {
						echo '<body onLoad="alert(\'Membre non reconnu...\')">';
    					// puis on le redirige vers la page d'accueil
    					echo '<meta http-equiv="refresh" content="0;URL=connexion.html">';
    	      }
	    }
   }
    else {
    	echo 'Les variables du formulaire ne sont pas déclarées.';
    }
    
    ?>
    
