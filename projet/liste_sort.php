<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
	include("connexion.inc.php");
	$resultats=$cnx->query('SELECT * FROM sortie');
	echo "<table>\n<caption>Listes des sorties</caption>\n";
	echo "<thead>\n<tr>\n<th>Id Sortie</th>\n<th>Thème</th>\n<th>Lieu</th>\n<th>Date sortie</th>\n<th>Distance à parcourirs en km</th>\n<th>Effectif maximum</th>\n";
	echo "</tr>\n</thead>\n<tbody>\n";
	foreach($resultats as $ligne){
		$id=$ligne[id_sortie];
		$theme=$ligne[theme];
		$lieu=$ligne[lieu];
		$date=$ligne[date_s];
		$dist=$ligne[distance];
		$eff=$ligne[effectif_max];

		echo "<tr>\n";
		echo "<td>$id</td>\n";
		echo "<td>$theme</td>\n";
		echo "<td>$lieu</td>\n";
		echo "<td>$date</td>\n";
		echo "<td>$dist</td>\n";
		echo "<td>$eff</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n</table>";
	$resultats->closeCursor();

?>