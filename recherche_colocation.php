<?php $pageName='ColocToi - Recherche une colocation'; ?>
<?php include('header.php') ?>
<div class="apart_accueil">
  <h2 class="content-img-accueil-text"> Vous recherchez <br> une colocation ? </h2>
  <p class="trajan slog">C'est mieux d'avoir de la compagnie</p>
</div>

<div class="formulaire_colocation">
  <p> Où cherchez-vous ? </p>
  <form class="" action="index.html" method="post" >
    <div>
      <label for="ville">Ville : </label>
      <input type="text" name="ville" value="" id="ville">
    </div>
    <div>
      <label for="code_postal">Code postal : </label>
      <input type="text" name="cp" value="" id="code_postal">
    </div>
    <div>
      <label for="prix">Prix : </label>
      <span>
      <input type="range" name="prix" min="0" max="1500" step="50" value="" oninput="result4.value=parseInt(prix.value)" id="prix"/>
        <output name="result4">--</output>€ <!-- permet de faire une sorte de compteur qui correspond à la position du curseur sur la barre-->
      </span>
    </div>
    <div>
      <label for="log">Logement</label>
      <select class="" name="" id="log">
        <option value="appart">Appartement</option>
        <option value="maison">Maison</option>
      </select>
    </div>
    <div>
      <label for="meuble">Meublé</label>
      <select class="" name="" id="meuble">
        <option value="meuble">Meublé</option>
        <option value="non_meuble">Non meublé</option>
      </select>
    </div>
    <input type="submit" name="" value="Valider" class="trajan">

  </form>
</div>

<?php include('footer.php') ?>


<script type="text/javascript">
  $(document).ready(function(){
    $('head').append('<link rel="stylesheet" href="recherche_colocation.css">');
  })
</script>
