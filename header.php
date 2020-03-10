<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://use.typekit.net/phy2ehf.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <title><?php echo $pageName ?></title>
  </head>
  <body>
    <header>
      <h1 class="">
        <a href="accueil.php"><img src="img/header/LOGO_FINAL.png" alt="ColocToi - Trouve ta colocation" id="logo"/></a>
      </h1>
      <nav class="">
        <p><img src="img/header/loupe_recherche.png"/> Recherche </p>
        <p><a href="" > Faites-nous confiance </a></p>
        <p><a href="" > Poster </a></p>
        <?php if(!empty($_SESSION['log'])){ ?>
          <p><a href="" > Mes publications </a></p>
          <p><a href="" > Mon compte </a></p>
          <p id="logOut"><a href="logOut.php"> Déconnexion </a></p>
          <?php }
          else{ ?>
        <p><a href="logIn.php" > Connexion </a></p>
        <p><a href="" > Inscription </a></p>
        <?php } ?>
      </nav>

    </header>
