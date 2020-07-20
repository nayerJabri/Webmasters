
<?PHP
include "core/BlogC.php";
include "Entities/blog.php";
$errors = array();
if(isset($_POST['Update'])) {
$errors = array();
if(!empty($_FILES['picture']['name'])){
   $picture_name = time() . '_' . $_FILES['picture']['name'];
   $destination = "C:/wamp64/www/atelierPHP/Project/img/" . $picture_name;
   $result = move_uploaded_file($_FILES['picture']['tmp_name'],$destination);
   if($result) {
      $_POST['picture'] = $picture_name;
   }
   else {
      array_push($errors,"Failed to upload picture");
   }
}
else {
   array_push($errors,"Picture required");
}
if (empty($_POST['titre'])) {
array_push($errors,'title required');
}
if (empty($_POST['author'])) {
   array_push($errors,'author required');
   }
      if (empty($_POST['text'])) {
         array_push($errors,'text required');
         }


//var_dump($errors);
if (count($errors) === 0){
if (isset($_POST['Update'])){
  $e= new blog($_POST['titre'],$_POST['author'],$_POST['category'],$_POST['postdate'],$_POST['picture'],$_POST['text'],$_POST['id']);
		$eC=new blogC();
		$eC->modifierblog($e,$_POST['id']);
	header('Location: blog pages.php');
}
}
//else
//header('Location: ajouterblogpage.php');
}
?>
