<!--Caroline Fassot-->

<?php session_start();
include('../lienversbdd.php');
function ajoutBDD(PDO $connexion, $array)
{
	var_dump($_SESSION['log']);
	$req = $connexion->prepare('INSERT INTO question(`id_utilisateur`, `nom`, `prenom`,`mail`,`sujet`,`message`)  VALUES (:id_utilisateur, :nom, :prenom, :mail, :sujet, :message )');

	var_dump($array);
	var_dump($req->execute($array));
}

if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['sujet'], $_POST['message'])) {
	if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['sujet']) || empty($_POST['message'])) {
		echo "Toutes les cases ne sont pas remplites, il faut les remplir";
	} else {
	    //on stock les valeurs à ajouter dans la BDD dans un tableau pour pouvoir ajouter le bon ID selon le cas
		$array = array(
			":nom" => $_POST['nom'],
			":prenom" => $_POST['prenom'],
			":sujet" => $_POST['sujet'],
			":mail" => $_POST['email'],
			":message" => $_POST['message'],
		);
		if (!empty($_SESSION['log'])) {
			$array[":id_utilisateur"] = $_SESSION['log']['id'];
		} else {
		    // si l'utilisatuer n'est pas connecté pour poser sa question, on met l'od utilisatuer a 1 qui correspond au UserNoLogIn
			$array[":id_utilisateur"] = 1;

		}
		ajoutBDD($connexion, $array);
	}
} else {
	echo "probleme avec isset, normalement impossible sauf modification du code";
}

?>
