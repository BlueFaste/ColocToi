<!--Camille Varloud-->
<?php $pageName = 'ColocToi - Email déjà utilisé'; ?>
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
            Email déjà utilisé !
        </div>
        <form action="../connexion/connexion.php">
            <input type="submit" name="" value="Connectez-vous" class="content-img-accueil-inp trajan butt">
        </form>

    </div>
</div>


<?php include('../footer/footer.php') ?>


