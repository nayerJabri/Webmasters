<?PHP
class Administrateur	{
	private $name;
	private $email;
	private $tel;
	private $pass;
	private $img;
	private $photop;
	
	function __construct($name,$tel,$email,$pass,$photop){
		$this->name=$name;
		$this->tel=$tel;
		$this->email=$email;
		$this->pass=$pass;
		$this->photop=$photop;
	}
	
	function getName(){
		return $this->name;
	}
	function getphotop(){
		return $this->photop;
	}
	function getTel(){
		return $this->tel;
	}
	function getEmail(){
		return $this->email;
	}
	function getPass(){
		return $this->pass;
	}
	function getImg(){
		return $this->img;
	}

	function setName($name){
		$this->name=$name;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setPass($pass){
		$this->pass=$pass;
	}
	function setImg($img){
		$this->img=$img;
	}
}

?>