<!--Camille Varloud-->
<?php $pageName = 'ColocToi - Contact'; ?>
<?php require_once('../header/header.php') ?>

<script type="text/javascript">
    // inclusion des feuilles de styles de pages dans le head avec la ligne de code ci-dessous
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="contact.css">');
    })
</script>

<div class="apart_accueil">

    <h2 class="content-img-accueil-text"> Contactez-nous </h2>
    <p class="trajan slog">On répondra à toutes vos demandes</p>

</div>

<div class="carre">

    <div class="formulaireensemble">
        <p> Envoyez un message </p>
        <form class="formulaire" method="post" action="traitement_contact.php">
            <div class="champ1">
                <div class="nom">
                    <label for="name">Nom:</label><br>
                    <input type="text" name="nom" placeholder="Votre nom" id="name" required autofocus>
                    <!-- <input type="text" name="nom" placeholder="Votre nom" id="name" value=" -->
					<?php //echo $_SESSION['log'] ? $_SESSION['log']['nom'] : "" ?>
                    <!-- ternaire permettant de faire la même chose que le script du value -->
                    <!-- " required autofocus> -->
                </div>
                <div class="prenom">
                    <label for="firstName">Prenom:</label><br>
                    <input type="text" name="prenom" placeholder="Votre prenom" id="firstName" required>
                </div>
            </div>
            <div class="champ2">
                <div class="email">
                    <label for="mail">Email:</label><br>
                    <input type="email" name="email" placeholder="Votre email" id="mail" required>
                </div>
                <div class="sujet">
                    <label for="sujet">Sujet:</label><br>
                    <input type="text" name="sujet" placeholder="Votre sujet" id="sujet" required>
                </div>
            </div>
            <div class="message">
                <label for="message">Message:</label><br>
                <textarea name="message" rows="5" cols="70" id="message" required></textarea>
            </div>

            <input type="submit" name="" value="Valider" class="content-img-accueil-inp trajan butt">


        </form>

    </div>


</div>

<div class="blanc">

</div>

<?php require_once('../footer/footer.php') ?>


<script type="text/javascript">
    $(document).ready(function () {
		<?php if (!empty($_SESSION['log'])){ ?>
        //Permet de mettre automatiquent les nom prenom et mail dans les cases si l'utilisateur est connecté.
        $('#name').attr('value', '<?php echo $_SESSION['log']['nom'] ?>');
        $('#firstName').attr('value', '<?php echo $_SESSION['log']['prenom'] ?>');
        $('#mail').attr('value', '<?php echo $_SESSION['log']['mail'] ?>');
		<?php  } ?>
    })
</script>
