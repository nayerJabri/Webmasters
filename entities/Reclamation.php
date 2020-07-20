<?PHP
class Reclamation{
 
	private $id;
	private $nom;
	private $tel;
	private $email;
	private $objet;
	private $message;
	private $date;
	private $type;
	function __construct($id,$nom,$tel,$email,$objet,$message,$type){

		$this->id=$id;
		$this->nom=$nom;
		$this->tel=$tel;
		$this->email=$email;
		$this->objet=$objet;
		$this->message=$message;
		$this->type=$type;
	}
 
	function getid(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function gettel(){
		return $this->tel;
	}
	function getemail(){
		return $this->email;
	}
	function getmessage(){
		return $this->message;
	}
	function gettype(){
		return $this->type;
	}
	function getobjet(){
		return $this->objet;
	}
	function getdate(){
		return $this->date;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setmessage($message){
		$this->message=$message;
	}
	function settype($type){
		$this->type=$type;
	}
	function setobjet($objet){
		$this->objet=$objet;
	}
	
}

?>