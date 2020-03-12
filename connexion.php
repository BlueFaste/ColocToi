<?php $pageName='ColocToi - connexion'; ?>
<?php include('header.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>un titre</title>

    <link rel="stylesheet" type="text/css" href="stylecreationf.css">
</head>
<body>


    <div class="fond">
        
    
        <div class="squarefond">

        <p class="paradedebusdeux">Connexion :<p>
        <!-- changer le nom de la page ci dessous -->
            <form action="verificationdeconnexion.php" method="post" class="flexformulaireinscription"> 

                

                <label for="seco" class="formelement">Se connecter avec</label>
                <select id="seco" name="moyensDeConnexion">
                    <option value="Facebook" class="Facebook">Facebook</option>
                    <option value="Twitter" class="Twitter">Twitter</option>
                    <option value="Google" class="Google">Google</option>
                </select>
                <p>ou</p> 

                <label for="verifmail" class="formelement">Entrez votre adresse E-mail</label>
                <input type="email" name="verifmail" class="formuinscri" requiered >

                <label for="verifmdp" class="formelement">Mot de passe</label>
                <input type="password" name="verifmdp" class="formuinscri" requiered >
                <a href="mdpoublie.php"><u>Mot de passe oublié ?</u></a>


                <div class="centrezmoica">
                    <input type="submit" value="Suivant" class="boutoninscript ; formelement">
                </div>

             </form>
            <p class="paradefin">Pas encore membre ? <a href="Connexion.php"><u>inscrivez-vous</u></a></p>
            <p class="paradefinbis"> En continuant, vous acceptez les conditions générales et notre Politiques de confidentialité. </p>








        </div>
    </div>





<?php

include('lienversbdd.php');









?>




</body>
</html>