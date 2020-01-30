<?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>NATURE</title>
        <link href="image/logo.jpeg" rel="shortcut icon" >
        <meta name="author" content="Smail & Darafify" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div id="page">
        <div id="logo">
            <h1><a href="/" id="logoLink">BIENVENUE dans l'espace membre</a></h1>
        </div>
        <div id="nav">
            <ul>
                <li><a href="home_sess.php">Acceuil</a></li>
                <li><a href="ajouter_sess.php">Ajouter</a></li>
                <li><a href="rechercher_sess.php">Rechercher</a></li>
                <li><a href="contact_sess.php">Contact</a></li>
                <li><a href="about_sess.php">A propos</a></li>
            </ul>   
        </div>
        <div id="content">
            <h2>Home</h2>
            <p>
                Bienvenue sur la page d'acceuil de l'association NATURE.
            </p>
        </div>  
        <div>
            <center>
                <img
                    src="image/foret.jpg"
                    alt="Paysage"
                    align="center" 
                    height=50%
                    width=50% 
                />
            </center>
        <p>
            
        </p>
        </div>      
        <div  class="end"> 
            | L2-Mahs/Informatique Projet NATURE 2017 BDD | 
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
        echo '<a href="loug_out.php"><img src="image/logout.jpg" alt="maison" /></a>';
    }else {
        echo 'Les variables ne sont pas déclarées.';
    }
?>