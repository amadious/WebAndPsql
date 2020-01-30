<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
	include("connexion.inc.php");
	$resultats=$cnx->query('SELECT nom,prenom,type FROM adherent,specialiser,domaine WHERE adherent.id_adherent=specialiser.id_adherent AND domaine.id_domaine=specialiser.id_domaine;');
	echo "<table>\n<caption>Listes des adhérents et leur spécialisation</caption>\n";
	echo "<thead>\n<tr>\n<th>Nom</th>\n<th>Prénom</th>\n<th>Type de spécialisation</th>\n";
	echo "</tr>\n</thead>\n<tbody>\n";
	foreach($resultats as $ligne){
		$nom=$ligne[nom];
		$prenom=$ligne[prenom];
		$type=$ligne[type];

		echo "<tr>\n";
		echo "<td>$nom</td>\n";
		echo "<td>$prenom</td>\n";
		echo "<td>$type</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n</table>";
	$resultats->closeCursor();

?>