<?PHP
class wishlist{
    
    private $productid;
 	private $userid;
	
	function __construct($userid,$productid){
 		$this->productid=$productid;
		$this->userid=$userid;
		
	}
	
	
	 
	function getproductid(){
		return $this->productid;
	}
	function getuserid(){
		return $this->userid;
	}
	

	 
	function setproductid($productid){
		$this->productid;
	}
	function setuserid($userid){
		$this->userid;
	}
	
	
}

?>