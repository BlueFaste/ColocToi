<?php session_start() ?>
<!--On met en route les sessions pour pouvoir utiliser des variables de sessions-->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <!--feuille de style jquery ui-->
    <link rel="stylesheet" href="https://use.typekit.net/phy2ehf.css"> <!-- implantation font adobe-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.js"></script> <!-- implantation de jquery-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!-- implantation de jquery ui-->
    <title><?php echo $pageName ?></title>
    <!-- La variable pageName sera remplite en haut de chaque code avant l'inclusion du header pour donner un nom différent à chaque page-->
</head>
<body>
<header>
    <h1 class="">
        <a href="../accueil/accueil.php"><img src="../img/header/LOGO_FINAL.png" alt="ColocToi - Trouve ta colocation"
                                              id="logo"/></a>
    </h1>
    <nav class="">
        <p><a href="../recherche_colocation/recherche_colocation.php"><img src="../img/header/loupe_recherche.png"
                                                                           alt="Recherche"/></a><a
                    href="../recherche_colocation/recherche_colocation.php"> Recherche </a></p>
        <p><a href=""> Faites-nous confiance </a></p>
        <p><a href="../poster_un_appartement/poster_un_appartement.php"> Poster </a></p>
		<?php if (!empty($_SESSION['log'])) { ?>
            <!--            si l'utilisateur est connecté, ce qu'on vérifie avec la variable $_SESSION['log'] le header est modifié-->
            <p><a href=""> Mes publications </a></p>
            <p><a href=""> Mon compte </a></p>
            <p id="logOut"><a href="../logOut.php"> Déconnexion </a></p>
		<?php } else { ?>
            <p><a href="../connexion/connexion.php"> Connexion </a></p>
            <p><a href="../inscription/Inscriptionf.php"> Inscription </a></p>
		<?php } ?>
    </nav>

</header>
