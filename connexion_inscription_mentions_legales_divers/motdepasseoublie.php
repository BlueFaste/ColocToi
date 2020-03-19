<?php $pageName = 'ColocToi - Mot de passe oublié'; ?>

<?php include('../header/header.php') ?>

<script type="text/javascript">
    // inclusion des feuilles de styles de pages dans le head avec la ligne de code ci-dessous
    $(document).ready(function(){
        $('head').append('<link rel="stylesheet" href="stylecreationf.css">');
    })
</script>

    <div class="apart_accueil">
        <div class="carre">

        <div class="motdepasse1">
Mot de passe oublié ?
          </div>
<div class="email">
          <label for="mailregister" class="formelement">Entrez votre adresse E-mail</label>

          </div>
          <div class="email2">
                <input type="email" name="mailregister" required >
          </div>

    <input type="submit" name="" value="Valider" class="content-img-accueil-inp trajan butt">


        </div> 
    </div>

<?php include('../footer/footer.php') ?>

