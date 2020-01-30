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
				<li><a href="rechercher_sess.php">Rechercher</a></li>
				<li><a href="contact_sess.php">Contact</a></li>
				<li><a href="about_sess.php">A propos</a></li>
			</ul>	
		</div>
		<h1>Choisir les tables a modifier:</h1>
		<div id="content">
			<li><a href="ajout_sess_observ.php">Participer à une sortie</a></li>		
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