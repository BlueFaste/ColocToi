<!--Caroline Fassot -->

<?php $pageName = 'ColocToi - Accueil'; ?>
<?php require_once('../header/header.php') ?>
<!--On donne un nom à la page en donnant une valeur à la variable pageName puis on inclut le header-->

<script type="text/javascript">
    // inclusion des feuilles de style de pages dans le head avec la ligne de code ci-dessous
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="accueil.css">');
    })
</script>

<div class="apart_accueil">
    <h2 class="content-img-accueil-text"> Vous recherchez <br> un coloc ? </h2>
    <a href="../poster_un_appartement/poster_un_appartement.php"><input type="submit" name="" value="Poster"
                                                                        class="content-img-accueil-inp trajan butt"></a>
</div>

<div class="int_accueil">
    <h2 class=""> Vous recherchez une colocation ? </h2>
    <p class="trajan"> Trouver une colocation de confiance avec ColocToi </p>
    <a href="../recherche_colocation/recherche_colocation.php"><input type="submit" name="" value="Rechercher"
                                                                      class="trajan butt"></a>
</div>

<section class="info">
    <p> En savoir plus </p>
    <div class="news">
        <div class="">
            <p class="trajan">89</p>
            <p class="worker">Avis</p>
        </div>
        <div class="">
            <p class="trajan">158</p>
            <p class="worker">Ament</p>
        </div>
        <div class="">
            <p class="trajan">102</p>
            <p class="worker">Appartements <br> en ligne</p>
        </div>
        <div class="">
            <p class="trajan">89</p>
            <p class="worker">Colocataires</p>
        </div>
    </div>
</section>

<section class="why_coloc">
    <div class="apart_int"></div>
    <div class="">
        <h3>Pourquoi faire de la colocation ?</h3>
        <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni
            dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam es</p>
    </div>
</section>
<!--Pas le temps, mais possibilité de coder la partie ci-dessous avec un composant Vue-->
<section class="search_coloc">
    <h3> Ils recherchent un colocataire ! </h3>
    <div class="coloc">
        <div class="">
            <img src="../img/accueil/fille2.jpg" alt="">
            <p>
                Alysson Down
            </p>
            <p>Angers</p>
            <a href="../recherchecolocataire/recherchecolocataire.php"><input type="submit" name="" value="Voir"
                                                                              class="trajan "></a>
        </div>
        <div class="trait"></div>
        <div class="">
            <img src="../img/accueil/fille.jpg" alt="">
            <p>Prénom nom</p>
            <p>Ville</p>
            <input type="submit" name="" value="Voir" class="trajan">
        </div>
        <div class="trait"></div>
        <div class="">
            <img src="../img/accueil/fille.jpg" alt="">
            <p>Prénom nom</p>
            <p>Ville</p>
            <input type="submit" name="" value="Voir" class="trajan ">
        </div>
    </div>
</section>

<div class="apart_accueil div_apart">
    <div class="choix">
        <div class="div_choix">
            <p>Pourquoi nous choisir ?</p>
            <input type="submit" name="" value="Découvrir" class="trajan">
        </div>
    </div>
</div>
<!--on inclut le footer dans toutes les pages-->
<?php require_once('../footer/footer.php') ?>


