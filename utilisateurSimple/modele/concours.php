<?php
include_once('connexionbase.php');
function selectionConcours(){
	$requet="select * from concours ";
	$resul=selection($requet);
	return $resul;
	
}