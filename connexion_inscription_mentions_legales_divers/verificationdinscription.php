<?php session_start(); ?>
<?php
include('../lienversbdd.php');


if (isset($_POST['nomregister'], $_POST['prenomregister'], $_POST['mdpregister'])) {
	if (isset($_SESSION['mail'])) {

		if ($_POST['nomregister'] != "" && $_POST['prenomregister'] != "" && $_POST['mdpregister'] != "") {

			$verif = true; //variable qui vérifie que tout est ok au niveau des valeurs entrées dans le formulaire

			// $rem = $connexion -> prepare('SELECT * FROM membre ORDER BY id DESC');
			// $rem -> execute();
			// while($ligne = $rem ->fetch()){
			//
			//     $email = $ligne->mail;
			//
			//     if( $_SESSION['mail'] == $email)
			//     {
			//          $verif = false;
			//          echo "Cette adresse mail est déjà utilisée, <a href='pjfrnl.php'>cliquez ici pour recommencer </a>";
			//     break;
			//     }
			// }

			//on cherche dans la BDD si l'email existe déjà
			$rem = $connexion->prepare('SELECT * FROM membre where mail = :mail');
			$rem->execute(array(
				':mail' => $_SESSION['mail']
			));

			$tableau = $rem->fetchAll();
			//si l'email existe alors la taille du tableau est superieur à 0 donc l'utilisateur ne peut pas utiliser cette email
			if (count($tableau) > 0) {
				$verif = false;
			}
			// si l'eamil n'existe pas alors on peut rentrer les informations
			if ($verif == true) {
				$hasmdp = password_hash($_POST['mdpregister'], PASSWORD_BCRYPT);
				$req = $connexion->prepare('INSERT INTO membre(nom,prenom,mail,mdp,tel) VALUES(:nom,:prenom,:mail,:mdp,:tel)');
				//c'est ici que l'on rentre les informations dans la base de donnée
				$req->execute([

					':nom' => $_POST['nomregister'],
					':prenom' => $_POST['prenomregister'],
					':mail' => $_SESSION['mail'],
					':mdp' => $hasmdp,
					':tel' => "0000000000",
					//entrer les nouvelles colonnes de la base de donnée ici, ne pas oublier de modifier la ligne ci-dessus (avec VALUES etc...)

				]);

				$rem = $connexion->prepare('SELECT * FROM membre where mail = :mail');
				$rem->execute(array(
					':mail' => $_SESSION['mail']
				));

				$user = $rem->fetch();

				$_SESSION['log'] = [
					'id' => $user->id,
					'nom' => $user->nom,
					'prenom' => $user->prenom,
					'mail' => $user->mail,
					'tel' => $user->tel,
				];

				header('Location: ../accueil/accueil.php');

			} else {
				echo "l'adresse mail est déjà enregistrer";
				header('location: emailused.php');
			}
		}
	} else {
		header('location : Inscriptionf.php');
		echo "vous n'avez pas entré de mail valide <a href='Inscriptionf.php'>Recommencez</a>";
	}
} else {

	echo "Ne laissez point de champs vide !";
}

?>
