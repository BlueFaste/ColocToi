<?php $pageName = 'ColocToi - email erroné'; ?>
<?php include('../header/header.php') ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="pbinscription_connexion.css">');
    })
</script>

    <div class="apart_accueil">
        <div class="carre">

        <div class="motdepasse1">
            Vous n'avez pas entré de mail valide
          </div>
    <form action="Inscriptionf.php">
        <input type="submit" name="" value="Réessayer" class="content-img-accueil-inp trajan butt">
    </form>

        </div> 
    </div>


<?php include('../footer/footer.php')?>
