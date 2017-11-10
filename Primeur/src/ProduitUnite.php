<?php
require_once("Produit.php");
class ProduitUnite extends Produit
{
    protected $nombreUnite = 42;
    protected $prixUnite = 3;
    protected $prixTotalUnite = "";
    protected static $compteur;
    public function prixTotalUnite($Produit)
    {
        $this->prixTotalUnite = $this->nombreUnite * $this->prixUnite;
		
        echo "<br/> Le prix total des $this->variete coûte $this->prixTotalUnit euros";
		
        self::$compteur++; //compteur
    }
    public static function totalcompteur(){
        return self::$compteur;
    }
}
?>
