<!--Caroline Fassot-->
<?php
include('../lienversbdd.php');

if (isset($_POST['ville'], $_POST['loyer'], $_POST['type_logement'], $_POST['nb_piece'], $_POST['meuble'])) {
	if (empty($_POST['ville']) || empty($_POST['type_logement']) || empty($_POST['nb_piece']) || empty($_POST['meuble'])) {
		echo "un champs est vide, <a href='recherche_colocation.php'>veuillez reremplir le formulaire.</a>";

	} else {
		//La ville est obligatoirement remplite sinon le formulaire ne s'envoit pas (sauf si un petit malin modifie le code )
		//on créer la variable enter qui va contenir le la partie VALUE de la requète MySQL
		// on créer un tableau qui lui sera utilisé lors de l'execution de la requète
		//UPPER permet de tout de mettre en majuscule lors de la recherche sql, ignore la case (case= si mot contient des majs)
		// (en bref il peut écrire la ville avec des majuscule n'importe où)
		$enter = " UPPER(ville) = UPPER(:ville)";
		$array[":ville"] = $_POST['ville'];

		if (!empty($_POST['loyer'])) {
			//si loyer n'est pas vide, on complète $enter et le tableau sinon on ne fait rien. $enter étant les valeurs apres VALUES de la commande INSERT INTO
			$enter .= " AND loyer=:loyer";
			$array[":loyer"] = $_POST['loyer'];
		}

		if ($_POST['type_logement'] != "no") {
			$enter .= " AND type_logement=:type_logement";
			$array[":type_logement"] = $_POST['type_logement'];
		}

		if ($_POST["nb_piece"] != "no") {
			$enter .= " AND nb_piece=:nb_piece";
			$array[":nb_piece"] = $_POST["nb_piece"];
		}

		if ($_POST['meuble'] != "no") {
			$enter .= " AND meuble=:meuble";
			$array[":meuble"] = $_POST['meuble'];
		}

//		var_dump($enter);
//		var_dump($array);
		$req = $connexion->prepare("SELECT * FROM appartement WHERE $enter");

		$req->execute($array);

		$recherche = $req->fetchAll();
		var_dump($recherche);

		echo "<a href='resultatrecherchecolocation.php'>Aller à la page statique des résultats</a>";

	}
} else {
	echo "Erreur normalement impossible, sauf si vous avez modifié le formulaire. <a href='recherche_colocation.php'>Veuillez le reremplir SANS LE MODIFIER</a> ";
}

?>
