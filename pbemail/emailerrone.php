<!--Camille Varloud-->
<?php $pageName = 'ColocToi - email erroné'; ?>
<?php require_once('../header/header.php') ?>

<script type="text/javascript">
    // inclusion des feuilles de styles de pages dans le header avec la ligne de code ci-dessous
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="../pb_email_mdp.css">');
    })
</script>

    <div class="apart_accueil">
        <div class="carre">

        <div class="motdepasse1">
            Vous n'avez pas entré de mail valide
          </div>
    <form action="../inscription/Inscriptionf.php">
        <input type="submit" name="" value="Réessayer" class="content-img-accueil-inp trajan butt">
    </form>

        </div> 
    </div>


<?php include('../footer/footer.php')?>
