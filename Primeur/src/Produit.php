<?php
class Produit {
    protected $categorie = "";
    public function __construct($n){
        $this->categorie = $n;
        echo $this->categorie;
    }
}
?>