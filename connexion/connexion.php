<!--Noé Leroi-->
<?php $pageName = 'ColocToi - Connexion'; ?>
<?php require_once('../header/header.php') ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="../stylecreationf.css">');
    })
</script>


<div class="fond">


    <div class="squarefond">

        <p class="paradedebusdeux">Connexion :</p>
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
            <input type="email" id="verifmail" name="verifmail" class="formuinscri" required>

            <label for="verifmdp" class="formelement">Mot de passe</label>
            <input type="password" id="verifmdp" name="verifmdp" class="formuinscri" required>
            <a href="../pbmdp/motdepasseoublie.php"><u>Mot de passe oublié ?</u></a>


            <div class="centrezmoica">
                <input type="submit" value="Suivant" class="boutoninscript ; formelement">
            </div>

        </form>
        <p class="paradefin">Pas encore membre ? <a href="../inscription/Inscriptionf.php"><u>inscrivez-vous</u></a></p>
        <p class="paradefinbis"> En continuant, vous acceptez les conditions générales et notre Politiques de
            confidentialité. </p>

    </div>
</div>


<?php
include('../footer/footer.php') ?>



