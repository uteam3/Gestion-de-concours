<?php
include_once('connexionbase.php');
function selectionConcours(){
	$requet="select * from emploie ";
	$resul=selection($requet);
	return $resul;
	
	
	
}