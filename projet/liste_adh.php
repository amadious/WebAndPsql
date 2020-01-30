<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
	include("connexion.inc.php");
	$resultats=$cnx->query('SELECT * FROM adherent');
	echo "<table>\n<caption>Listes des adhérents</caption>\n";
	echo "<thead>\n<tr>\n<th>Id Adhérent</th>\n<th>Id cotisation</th>\n<th>Nom</th>\n<th>Prénom</th>\n<th>Adresse</th>\n<th>N° tel</th>\n<th>Statut</th>\n";
	echo "</tr>\n</thead>\n<tbody>\n";
	foreach($resultats as $ligne){
		$id_adh = $ligne[id_adherent];
		$id_cot = $ligne[id_cotisation];
		$nom=$ligne[nom];
		$prenom=$ligne[prenom];
		$adresse=$ligne[adresse];
		$tel=$ligne[n_tel];
		$stat=$ligne[statut];

		echo "<tr>\n";
		echo "<td>$id_adh</td>\n";
		echo "<td>$id_cot</td>\n";
		echo "<td>$nom</td>\n";
		echo "<td>$prenom</td>\n";
		echo "<td>$adresse</td>\n";
		echo "<td>$tel</td>\n";
		echo "<td>$stat</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n</table>";
	$resultats->closeCursor();
 ?>