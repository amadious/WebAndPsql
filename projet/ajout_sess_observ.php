<?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();
?>

<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="title" content="formulaire" />

		<link rel="stylesheet" href="style.css" type="text/css" /
	</head>

	<body>
	<?php 
			include("connexion.inc.php");
	$date_p = date("Y-m-d");	
	$resultats=$cnx->query("SELECT * FROM sortie where date_s > '$date_p' ");
	
	if ($resultats == 0){
		echo" y'a aucue sortie pour les prochains jours ." ; 
		echo "veuillez revenir plus tard .";
			
	}
	else {
	 echo "<table>\n<caption>Listes des sorties</caption>\n";
	 echo "<thead>\n<tr>\n<th>Id Sortie</th>\n<th>Thème</th>\n<th>Lieu</th>\n<th>Date_sortie</th>\n<th>Distance à parcourirs en km</th>\n<th>Effectif maximum</th>\n";
	 echo "</tr>\n</thead>\n<tbody>\n"	; 
	 foreach($resultats as $ligne){		
		$id=$ligne[id_sortie];
		$theme=$ligne[theme];
		$lieu=$ligne[lieu];
		$date=$ligne[date_s];
		$dist=$ligne[distance];
		$eff=$ligne[effectif_max];
		
		
		if ($date > $date_p){
		echo "<tr>\n";
		echo "<td>$id</td>\n";
		echo "<td>$theme</td>\n";
		echo "<td>$lieu</td>\n";
		echo "<td>$date</td>\n";
		echo "<td>$dist</td>\n";
		echo "<td>$eff</td>\n";
		echo "</tr>\n";
		}
		}
	}
	echo "</tbody>\n</table>";
	$resultats->closeCursor();	
	?>
		<form method"get" action="ajout_sess_verif_sort.php">
		<pre>
			<h1>Entrez le id de la sortie </p>
			Id sortie  :         <input type="text" name="id"/>
		</pre>
		<input type="submit" value="valider" />


	</body>
</html>

<?php	
	if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
		echo '<a href="loug_out.php"><img src="image/logout.jpg" alt="déconnexion" /></a>';
	}else {
		echo 'Les variables ne sont pas déclarées.';
	}
?>