<?PHP
class livraison{
	private $referance;
	private $client;
	private $livreur;
	private $date;
	private $adresselivraison;
	function __construct($referance,$client,$livreur,$date,$adresselivraison){
		$this->referance=$referance;
		$this->client=$client;
		$this->livreur=$livreur;
		$this->date=$date;
		$this->adresselivraison=$adresselivraison;
	}
	function get_referance(){
		return $this->referance;
	}
	function get_client(){
		return $this->client;
	}
	function get_livreur(){
		return $this->livreur;
	}
	function get_date(){
		return $this->date;
	}
	function get_adresselivraison(){
		return $this->adresselivraison;
	}
	function set_client($client){
		$this->client=$client;
	}
	function set_livreur($livreur){
		$this->livreur;
	}
	function set_date($date){
		$this->date=$date;
	}
	function set_adresselivraison($date){
		$this->adresselivraison=$adresselivraison;
	}
}
?>