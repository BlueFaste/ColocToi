<?php
session_start();
$_SESSION['log']="test";
header('Location: accueil.php');
exit();
 ?>
