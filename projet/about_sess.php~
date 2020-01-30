<?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();
?>
<!DOCTYPE html>
<html>
<head>
    <title>NATURE</title>
	<link href="image/logo.jpeg" rel="shortcut icon" >
	<meta name="author" content="smail" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
</head>
<body>



	<div id="page">
		<div id="logo">
		</div>
		<div id="nav">
			<ul>
				<li><a href="home_sess.php">Acceuil</a></li>
				<li><a href="ajouter_sess.php">Ajouter</a></li>
				<li><a href="rechercher_sess.php">Rechercher</a></li>
				<li><a href="contact_sess.php">Contact</a></li>
			</ul>	
		</div>
		<div id="content">
			<h1>A propos</h1>
			<p>
				Ce site web a été créé par OUKSILI Smail et MARIMANJAKA darafify dans le cadre du projet de base de donnée ded l'année 2017/2018.</br>
			</p>
			<p> 
				Ainsi, le site permet de naviguer aisément dans la base de donnée.</br>
				On peut y faire des recherches avec différentes requetes mais également des insertion dans la base de donnée.</br>
				Nous avons également cherché a créé un site web qui suit le thème de la nature dans son esthétique (thème vert).</br>
			</p>
		</div>	
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[SMAIL & DARAFIFY]</a>
			</p>
		</div>
	</div>
</body>
</html>

<?php	
	if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
		echo '<a href="loug_out.php"><img src="image/logout.png" alt="déconnexion" /></a>';
	}else {
		echo 'Les variables ne sont pas déclarées.';
	}
?>