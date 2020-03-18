<?php include('../header/header.php') ?>

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


<?php include('../footer/footer.php')?>

<script type="text/javascript">
    $(document).ready(function(){
        $('head').append('<link rel="stylesheet" href="emailfalse.css">');
    })
</script>
