<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <!--feuille de style jquery ui-->
    <link rel="stylesheet" href="/resources/demos/style.css"> <!--feuille de style jquery ui-->
    <link rel="stylesheet" href="https://use.typekit.net/phy2ehf.css"> <!-- implantation font adobe-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <title><?php echo $pageName ?></title>
  </head>
  <body>
    <header>
      <h1 class="">
        <a href="../accueil/accueil.php"><img src="../img/header/LOGO_FINAL.png" alt="ColocToi - Trouve ta colocation" id="logo"/></a>
      </h1>
      <nav class="">
        <p><a href="../recherche_colocation/recherche_colocation.php"><img src="../img/header/loupe_recherche.png"/></a><a href="../recherche_colocation/recherche_colocation.php"> Recherche </a></p>
        <p><a href="" > Faites-nous confiance </a></p>
        <p><a href="../poster_un_appartement/poster_un_appartement.php" > Poster </a></p>
        <?php if(!empty($_SESSION['log'])){ ?>
          <p><a href="" > Mes publications </a></p>
          <p><a href="" > Mon compte </a></p>
          <p id="logOut"><a href="../logOut.php"> Déconnexion </a></p>
          <?php }
          else{ ?>
        <p><a href="../connexion_inscription_mentions_legales_divers/connexion.php" > Connexion </a></p>
        <p><a href="../connexion_inscription_mentions_legales_divers/Inscriptionf.php" > Inscription </a></p>
        <?php } ?>
      </nav>

    </header>
