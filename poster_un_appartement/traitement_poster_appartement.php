<!--Caroline Fassot-->
<?php session_start();
include('../lienversbdd.php');

function ajoutBDD(PDO $connexion, $array)
{
	$req = $connexion->prepare('INSERT INTO `appartement`(`id_proprietaire`, `heure_de_poste`, `jour_de_post`, `titre`, `ville`, `adresse`,`code_postal`, `type_logement`, `superficie`, `nb_piece`, `nb_coloc_max`, `nb_coloc_rech`, `meuble`, `loyer`, `charges`, `descritpion`, `classe_energetique`, `ges`, `img1`, `img2`, `img3`, `img4`)  VALUES (:id_proprietaire, :heure_de_poste, :jour_de_poste, :titre, :ville, :adresse, :code_postal, :type_logement, :superficie, :nb_piece, :nb_coloc_max, :nb_coloc_rech, :meuble, :loyer, :charges, :descritpion, :classe_energetique, :ges, :img1, :img2, :img3, :img4)');

	var_dump($array);
	var_dump($req->execute($array));
}

function verifImg($imgName, $imgTmp)
{

	//On fait un tableau contenant les extensions autorisées.
	//Comme il s'agit d'un avatar pour l'exemple, on ne prend que des extensions d'images.
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
	// // récupère la partie de la chaine à partir du dernier . pour connaître l'extension.
	$extension = strrchr($imgName, '.');
	if (!in_array($extension, $extensions)) {
		echo "Vous devez uploader un fichier de type png, gif, jpg, jpeg";
	} else {
		//On remplace les lettres accentutées par les non accentuées dans $fichier.
		//Et on récupère le résultat dans fichier
		$imgName = strtr($imgName,
			'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
			'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

		//En dessous, il y a l'expression régulière qui remplace tout ce qui n'est pas une lettre non accentuées ou un chiffre
		//dans $fichier par un tiret "-" et qui place le résultat dans $fichier.
		$imgName = preg_replace('/([^.a-z0-9]+)/i', '-', $imgName);

//    echo "<p>image :</p>".$imgName;

		$chemin_img = "../img/upload/appart/" . $imgName;
		move_uploaded_file($imgTmp, $chemin_img);
	}
	return $chemin_img;
}

if (isset($_POST['titre'], $_POST['ville'], $_POST['adresse'], $_POST['code_postal'], $_POST['type_logement'], $_POST['superficie'], $_POST['nb_piece'], $_POST['loyer'], $_POST['nb_coloc_max'], $_POST['nb_coloc_rech'], $_POST['meuble'], $_POST['charges'], $_POST['desc'], $_POST['classe_ener'], $_POST['ges'])) {
	if (empty($_POST['titre']) || empty($_POST['ville']) || empty($_POST['adresse']) || empty($_POST['code_postal']) || empty($_POST['type_logement']) || empty($_POST['superficie']) || empty($_POST['nb_piece']) || empty($_POST['loyer']) || empty($_POST['nb_coloc_max']) || empty($_POST['nb_coloc_rech']) || empty($_POST['meuble']) || empty($_POST['charges']) || empty($_POST['classe_ener']) || empty($_POST['ges'])) {
		// var_dump(empty($_POST['titre']));
		// var_dump(empty($_POST['ville']));
		// var_dump(empty($_POST['adresse']));
		// var_dump(empty($_POST['code_postal']));
		// var_dump(empty($_POST['type_logement']));
		// var_dump(empty($_POST['superficie']));
		// var_dump(empty($_POST['nb_piece']));
		// var_dump(empty($_POST['loyer']));
		// var_dump(empty($_POST['nb_coloc_max']));
		// var_dump(empty($_POST['nb_coloc_rech']));
		// var_dump(empty($_POST['meuble']));
		// var_dump(empty($_POST['desc']));
		// var_dump(empty($_POST['charges']));
		// var_dump(empty($_POST['classe_ener']));
		// var_dump(empty($_POST['ges']));
		// var_dump(empty($_POST['img1']));
		// var_dump(empty($_POST['img2']));
		// var_dump(empty($_POST['img3']));
		// var_dump(empty($_POST['img4']));

		echo "PB Normalement impossible à avoir à cause des required, mais si t'es la bah .... <a href='poster_un_appartement.php'>retourne poster ton appart</a> <br>";
		// echo $_POST['titre']."<br>";
		// echo $_POST['ville']."<br>";
		// echo $_POST['adresse']."<br>";
		// echo $_POST['code_postal']."<br>";
		// echo $_POST['type_logement']."<br>";
		// echo $_POST['superficie']."<br>";
		// echo $_POST['nb_piece']."<br>";
		// echo $_POST['nb_coloc_max']."<br>";
		// echo $_POST['nb_coloc_rech']."<br>";
		// echo $_POST['meuble']."<br>";
		// echo $_POST['loyer']."<br>";
		// echo $_POST['charges']."<br>";
		// echo $_POST['desc']."<br>";
		// echo $_POST['classe_ener']."<br>";
		// echo $_POST['ges']."<br>";
	} else {
		//on met à jour la timezone et on ajoute la date et l'heure du post
		date_default_timezone_set('Europe/Paris');
		$jour_poste = date("d/m/Y");
		$heure_poste = date("h:i:s");
		// var_dump($id_prop=$_SESSION['log']['id']);
		$id_prop = $_SESSION['log']['id'];
		// on crèe un tableau pour pouvoir ajouter ou non les chemins des images si elles ont été ajoutés par l'utilisateur
		$array = array(
			":id_proprietaire" => $id_prop,
			":heure_de_poste" => $heure_poste,
			":jour_de_poste" => $jour_poste,
			":titre" => $_POST['titre'],
			":ville" => $_POST['ville'],
			":adresse" => $_POST['adresse'],
			":code_postal" => $_POST['code_postal'],
			":type_logement" => $_POST['type_logement'],
			":superficie" => $_POST['superficie'],
			":nb_piece" => $_POST['nb_piece'],
			":nb_coloc_max" => $_POST['nb_coloc_max'],
			":nb_coloc_rech" => $_POST['nb_coloc_rech'],
			":meuble" => $_POST['meuble'],
			":loyer" => $_POST['loyer'],
			":charges" => $_POST['charges'],
			":descritpion" => $_POST['desc'],
			":classe_energetique" => $_POST['classe_ener'],
			":ges" => $_POST['ges'],
			":img1" => false,
			":img2" => false,
			":img3" => false,
			":img4" => false
		);

		// var_dump($_SESSION['log']);
		// var_dump($_FILES['img1']['name']);
		// var_dump($_FILES['img2']['name']);
		// var_dump($_FILES['img3']['name']);
		// var_dump($_FILES['img4']['name']);

		if (!empty($_FILES['img1']['name'])) {
			$chemin_img1 = verifImg($_FILES['img1']['name'], $_FILES['img1']['tmp_name']);
			$array[":img1"] = $chemin_img1;
			// var_dump($_FILES['img1']['name']);

			if (!empty($_FILES['img2']['name'])) {
				$chemin_img2 = verifImg($_FILES['img2']['name'], $_FILES['img2']['tmp_name']);
				$array[":img2"] = $chemin_img2;
				// var_dump($_FILES['img2']['name']);

				if (!empty($_FILES['img3']['name'])) {
					$chemin_img3 = verifImg($_FILES['img3']['name'], $_FILES['img3']['tmp_name']);
					$array[":img3"] = $chemin_img3;
					// var_dump($_FILES['img3']['name']);

					if (!empty($_FILES['img4']['name'])) {
						$chemin_img4 = verifImg($_FILES['img4']['name'], $_FILES['img4']['tmp_name']);
						$array[":img4"] = $chemin_img4;
						// var_dump($_FILES['img4']['name']);

					}
				}
			}
		}

		ajoutBDD($connexion, $array);

		echo " L'appartement a bien été enregistré dans la base de données. <a href='../accueil/accueil.php'>retour à l'accueil</a>";

	}
} else {
	echo "Un champs n'existe pas ya un pb caro revoit ton code";
}

?>
