<?PHP
session_start();
date_default_timezone_set('Europe/London');
include_once "config.php"; 
include_once "core/BlogC.php";
include "core/CommentC.php";
include "Entities/blog.php";
if (isset($_GET['id'])){
  $eC=new blogC();
$blog=$eC->fetchblog($_GET['id']);
foreach($blog as $row){
  $titre= $row['titre'];
       $author= $row['author']; 
      $category= $row['category'];
      $postdate= $row['postdate'];
       $picture= $row['picture'];
       $text= $row['text'];
}
}
$comments = getComments($conn, $_GET['id']);
?>
 <style>
 body {background-color: #585858;}
 .blog-txt  {background-color:#8A8A8A;}
 h2 {text-align: center;}
 </style>
                <!-- Blog Post of the Page -->
                <article class="blog-post style3">
                  <div class="img-holder">
                    <a href="#"><img src="<?php echo "img/" . $row['picture']; ?>" alt="image description" height="575" width="1200"></a>
                  </div>
                  <div class="blog-txt">
                    <h2><a href="blog-post.php?id=<?php echo $row['id']; ?>"><?php echo $row['titre']; ?></a></h2>
                    <p><?php echo html_entity_decode($row['text']); ?> </p>      
                    </div>
                    </article>
                <!-- Blog Post of the Page end -->
                