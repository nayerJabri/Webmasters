<?php
   include 'config.php';
   include 'core/BlogC.php';
   include 'Entities/blog.php';
   $errors = array();
   $titre="";
   $author="";
   $text="";
   $postdate="";
   $category="";
if(isset($_POST['ajouter'])) {
$errors = array();
if(!empty($_FILES['picture']['name'])){
   $picture_name = time() . '_' . $_FILES['picture']['name'];
   $destination = "img/" . $picture_name;

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
   if (isset($_POST['titre']) && isset($_POST['author']) && isset($_POST['category'])  && isset($_POST['postdate']) && isset($_POST['picture']) && isset($_POST['text']) )
   {
   	$titre= $_POST['titre'];
   	$author= $_POST['author'];
      $category= $_POST['category'];
      $postdate= $_POST['postdate'];
   	$picture= $_POST['picture'];
      $text= htmlentities($_POST['text']);
      $_SESSION['message'] = "Blog Created Successfully";

   $e=new blog($titre,$author,$category,$postdate,$picture,$text);
   $eC=new blogC();
   $eC->ajouterblog($e);
   header('Location: blog pages.php');
   exit();
}
}
else{
   $titre = $_POST['titre'];
   $author = $_POST['author'];
   $text = $_POST['text'];
   $postdate = $_POST['postdate'];
   $category = $_POST['category'];
}

}
?>