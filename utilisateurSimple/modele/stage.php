<?php
include_once('connexionbase.php');
function selectionConcours(){
	$requet="select * from stage ";
	$resul=selection($requet);
	return $resul;
	
	
	
}