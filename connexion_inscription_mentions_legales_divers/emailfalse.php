<?php $pageName = 'ColocToi - Mauvais email'; ?>
<?php include('../header/header.php') ?>

<script type="text/javascript">
    // inclusion des feuilles de styles de pages dans le head avec la ligne de code ci-dessous
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="stylecreationf.css">');
    })
</script>

    <div class="apart_accueil">
        <div class="carre">

        <div class="motdepasse1">
            Email incorrecte
          </div>
    <form action="connexion.php">
        <input type="submit" name="" value="Valider" class="content-img-accueil-inp trajan butt">
    </form>

        </div> 
    </div>


<?php include('../footer/footer.php') ?>


