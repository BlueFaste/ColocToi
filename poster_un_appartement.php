<?php $pageName='ColocToi - Poster une colocation'; ?>
<?php include('header.php');
if (!$_SESSION['log']){
  header('Location: connexion.php');
}
else{?>

<div class="apart_accueil">
  <h2 class="content-img-accueil-text"> Vous recherchez <br> un coloc ? </h2>
</div>

  <p class="annonce"> Poster une annonce </p>
  <form class="" action="traitement_poster_appartement.php" method="post">
    <div class="formulaire_poste">
    <div>
      <label for="titre">Titre : </label>
      <input type="text" name="titre" id="titre" placeholder="Titre de votre annonce" value="" required>
    </div>
    <div>
      <label for="ville">Ville : </label>
      <input type="text" name="ville" id="ville" placeholder="Ville de votre logement" value="" required>
    </div>
    <div>
      <label for="adresse">Adresse : </label>
      <input type="text" name="adresse" id="adresse" placeholder="Adresse de votre logement" value="" required>
    </div>
    <div>
      <label for="code_postal">Code postal : </label>
      <input type="number"  min="01000" name="code_postal" id="code_postal" placeholder="Code postal de votre logement" value="" required>
    </div>
    <div>
      <label for="type_logement">Type de logement : </label>
      <select class="" name="type_logement" id="type_logement" required>
        <option value="">-- Non séléctionnée --</option>
        <option value="appart">Appartement</option>
        <option value="maison">Maison</option>
      </select>
    </div>
    <div>
      <label for="superficie">Superficie : </label>
      <input type="text" name="superficie" id="superficie" placeholder="Superficie de votre logement" value="" required>
    </div>
    <div>
      <label for="nb_piece">Nombre de pièce (salle de bain exclue) : </label>
      <input type="number"  min="1" name="nb_piece" id="nb_piece" placeholder="Nombre de pièce de votre logement" value="" required>
    </div>
    <div>
      <label for="nb_coloc_poss">Nombre de colocataires maximal : </label>
      <input type="number"  min="2" name="nb_coloc_max" id="nb_coloc_max" placeholder="Nombre de colocataires maximal de votre logement" value="" required>
    </div>
    <div>
      <label for="nb_coloc_rech">Nombre de coloctaires recherchés : </label>
      <input type="number"  min="1" name="nb_coloc_rech" id="nb_coloc_rech" placeholder="Nombre de colocataires recherchés de votre logement" value="" required>
    </div>
    <div>
      <label for="meuble">Meublé : </label>
      <select class="" name="meuble" id="meuble" required>
        <option value="">-- Non séléctionnée --</option>
        <option value="true">Meublé</option>
        <option value="false">non-meublé</option>
      </select>
    </div>
    <div>
      <label for="loyer">Loyer (sans charges) : </label>
      <input type="text" name="loyer" id="loyer" placeholder="Loyer de votre logement" value="" required>
    </div>
    <div>
      <label for="charges">Charges : </label>
      <input type="text" name="charges" id="charges" placeholder="Charges de votre logement" value="" required>
    </div>
    <div>
      <label for="classe_ener">Classe énergetique : </label>
      <select class="" name="classe_ener" id="classe_ener" required>
        <option value="">-- Non séléctionnée --</option>
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="d">D</option>
        <option value="e">E</option>
        <option value="f">F</option>
        <option value="g">G</option>
      </select>
    </div>
    <div>
      <label for="ges">GES : </label>
      <select class="" name="ges" id="ges" required>
        <option value="">-- Non séléctionné --</option>
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="d">D</option>
        <option value="e">E</option>
        <option value="f">F</option>
        <option value="g">G</option>
      </select>
    </div>
    <div>
      <label for="desc">Descritpion : </label>
      <textarea name="desc" id="desc" placeholder="Description plus précise de votre logement" value="" rows="10" required></textarea>
    </div>
  </div>

  <div class="ajout_img">
    <p>Ajouter des photos</p>
    <input type="file" name="test" accept=".jpg, .jpeg, .png" value="" class="test"/>
    <div class="div_ajout_img">
      <div class="ajout_self">
        <img src="img/icones/appreil.png" alt="ajouter une image" class="icone">
      </div>
      <div class="ajout_self">
        <img src="img/icones/appreil.png" alt="ajouter une image" class="icone">
      </div>
      <div class="ajout_self">
        <img src="img/icones/appreil.png" alt="ajouter une image" class="icone">
      </div>
      <div class="ajout_self">
        <img src="img/icones/appreil.png" alt="ajouter une image" class="icone">
      </div>
    </div>
  </div>

  <div class="input_val">
    <input type="submit" name="" value="Valider" class="trajan" style="cursor:pointer">
  </div>
</form>

<?php include('footer.php') ?>

<script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('head').append('<link rel="stylesheet" href="poster_un_appartement.css">');
})
</script>










<?php } ?>
