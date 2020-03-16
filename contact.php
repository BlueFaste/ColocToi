<?php include('header.php') ?>





  <div class="apart_accueil">

    <h2 class="content-img-accueil-text"> Contactez-nous </h2>
    <p class="trajan slog">On répondra à toutes vos demandes</p>


  </div>


  <div class="carre">





    <div class="formulaireensemble">
      <p> Envoyez un message </p>
      <form class="formulaire" method="post">
        <div class="champ1">
          <div class="nom">
            <label>Nom:</label><br>
            <input type="text" name="nom" placeholder="Votre nom">
          </div>
          <div class="prenom">
            <label>Prenom:</label><br>
            <input type="text" name="prenom" placeholder="Votre prenom">
          </div>
        </div>
        <div class="champ2">
          <div class="email">
            <label>Email:</label><br>
            <input type="text" name="email" placeholder="Votre email">
          </div>
          <div class="sujet">
            <label>Sujet:</label><br>
            <input type="text" name="sujet" placeholder="Votre sujet">
          </div>
        </div>
        <div class="message">
          <label>Message:</label><br>
          <textarea name="message" rows="5" cols="70"></textarea>
        </div>

        <input type="submit" name="" value="Valider" class="content-img-accueil-inp trajan butt">


      </form>

    </div>





  </div>

  <div class="blanc">

  </div>

    <?php include('footer.php') ?>


    <script type="text/javascript">
    $(document).ready(function(){
      $('head').append('<link rel="stylesheet" href="contact.css">');
    })
    </script>
