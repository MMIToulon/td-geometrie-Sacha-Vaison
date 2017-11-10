<?php
	require_once('../src/ProduitKilo.php');
$legume1 = new ProduitKilo('COURGETTES');

 echo var_dump ($legume1);
$legume1->PrixTotalKilo($legume1). '<br>';
$legume1->PrixTotalKilo($legume1). '<br>';
 echo ' <br> Nombre de calcul effectués : ' .$legume1->totalcompteur();

?>
