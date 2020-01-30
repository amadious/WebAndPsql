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
				<li><a href="about_sess.php">A propos</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>Contact</h2>
			<p>
				MARIMANJAKA Darafify</br>
				Mail: dmariman@etud.u-pem.fr
			</p>
			<p> 
				OUKSILI Smail</br>
				Mail: souksili@etud.u-pem.fr
			</p>
		</div>	
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[SMAIL & DRAFIFI]</a>
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