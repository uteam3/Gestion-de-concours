<?php
include_once('../modele/connexionbase.php');

function insertionForm($nom,$prenom,$adresse,$email,$motpasse,$statut,$fonction){

	$requete="INSERT INTO `gcn`.`utilisateur` 
			(`ID_USER`, `NOM`, `PRENOM`, `ADRESSE`, `EMAIL`, `PWD`, `STATUT`, `FONCTION`, `TYPE`, `ACTIF`)
			VALUES('', '$nom', '$prenom', '$adresse', '$email', '$motpasse', '$statut', '$fonction','','')";
			$resultat=insertion($requete);
}

