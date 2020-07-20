<?PHP
class localisation{
    
    private $lng;
	private $lat;
	private $description;
	
	function __construct($description,$lat,$lng){
		 		$this->lat=$lat;
		$this->lng=$lng;
		$this->description=$description;
		
	}
	
	
	function getlat(){
		return $this->lat;
	}
	function getlng(){
		return $this->lng;
	}
	function getdescription(){
		return $this->description;
	}
	

	
	function setlat($lat){
		$this->lat=$lat;
	}
	function setlng($lng){
		$this->lng;
	}
	function setdescription($description){
		$this->description;
	}
	
	
}

?>