<!--Camille Varloud-->
<?php $pageName = 'ColocToi - Mot de passe erroné'; ?>
<?php require_once('../header/header.php') ?>

<script type="text/javascript">
    // inclusion des feuilles de style de pages dans le head avec la ligne de code ci-dessous
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="../pb_email_mdp.css">');
    })
</script>

<div class="apart_accueil">
    <div class="carre">

        <div class="motdepasse1">
            Mot de passe incorrect
        </div>
        <form action="../connexion/connexion.php">
            <input type="submit" name="" value="Valider" class="content-img-accueil-inp trajan butt">
        </form>


    </div>
</div>


<?php require_once('../footer/footer.php') ?>
