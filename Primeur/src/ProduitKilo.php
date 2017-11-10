
<?php
require_once("Produit.php");
class ProduitKilo extends Produit
{
    protected $poids = 10;
    protected $prixKilo = 2;
    protected $prixTotalKilo = "";
    protected static $compteur;
    public function prixTotalKilo($Produit)
    {
        $this->prixTotalKilo = $this->prixKilo * $this->poids;
        echo "<br/> Les $this->poids kilos de $this->variete coûtent $this->prixTotalKilo euros";
        self::$compteur++;
    }
public static function totalcompteur(){
    return self::$compteur;
}

public function __toString() {
    $txt=$this->categorie.
        "<br>".$this->poids.
        "<br>".$this->prixKilo;
    return $txt;
    
} }

?>