<?php
session_start();
session_destroy();
header('Location: accueil.php');
exit();
 ?>
 <!-- <a href="accueil.php"> Retour à l'accueil </a> -->
