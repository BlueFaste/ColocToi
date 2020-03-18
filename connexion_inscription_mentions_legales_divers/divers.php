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

        <p class="paradedebus">Création de compte :<p>
        <!-- changer le nom de la page ci dessous -->
            <form action="/action_page.php" class="flexformulaireinscription"> 

                

                <label for="seco" class="formelement">S'inscrire avec</label>
                <select id="seco" name="moyensDeConnexion">
                    <option value="Facebook" class="Facebook">Facebook</option>
                    <option value="Twitter" class="Twitter">Twitter</option>
                    <option value="Google" class="Google">Google</option>
                </select>
                <p>ou</p> 

                <label for="mailregister" class="formelement">Entrez votre adresse E-mail</label>
                <input type="email" id="mailregister" requiered name="mailregister"  >

                <div class="centrezmoica"><input type="submit" value="Suivant" class="boutoninscript ; formelement"></div>

             </form>
            <p class="paradefin">Déjà membre ? <a href="Connexion.php"><u>Connectez-vous</u></a></p>
            <p class="paradefinbis"> En continuant, vous acceptez les conditions générales et notre Politiques de confidentialité. </p>








        </div>
    </div>





<?php

















?>




</body>
</html>