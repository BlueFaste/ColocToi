<!--Caroline Fassot-->
<?php
//permet de se déconnecter en détruisant la variable de session
session_start();
session_destroy();
header('Location: accueil/accueil.php');
exit();
?>
