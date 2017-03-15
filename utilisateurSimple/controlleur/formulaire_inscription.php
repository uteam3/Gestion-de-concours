<?php 

if (isset($_POST['valider'])) {
		extract($_POST);

		$errors = [];

		if (mb_strlen($nom) < 3) {
			 $errors[] = "nom trop court!(Minimum 3 caractére)";
		}

		if (!is_string($nom)) {
			$errors[] = "LE nom doit etre en lettre";
		}

		if (mb_strlen($prenom) < 3) {
			 $errors[] = "Prénom trop court!(Minimum 3 caractére)";
		}

		if (!is_string($prenom)) {
			$errors[] = "LE prenom doit etre en lettre";
		}

		if (mb_strlen($adresse) < 4) {
			 $errors[] = "Addreese trop court!(Minimum 3 caractére)";
		}

		if (!is_string($adresse)) {
			$errors[] = "L'Addreese doit etre en lettre";
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors[] = "Addresse email invalide!";
			}

		if (mb_strlen($motpasse) < 6) {
				$errors[] = "Mot de passe trop court!(Minimum 6 caractére)";			
			} else{
				if ($motpasse != $confirmemotpasse) {
					$errors[] = "Les deux mots de passe ne concordent pas!";
				}
			}

			if (count($errors) == 0) {
				// $nom=$_POST['nom'];
				// $prenom=$_POST['prenom'];
				// $adresse=$_POST['adresse'];
				// $email=$_POST['email'];
				// $motpasse=$_POST['motpasse'];
				// $statut=$_POST['statut'];
				// $fonction=$_POST['fonction'];
				include_once('../modele/formulaire_inscription.php');
				$dd=insertionForm($nom,$prenom,$adresse,$email,$motpasse,$statut,$fonction);
				header("Location: insertionFormulaire.php?ok=1");
			}else{
			$errors[] = "<li>Veuillez remplir toutes les exigences</li>";
		}
			

include_once('../view/indexForm.php');

	}

