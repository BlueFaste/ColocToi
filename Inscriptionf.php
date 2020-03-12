<?php $pageName='ColocToi - inscription'; ?>
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

        <p class="paradedebus">Création de compte :<p>
        <!-- changer le nom de la page ci dessous -->
            <form action="inscriptions" method="post" class="flexformulaireinscription"> 

                

                <label for="seco" class="formelement">S'inscrire avec</label>
                <select id="seco" name="moyensDeConnexion">
                    <option value="Facebook" class="Facebook">Facebook</option>
                    <option value="Twitter" class="Twitter">Twitter</option>
                    <option value="Google" class="Google">Google</option>
                </select>
                <p>ou</p> 

                <label for="mailregister" class="formelement">Entrez votre adresse E-mail</label>
                <input type="email" name="mailregister" requiered >

                <div class="centrezmoica"><input type="submit" value="Suivant" class="boutoninscript ; formelement"></div>

             </form>
            <p class="paradefin">Déjà membre ? <a href="Connexion.php"><u>Connectez-vous</u></a></p>
            <p class="paradefinbis"> En continuant, vous acceptez les conditions générales et notre Politiques de confidentialité. </p>








        </div>
    </div>





<?php


?>




</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('head').append('<link rel="stylesheet" href="accueil.css">');
    })
  </script>

</html>
