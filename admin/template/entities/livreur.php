<?PHP
class livreur{
	private $identifiant;
	private $nom;
	private $prenom;
	private $telephone;
	private $datenaissance;
	private $adresse;
	private $adressemail;
	function __construct($identifiant,$nom,$prenom,$telephone,$datenaissance,$adresse,$adressemail){
		$this->identifiant=$identifiant;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->telephone=$telephone;
		$this->datenaissance=$datenaissance;
		$this->adresse=$adresse;
		$this->adressemail=$adressemail;


	}
	function get_identifiant(){
		return $this->identifiant;
	}
	function get_nom(){
		return $this->nom;
	}
	function get_prenom(){
		return $this->prenom;
	}
	function get_telephone(){
		return $this->telephone;
	}
	function get_datenaissance(){
		return $this->datenaissance;
	}
	function get_adresse(){
		return $this->adresse;
	}
	function get_adressemail(){
		return $this->adressemail;
	}
	function set_nom($nom){
		$this->nom=$nom;
	}
	function set_prenom($prenom){
		$this->prenom;
	}
	function set_telephone($telephone){
		$this->telephone=$telephone;
	}
	function set_datenaissance($datenaissance){
		$this->datenaissance=$datenaissance;
	}
	function set_adresse($adresse){
		$this->adresse=$adresse;
	}
	function set_adressemail($adressemail){
		$this->adressemail=$adressemail;
	}
}
?>