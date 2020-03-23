<!--Caroline Fassot-->
<?php
//permet de se déconnecter en détruisant la variable de session
session_start();
session_destroy();
//redirige vers l'accueil
header('Location: accueil/accueil.php');
exit();
?>
