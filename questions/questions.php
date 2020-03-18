<?php $pageName = 'ColocToi - FAQ'; ?>
<?php include('../header/header.php') ?>



<div class="apart_accueil">
        <!--ou est ce que tu dois coder-->   

    <h2 class="content-img-accueil-text"> Questions - Aide </h2>
    <p class="trajan slog">Posez toutes les questions qui vous passent à l'esprit. Nous sommes là !</p>

</div>
<div class="premierspas">


    <div class="rectangle">
        <img src="../img/questions/questions1.png" class="questions1"/>

        <div class="texte">

            <div class="decouvrircoloctoi">
                Découvrir Coloctoi
            </div>
            <div class="inscriptionidentification">
                Inscription et identification
            </div>
            <div class="lesavis">
                Les avis
            </div>
            <div class="profil">
                Profil
            </div>
            <div class="publications">
                Publications
            </div>
        </div>
    </div>

    <img src="../img/questions/appart2.jpg" class="appart2"/>

</div>


<div class="rectanglebleu">


    <div class="questionsensemble2">
        <div class="menu2">
            <img src="../img/questions/questions4.png" class="questions2"/>
            <div class="texte2">

                <div class="decouvrircoloctoi2">
                    Découvrir Coloctoi
                </div>
                <div class="inscriptionidentification2">
                    Inscription et identification
                </div>
                <div class="lesavis2">
                    Les avis
                </div>
                <div class="profil2">
                    Profil
                </div>
                <div class="publications2">
                    Publications
                </div>
            </div>
        </div>


        <div class="menu3">

            <img src="../img/questions/questions2.png" class="questions3"/>

            <div class="texte3">

                <div class="decouvrircoloctoi3">
                    Découvrir Coloctoi
                </div>
                <div class="inscriptionidentification3">
                    Inscription et identification
                </div>
                <div class="lesavis3">
                    Les avis
                </div>
                <div class="profil3">
                    Profil
                </div>
                <div class="publications3">
                    Publications
                </div>
            </div>
        </div>


        <div class="menu4">
            <img src="../img/questions/questions2.png" class="questions4"/>


            <div class="texte4">

                <div class="decouvrircoloctoi4">
                    Découvrir Coloctoi
                </div>
                <div class="inscriptionidentification4">
                    Inscription et identification
                </div>
                <div class="lesavis4">
                    Les avis
                </div>
                <div class="profil4">
                    Profil
                </div>
                <div class="publications4">
                    Publications
                </div>
            </div>

        </div>


    </div>
</div>


<div class="formu">

    <img src="../img/questions/appart3.jpg" class="appart3"/>


    <div class="formulaireensemble">
        <img src="../img/questions/questions4.png" class="questions5"/>
        <form class="formulaire" method="post" action="../contact/traitement_contact.php">
            <div class="champ1">
                <div class="nom">
                    <label>Nom:</label><br>
                    <input type="text" name="nom" placeholder="Votre nom" id="name" required >
                </div>
                <div class="prenom">
                    <label>Prenom:</label><br>
                    <input type="text" name="prenom" placeholder="Votre prenom" id="firstName" required>
                </div>
            </div>
            <div class="champ2">

                <div class="email">
                    <label>Email:</label><br>
                    <input type="email" name="email" placeholder="Votre email" id="mail" required>
                </div>

                <div class="sujet">
                    <label>Sujet:</label><br>
                    <input type="text" name="sujet" placeholder="Votre sujet" required>
                </div>

            </div>
            <div class="message">
                <label>Message:</label><br>
                <textarea name="message" rows="5" cols="80" required></textarea>
            </div>

            <input type="submit" name="" value="Valider" class="content-img-accueil-inp trajan butt">

        </form>

    </div>

</div>


<?php include('../footer/footer.php') ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="questions.css">');
    })

    <?php if (!empty($_SESSION['log'])){ ?>
    //Permet de mettre automatique le nom prenom et mail dans les cases si l'utilisateur est connecté.
    $('#name').attr('value', '<?php echo $_SESSION['log']['nom'] ?>');
    $('#firstName').attr('value', '<?php echo $_SESSION['log']['prenom'] ?>');
    $('#mail').attr('value', '<?php echo $_SESSION['log']['mail'] ?>');
    <?php  } ?>
</script>