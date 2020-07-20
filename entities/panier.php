<?PHP
class panier{
    
    private $idproduit;
	private $quantite;
	private $idcommande;
	
	function __construct($idcommande,$quantite,$idproduit){
		 		$this->quantite=$quantite;
				$this->idproduit=$idproduit;
				$this->idcommande=$idcommande;
		
	}
	
	
	function getquantite(){
		return $this->quantite;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	function getidcommande(){
		return $this->idcommande;
	}
	

	
	function setquantite($quantite){
		$this->quantite=$quantite;
	}
	function setidproduit($idproduit){
		$this->etat;
	}
	function sidcommande($idcommande){
		$this->idcommande;
	}
	
	
}

?>