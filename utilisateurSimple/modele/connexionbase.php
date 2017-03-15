<?php
try {
	$bdd= new PDO('mysql:host=localhost;dbname=gcn;charset=utf8','root','');
	
} catch (Exception $e) {
	die('Erreur de base de données:'.$getMessage());
	
}
function selection($res){
	global $bdd;
	$req=$bdd->query($res)
	or die($bdd->erro_Info());
	return $req;
}
function insertion($val){
	global $bdd;
	$req=$bdd->query($val);
	if(!$req)
		print_r($bdd->error_Info());
	return $req;

}