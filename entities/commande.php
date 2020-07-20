<?PHP
class commande{
    
    private $etat;
	private $total;
	private $userid;
	
	function __construct($userid,$total,$etat){
		 		$this->total=$total;
		$this->etat=$etat;
		$this->userid=$userid;
		
	}
	
	
	function gettotal(){
		return $this->total;
	}
	function getetat(){
		return $this->etat;
	}
	function getuserid(){
		return $this->userid;
	}
	

	
	function settotal($total){
		$this->total=$total;
	}
	function setetat($etat){
		$this->etat;
	}
	function setuserid($userid){
		$this->userid;
	}
	
	
}

?>