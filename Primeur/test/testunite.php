<?php
	require_once('../src/ProduitUnite.php');
$legume22 = new ProduitUnite('MELONS');

 echo var_dump ($legume22);
$legume22->PrixTotalUnite($legume22);
echo ' <br> Nombre de calcul effectués : ' .$legume22->totalcompteur();

?>