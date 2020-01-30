<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
	include("connexion.inc.php");
	$resultats=$cnx->query('SELECT nom,prenom,prix,moy_paiement,date_paiement FROM adherent,cotisation WHERE cotisation.id_cotisation=adherent.id_cotisation;');
	echo "<table>\n<caption>Listes des différents paiement</caption>\n";
	echo "<thead>\n<tr>\n<th>Nom</th>\n<th>Prénom</th>\n<th>Prix</th>\n<th>Moyen de paiement</th>\n<th>Date de paiement</th>\n";
	echo "</tr>\n</thead>\n<tbody>\n";
	foreach($resultats as $ligne){
		$nom=$ligne[nom];
		$prenom=$ligne[prenom];
		$prix=$ligne[prix];
		$moy=$ligne[moy_paiement];
		$date=$ligne[date_paiement];

		echo "<tr>\n";
		echo "<td>$nom</td>\n";
		echo "<td>$prenom</td>\n";
		echo "<td>$prix</td>\n";
		echo "<td>$moy</td>\n";
		echo "<td>$date</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n</table>";
	$resultats->closeCursor();

?>