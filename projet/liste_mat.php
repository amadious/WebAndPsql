<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
	include("connexion.inc.php");
	$resultats=$cnx->query('SELECT * FROM materiels');
	echo "<table>\n<caption>Listes du matériel</caption>\n";
	echo "<thead>\n<tr>\n<th>Id matériel</th>\n<th>Type</th>\n";
	echo "</tr>\n</thead>\n<tbody>\n";
	foreach($resultats as $ligne){
		$id=$ligne[id_mat];
		$type=$ligne[type_mat];

		echo "<tr>\n";
		echo "<td>$id</td>\n";
		echo "<td>$type</td>\n";
		echo "</tr>\n";
	}
	echo "</tbody>\n</table>";
	$resultats->closeCursor();

?>