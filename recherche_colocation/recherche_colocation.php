<?php $pageName='ColocToi - Recherche une colocation'; ?>
<?php include('../header/header.php') ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="recherche_colocation.css">');
    })
</script>

<div class="apart_accueil">
  <h2 class="content-img-accueil-text"> Vous recherchez <br> une colocation ? </h2>
  <p class="trajan slog">C'est mieux d'avoir de la compagnie</p>
</div>

<div class="formulaire_colocation">
  <p> Où cherchez-vous ? </p>
  <form class="" action="traitement_recherche_colocation.php" method="post" >
    <div>
      <label for="ville">Ville : </label>
      <input type="text" name="ville" value="" id="ville" placeholder="Paris, Lyon, Marseille, Lille, Toulouse, Nantes, Nice..." required autofocus>
    </div>
    <div>
      <label for="prix">Prix : </label>
      <span>
      <input type="range" name="prix" min="0" max="1500" step="50" value="0" oninput="result4.value=parseInt(prix.value)" id="prix"/>
        <output name="result4">--</output>€ <!-- permet de faire une sorte de compteur qui correspond à la position du curseur sur la barre-->
      </span>
    </div>
    <div>
      <label for="log">Logement</label>
      <select class="" name="log" id="log">
        <option value="no">--Sans importance--</option>
        <option value="appart">Appartement</option>
        <option value="maison">Maison</option>
      </select>
    </div>
    <div>
      <label for="type">Type</label>
      <select class="" name="type" id="type">
        <option value="no">--Sans importance--</option>
        <option value="1">T1</option>
        <option value="1-2">T1n2</option>
        <option value="2">T2</option>
        <option value="3">T3</option>
        <option value="4">T4</option>
        <option value="5">T5</option>
        <option value="6">T6</option>
        <option value="7">T7</option>
      </select>
    </div>
    <div>
      <label for="meuble">Meublé</label>
      <select class="" name="meuble" id="meuble">
        <option value="no">--Sans importance--</option>
        <option value="oui">Meublé</option>
        <option value="false">Non meublé</option>
      </select>
    </div>
    <input type="submit" name="" value="Valider" class="trajan" id="bouton">

  </form>
</div>

<?php include('../footer/footer.php') ?>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $( function() { //autocomplete
        var availableTags = [
        "Paris",
        "Marseille",
        "Toulouse",
        "Lyon",
        "Lille",
        "Nice",
        "Nantes",
        "Strabourg",
        "Toulon",
        "Angers",
        "Saumur",
        "Tours",
        "Montpellier",
        "Orléans"
        ];
      $( "#ville" ).autocomplete({
        source: availableTags
        });
      });

    })
</script>
