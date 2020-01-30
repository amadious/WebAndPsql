<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
	include("connexion.inc.php");
	$resultats=$cnx->query('SELECT * FROM especes');
	echo "<table>\n<caption>Listes des espèces répertorier</caption>\n";
	echo "<thead>\n<tr>\n<th>Id espèces</th>\n<th>Type espèces</th>\n<th>Couleur</th>\n<th>Nombre de pattes</th>\n<th>Forme des ailes</th>\n<th>Infos</th>\n";
	echo "</tr>\n</thead>\n<tbody>\n";
	foreach($resultats as $ligne){
		$id=$ligne[id_esp];
		$type=$ligne[type_esp];
		$color=$ligne[couleur];
		$npat=$ligne[nb_patte];
		$ailes=$ligne[ailes];
		$inf=$ligne[informations_supp];

		echo "<tr>\n";
		echo "<td>$id</td>\n";
		echo "<td>$type</td>\n";
		echo "<td>$color</td>\n";
		echo "<td>$npat</td>\n";
		echo "<td>$ailes</td>\n";
		echo "<td>$inf</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n</table>";
	$resultats->closeCursor();

?>