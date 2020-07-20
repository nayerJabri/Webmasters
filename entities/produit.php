<?PHP
class produit{
	private $reference;
	private $nom;
	private $categorie;
	private $prix;
	private $description;
	private $image;
	private $date;
	function __construct($reference,$nom,$categorie,$prix,$description,$image,$date){
		$this->reference=$reference;
		$this->nom=$nom;
		$this->categorie=$categorie;
		$this->prix=$prix;
		$this->description=$description;
		$this->image=$image;
		$this->date=$date;
	}
	
	function getreference(){
		return $this->reference;
	}
	function getnom(){
		return $this->nom;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getdescription(){
		return $this->description;
	}
	function getprix(){
		return $this->prix;
	}
	function getimage(){
		return $this->image;
	}
	function getdate(){
		return $this->date;
	}

	function setreference($reference){
		$this->reference=$reference;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setcategorie($categorie){
		$this->categorie;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setdate($date){
		$this->date=$date;
	}
	
}

?>