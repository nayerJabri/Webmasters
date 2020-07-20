<?PHP
class blog{
  private $titre;
  private $author;
	private $category;
	private $postdate;
  private $picture;
  private $text;
  function __construct($titre,$author,$category,$postdate,$picture,$text){
		$this->titre=$titre;
		$this->author=$author;
		$this->category=$category;
		$this->postdate=$postdate;
		$this->picture=$picture;
		$this->text=$text;
  }
  function gettitre(){
		return $this->titre;
	}
	function getauthor(){
		return $this->author;
	}
	function getcategory(){
		return $this->category;
	}
	function getpostdate(){
		return $this->postdate;
	}
	function getpicture(){
		return $this->picture;
	}
	function gettext(){
		return $this->text;
	}

	function settitre($titre){
		$this->titre=$titre;
	}
	function setauthor($author){
		$this->author;
	}
	function setcategory($category){
		$this->category=$category;
	}
	function setpostdate($postdate){
		$this->postdate;
	}
	function setpicture($picture){
		$this->picture=$picture;
	}
	function settext($text){
		$this->text=$text;
	}




}
?>