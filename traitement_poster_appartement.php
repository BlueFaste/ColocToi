<?php
include('lienversbdd.php');

if(isset($_POST['titre'], $_POST['ville'], $_POST['adresse'], $_POST['code_postal'], $_POST['type_logement'], $_POST['superficie'], $_POST['nb_piece'], $_POST['loyer'], $_POST['nb_coloc_max'], $_POST['nb_coloc_rech'], $_POST['meuble'], $_POST['charges'], $_POST['classe_ener'], $_POST['ges'])){
  if (empty($_POST['titre']) || empty($_POST['ville']) || empty($_POST['adresse']) || empty($_POST['code_postal']) || empty($_POST['type_logement']) || empty($_POST['superficie']) || empty($_POST['nb_piece']) || empty($_POST['loyer']) || empty($_POST['nb_coloc_max']) || empty($_POST['nb_coloc_rech']) || empty($_POST['meuble']) || empty($_POST['charges']) || empty($_POST['classe_ener']) || empty($_POST['ges'])){
    var_dump(empty($_POST['titre']));
    var_dump(empty($_POST['ville']));
    var_dump(empty($_POST['adresse']));
    var_dump(empty($_POST['code_postal']));
    var_dump(empty($_POST['type_logement']));
    var_dump(empty($_POST['superficie']));
    var_dump(empty($_POST['nb_piece']));
    var_dump(empty($_POST['loyer']));
    var_dump(empty($_POST['nb_coloc_max']));
    var_dump(empty($_POST['nb_coloc_rech']));
    var_dump(empty($_POST['meuble']));
    var_dump(empty($_POST['charges']));
    var_dump(empty($_POST['classe_ener']));
    var_dump(empty($_POST['ges']));
    echo "PB Normalement impossible à avoir à cause des required, mais si t'es la bah .... <br>";
    echo $_POST['titre']."<br>";
    echo $_POST['ville']."<br>";
    echo $_POST['adresse']."<br>";
    echo $_POST['code_postal']."<br>";
    echo $_POST['type_logement']."<br>";
    echo $_POST['superficie']."<br>";
    echo $_POST['nb_piece']."<br>";
    echo $_POST['nb_coloc_max']."<br>";
    echo $_POST['nb_coloc_rech']."<br>";
    echo $_POST['meuble']."<br>";
    echo $_POST['loyer']."<br>";
    echo $_POST['charges']."<br>";
    echo $_POST['desc']."<br>";
    echo $_POST['classe_ener']."<br>";
    echo $_POST['ges']."<br>";
  }
  else{
    echo "coucou";
    var_dump($req=$connexion-> prepare('INSERT INTO `appartement`(`id_proprietaire`, `heure_de_poste`, `jour_de_post`, `titre`, `ville`, `adresse`,`code_postal`, `type_logement`, `superficie`, `nb_piece`, `nb_coloc_max`, `nb_coloc_rech`, `meuble`, `loyer`, `charges`, `descritpion`, `classe_energetique`, `ges`)  VALUES (`:id_proprietaire`, `:heure_de_poste`, `:jour_de_post`, `:titre`, `:ville`, `:adresse`,`:code_postal`, `:type_logement`, `:superficie`, `:nb_piece`, `:nb_coloc_max`, `:nb_coloc_rech`, `:meuble`, `:loyer`, `:charges`, `:descritpion`, `:classe_energetique`, `:ges`)'));
  }
}
else{
  echo "Un champs n'existe pas ya un pb caro revoit ton code";
}


 ?>
