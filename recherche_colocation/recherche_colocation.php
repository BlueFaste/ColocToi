<!--Caroline Fassot-->
<?php $pageName = 'ColocToi - Recherche une colocation'; ?>
<?php require_once('../header/header.php') ?>

<script type="text/javascript">
    $(document).ready(function () {
        // inclusion des feuilles de style de pages dans le head avec la ligne de code ci-dessous
        $('head').append('<link rel="stylesheet" href="recherche_colocation.css">');
    })
</script>

<div class="apart_accueil">
    <h2 class="content-img-accueil-text"> Vous recherchez <br> une colocation ? </h2>
    <p class="trajan slog">C'est mieux d'avoir de la compagnie</p>
</div>

<div class="formulaire_colocation">
    <p> Où cherchez-vous ? </p>
    <form class="" action="traitement_recherche_colocation.php" method="post">
        <div>
            <label for="ville">Ville : </label>
            <input type="text" name="ville" value="" id="ville"
                   placeholder="Paris, Lyon, Marseille, Lille, Toulouse, Nantes, Nice..." required autofocus>
        </div>
        <div>
            <label for="loyer">Loyer : </label>
            <span>
      <input type="range" name="loyer" min="0" max="1500" step="50" value="0"
             oninput="result4.value=parseInt(loyer.value)" id="loyer"/>
        <output name="result4">--</output>€
                <!-- permet de faire une sorte de compteur qui correspond à la position du curseur sur la barre-->
      </span>
        </div>
        <div>
            <label for="type_logement">Logement</label>
            <select class="" name="type_logement" id="type_logement">
                <option value="no">--Sans importance--</option>
                <option value="appartement">Appartement</option>
                <option value="maison">Maison</option>
            </select>
        </div>
        <div>
            <label for=nb_piece>Nombre de pièce</label>
            <select class="" name=nb_piece id=nb_piece>
                <option value="no">--Sans importance--</option>
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
                <option value="true">Meublé</option>
                <option value="false">Non meublé</option>
            </select>
        </div>
        <input type="submit" name="" value="Valider" class="trajan" id="bouton">

    </form>
</div>

<?php require_once('../footer/footer.php') ?>

<script type="text/javascript">
    $(document).ready(function () {

        $(function () { //autocomplete l'input avec l'id ville
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
            $("#ville").autocomplete({
                source: availableTags
            });
        });

    })
</script>
