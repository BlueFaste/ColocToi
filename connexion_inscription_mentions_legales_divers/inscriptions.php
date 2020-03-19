<?php $pageName='ColocToi - inscription'; ?>
<?php include('../header/header.php') ?>
<script type="text/javascript">
    // inclusion des feuilles de styles de pages dans le head avec la ligne de code ci-dessous
    $(document).ready(function(){
        $('head').append('<link rel="stylesheet" href="stylecreationf.css">');
    })
</script>
    <div class="fond">


        <div class="squarefond">
        <p class="paradedebus">Création de compte :<p>
        <!-- changer le nom de la page ci dessous -->
            <form action="verificationdinscription.php" method="post" class="flexformulaireinscriptions">

                <div class="supp">
                    <div class="inte">
                        <label for="nomregister" class="formelement">Nom :</label>
                        <input type="text" required name="nomregister"  autofocus>
                    </div>
                    <div class="inte">
                        <label for="prenomregister" class="formelement" style="padding-left: 5%">Prenom :</label>
                        <input type="text" required name="prenomregister"  class="spaceleft">
                    </div>
                </div>


                <div class="inte">
                <div class="spaceleftandtop">Date de naissance : </div>
                    <div class="supp">
                      <input type="number"  name="day" value="1" min="1" max="31" class="daymonth">
                      <input type="number"  name="month" value="1" min="1" max="12" class="daymonth; spaceleft">
                      <input type="number"  name="year" value="2000" min="1900" max="2002" class="spaceleft">
                    </div>
                </div>


                <div class="inte; spaceleft">
                <div class="spaceleftandtopbis">Mot de passe :</div>
                <div class="spaceleft"><input type="password" required name="mdpregister" ></div>
                </div>


                <div class="centrezmoica"><input type="submit" value="Suivant" class="boutoninscript ; formelement"></div>

             </form>
            <p class="paradefin">Déjà membre ? <a href="Connexion.php"><u>Connectez-vous</u></a></p>
            <p class="paradefinbis"> En continuant, vous acceptez les conditions générales et notre Politiques de confidentialité. </p>




        </div>
    </div>





<?php


    if(isset($_POST['mailregister']))
    {

        $_SESSION['mail'] = $_POST['mailregister'];
    }




?>



<?php include('../footer/footer.php') ?>

