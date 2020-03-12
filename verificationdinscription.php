<?php session_start();?>
<?php

include('lienversbdd.php');


if(isset($_POST['nomregister'],$_POST['prenomregister'],$_POST['mdpregister']))
{
    if(isset($_SESSION['mail']))
    {

        if($_POST['nomregister'] != "" && $_POST['prenomregister'] != "" && $_POST['mdpregister'] != "")
        {

            $verif = true; //variable qui vérifie que tout est ok au niveau des valeurs entrées dans le formulaire
            
            // $rem = $connexion -> prepare('SELECT * FROM membre ORDER BY id DESC');
            // $rem -> execute();
            // while($ligne = $rem ->fetch()){
            // {
            //     $email = $ligne->mail;
            
            //     if( $_SESSION['mail'] == $email) 
            //     {
            //          $verif = false;
            //          echo "Cette adresse mail est déjà utilisée, <a href='pjfrnl.php'>cliquez ici pour recommencer </a>";
            //     break;
            //     }
            // }



            if($verif == true)
            {
            $req = $connexion -> prepare('INSERT INTO membre(nom,prenom,mail,mdp,tel) VALUES(:nom,:prenom,:mail,:mdp,:tel)');
                //c'est ici que l'on rentre les informations dans la base de donnée
            $req -> execute([ 

            ':nom' => $_POST['nomregister'],
            ':prenom' => $_POST['prenomregister'],
            ':mail' => $_SESSION['mail'],
            ':mdp' => $_POST['mdpregister'],
            ':tel' => "0783656565",
                //entrer les nouvelles colonnes de la base de donnée ici, ne pas oublier de modifier la ligne ci-dessus (avec VALUES etc...)

        
            ]);


    

            echo "<a href=accueil.php> Votre compte a bien été créé, cliquez ici pour retourner sur la page d'accueil</a>";
            }
        }
    }
    else
    echo "vous n'avez pas entré de mail valide <a href='inscriptionf.php'>Recommencez</a>";
}
else
echo "Ne laissez point de champs vide !";

?>

