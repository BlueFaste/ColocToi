<?php
include('../lienversbdd.php');

if (isset($_POST['ville'], $_POST['prix'], $_POST['log'], $_POST['type'], $_POST['meuble'])) {
	if (empty($_POST['ville']) || empty($_POST['log']) || empty($_POST['type']) || empty($_POST['meuble'])) {
		echo "un champs est vide, <a href='recherche_colocation.php'>veuillez reremplir le formulaire.</a>";

	} else {
		//La ville est obligatoirement remplite sinon le formulaire ne s'envoit pas (sauf si un petit malin modifie le code )
		//on créer la variable enter qui va contenir le la partie VALUE de la requète MySQL
		// on créer un tableau qui lui sera utilisé lors de l'execution de la requète
		$enter = "ville=:ville";
		$array[":ville"] = $_POST['ville'];

		if (empty($_POST['prix'])) {
			//si le prix est vide alors on n'ajoute rien dans enter et dans le tableau
		} else {
			//a contrario si empty n'est pas vide, on complete enter et le tableau
			$enter .= " AND prix=:prix";
			$array[":prix"] = $_POST['prix'];
		}

		if ($_POST['log'] == "no") {

		} else {
			$enter .= " AND loge=:loge";
			$array[":loge"] = $_POST['log'];
		}

		if ($_POST['type'] == "no") {

		} else {
			$enter .= " AND type=:type";
			$array[":type"] = $_POST['type'];
		}

		if ($_POST['meuble'] == "no") {

		} else {
			$enter .= " AND meuble=:meuble";
			$array[":meuble"] = $_POST['meuble'];
		}

		// var_dump($enter);
		// var_dump($array);
		$req = $connexion->prepare("SELECT * FROM appartement WHERE $enter");

		$req->execute($array);

		$recherche = $req->fetchAll();
		var_dump($recherche);

	}
} else {
	echo "Erreur normalement inmpossible, sauf si vous avez modifié le formulaire. <a href='recherche_colocation.php'>Veuillez le reremplir SANS LE MODIFIER</a> ";
}

?>
