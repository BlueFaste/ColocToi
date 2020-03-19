<!--Noé Leroi-->
<?php $pageName='ColocToi - Chercher une colocation- Résultat'; ?>
<?php require_once('../header/header.php') ?>
<script type="text/javascript">
    // inclusion des feuilles de styles de pages dans le head avec la ligne de code ci-dessous
    $(document).ready(function(){
        $('head').append('<link rel="stylesheet" href="../stylecreationf.css">');
    })
</script>


    <div class="fondbati">
        <h1><p class="grostitreappart">Vous recherchez<br> &nbsp;&nbsp;&nbsp;  une colocation ?</p></h1>
    </div>


        <div class="premierdesflexrecherchecolocation">



            <div class="deuxiemerecherchecolocation">

                <div class="troispourlarecherche">
                    <p><i>Angers / Appartement</i></p>
                    <label for="appartoumaison">Type de bien : </label>
                <select name="appartoumaison" id="appartoumaison">
                        <option value="Appart" >Appartement</option>
                        <option value="Maison" >Maison</option>
                    </select>
                    <label for="prix">Prix : </label>
                    <span>
                    <input type="range" name="prix" min="0" max="1500" step="50" value="0" oninput="result4.value=parseInt(prix.value)" id="prix"/>
                        <output name="result4">--</output>€ <!-- permet de faire une sorte de compteur qui correspond à la position du curseur sur la barre-->
                    </span>
                    <label for="superficie">Superficie : </label>
                    <select id="superficie" name="superficie">
                        <option value="10m20m" >10m² - 20m²</option>
                        <option value="20m30m" >20m² - 30m²</option>
                        <option value="30m40m" >30m² - 40m²</option>
                        <option value="40m50m" >40m² - 50m²</option>
                        <option value="pd50" >plus de 50m²</option>
                    </select>



                </div>
                <div class="troispourlarecherche ; invisible">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche ; invisible">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche ; invisible">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>

            </div>

            <div class="deuxiemerecherchecolocation">

                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>

            </div>

            <div class="deuxiemerecherchecolocation">

                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement"/>
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>

            </div>

            <div class="deuxiemerecherchecolocation">

                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement" />
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement" />
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement" />
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>
                <div class="troispourlarecherche">
                    <img src="../img/recherche_colocation/imgfiller.png" alt="Appartement" />
                    <p><b>Appartement 4 pièces</b> <i>450€</i></p>
                    <p>Centre ville angers<p>
                </div>

            </div>

    
        </div>

    <div class="flexcenter">

    <p>< <a href="">1</a> <a href="">2</a> <b> <a href="">3</a> </b> <a href="">4</a> <a href="">5</a> ></p>

    </div>


<?php
 require_once('../footer/footer.php')
?>

