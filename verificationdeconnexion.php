<?php session_start();?>
<?php

include('lienversbdd.php');

// Page permettant de vérifier si les informations entrées pour se connecter sont correctes

if(isset($_POST['verifmail'],$_POST['verifmdp']))
{


        $verif = false;


        $rem = $connexion -> prepare('SELECT * FROM membre ORDER BY id DESC');
        $rem -> execute();
        while($ligne = $rem ->fetch())
        {



            $mail = $ligne->mail;
            $mdp = $ligne->mdp;

            if( ($_POST['verifmail'] == $mail) && (password_verify($_POST['verifmdp'],$mdp)) )
            {
                $verif = true;
            break;
            }





        }

    if($verif == true)
    {
        echo "vous êtes connecté(e) ! <a href='accueil.php'>Cliquez ici pour revenir a la page d'accueil</a>";
        $_SESSION['log'] = true;
        header('Location: accueil.php');
    }
    else
    {
        echo "votre adresse mail et votre mot de passe ne correspondent pas<br><a href='connexion.php'>Cliquez ici pour revenir à la page de connexion </a>";
    }







}
else
{
echo "Hey ! Vous n'êtes pas sencés être ici !";
echo "<br><a href='accueil.php'>Hop hop cliquez ici pour repartir</a>";
}


?>
