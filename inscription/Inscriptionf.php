<!--Noé Leroi-->
<?php $pageName='ColocToi - inscription'; ?>
<?php require_once('../header/header.php') ?>
<script type="text/javascript">
    // inclusion des feuilles de styles de pages dans le head avec la ligne de code ci-dessous
    $(document).ready(function(){
        $('head').append('<link rel="stylesheet" href="../stylecreationf.css">');
    })
</script>

    <div class="fond">


        <div class="squarefond">

        <p class="paradedebus">Création de compte :</p>
        <!-- changer le nom de la page ci dessous -->
            <form action="inscriptions.php" method="post" class="flexformulaireinscription">



                <label for="seco" class="formelement">S'inscrire avec</label>
                <select id="seco" name="moyensDeConnexion">
                    <option value="Facebook" class="Facebook">Facebook</option>
                    <option value="Twitter" class="Twitter">Twitter</option>
                    <option value="Google" class="Google">Google</option>
                </select>
                <p>ou</p>

                <label for="mailregister" class="formelement">Entrez votre adresse E-mail</label>
                <input type="email" name="mailregister" id="mailregister" required >

                <div class="centrezmoica"><input type="submit" value="Suivant" class="boutoninscript ; formelement"></div>

             </form>
            <p class="paradefin">Déjà membre ? <a href="../connexion/connexion.php"><u>Connectez-vous</u></a></p>
            <p class="paradefinbis"> En continuant, vous acceptez les conditions générales et notre Politiques de confidentialité. </p>








        </div>
    </div>


<?php require_once('../footer/footer.php') ?>


