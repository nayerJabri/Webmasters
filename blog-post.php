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
 <?php include "index_sub/header.php";  ?>

      <!-- Main of the Page -->
      <main id="mt-main">
        <!-- Mt Contact Banner of the Page -->
        <section class="mt-contact-banner wow fadeInUp" data-wow-delay="0.4s" style="background-image: url(img/banner.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
                <h1>Welcome</h1>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Contact Banner of the Page end -->
        <!-- Mt Blog Detail of the Page -->
        <div class="mt-blog-detail fullwidth wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 header">
                <!-- Breadcrumbs of the Page -->
                <nav class="breadcrumbs">
                  <ul class="list-unstyled">
                    <li><a href="index.html">Home <i class="fa fa-angle-right"></i></a></li>
                    <li><a href="blog.php">Blog</a></li>
                  </ul>
                </nav>
                <!-- Breadcrumbs of the Page end -->
                <span class="category"><a href="#"><i class="fa fa-th"></i></a></span>
                <ul class="list-unstyled align-right">
                  <li>
                    Search <a href="#"><i class="fa fa-search"></i></a>
                  </li>
                  <li>
                    Categories <a href="#"><i class="fa fa-bars"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <!-- Blog Post of the Page -->
                <article class="blog-post style3">
                  <div class="img-holder">
                    <a href="#"><img src="<?php echo "img/" . $row['picture']; ?>" alt="image description" height="575" width="1200"></a>
                    <time class="time" datetime=<strong><?php echo date('d M',strtotime($row['postdate'])); ?></strong></time>
                    <ul class="list-unstyled comment-nav">
                      <li><a href="#"><i class="fa fa-comments"></i><?php CommentsCount($conn, $_GET['id']); ?></a></li>
                      <li><a href="#"><i class="fa fa-thumbs-up"></i>14</a></li>
                      <li><a href="#"><i class="fa fa-thumbs-down"></i>0</a></li>
                    </ul>
                  </div>
                  <div class="blog-txt">
                    <h2><a href="blog-post-detail-sidebar.html"><?php echo $row['titre']; ?></a></h2>
                    <ul class="list-unstyled blog-nav">
                      <li> <a href="#"><i class="fa fa-clock-o"></i><?php echo date('d,F,Y',strtotime($row['postdate'])); ?></a></li>
                      <li> <a href="#"><i class="fa fa-list"></i><?php echo $row['category']; ?></a></li>
                      <li> <a href="#"><i class="fa fa-comment"></i><?php CommentsCount($conn, $_GET['id']); ?> Comments</a></li>
                    </ul>    
                    <p><?php echo html_entity_decode($row['text']); ?></p>      
                </article>
                <!-- Blog Post of the Page end -->
                <!-- Mt Author Box of the Page -->
                <article class="mt-author-box fullwidth">
                  <div class="author-img">
                    <a href="#"><img src="http://placehold.it/145x145" alt="image description"></a>
                  </div>
                  <div class="author-txt">
                    <h3><a href="#">Clara Wooden</a></h3>
                    <p>Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ul class="list-unstyled social-network">
                      <li>
<a class="fa fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https:/www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"> </a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </article>
                <!-- Mt Author Box of the Page end -->
                <section class="mt-about-sec wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
          <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                  <span class="title"> <h3>Opinions: </h3> </span>
                  <!-- Social Network of the Page -->
                  <ul class="list-unstyled social-network">
                    <li><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
                    <li><a href="#"><i class="fa fa-thumbs-down fa-3x"></i></a></li>
                  </ul>
                  <!-- Social Network of the Page end -->
                </div>
              </div>
            </div>
        </section>
                <!-- Mt Comments Section of the Page -->
                <div class="mt-comments-section fullwidth">
                  <div class="mt-comments-heading">
                    <h2>COMMENTS</h2>
                  </div>
                  <?php foreach($comments as $rowc): ?>
                  <ul class="list-unstyled">
                    <li>
                      <div class="img-box">
                        <img src="img/images.png" alt="image description" width="70" hight="70">
                      </div>
                      <div class="txt">
                        <h3><a href="#"><?php echo $rowc['uid']; ?></a></h3>
                        <time class="mt-time" datetime=""><?php echo date('M d,Y',strtotime($rowc['date'])); ?></time>
                        <p><?php echo html_entity_decode($rowc['message']); ?></p>
                        <?php  if ((isset($_SESSION['name']))&&($_SESSION['name'] != $rowc['uid'])) { ?>
                          <form style="float: left" action="<?php reportComments($conn);reportmail($conn) ?>" method="post">
                          <input name="cid" type="hidden" value="<?php echo $rowc['cid']; ?>">
                          <input name="uid" type="hidden" value="<?php echo $rowc['uid']; ?>">
                          <input name="message" type="hidden" value="<?php echo $rowc['message']; ?>">
                          <input name="state" type="hidden" value="1">
                        <button type="submit" name="reportComment" style="margin-left: 690px" class="form-btn">Report</button>
                        </form>
                        <?php   } ?>
                        <?php  if ((isset($_SESSION['name']))&&($_SESSION['name'] == $rowc['uid'])) { ?>
                        <button onclick="showHide(<?php echo $rowc['cid']; ?>)"  style="margin-left: 5px" class="form-btn">Edit</button>
                        <form style="float: left" action="<?php deleteComments($conn) ?>" method="post">
                        <input name="cid" type="hidden" value="<?php echo $rowc['cid']; ?>">
                        <button type="submit" name="deleteComment" class="form-btn">Delete</button>
                        </form>
                      </div>
                    </li>
                            <li class="second-comment" id="<?php echo $rowc['cid']; ?>">
                            <div class="mt-leave-comment">
                    <h2>EDIT COMMENT</h2>
                    <form action="<?php editComments($conn) ?>" class="comment-form" method="POST">
                      <fieldset>
                        <div class="form-group">
                        <input name="cid" type="hidden" value="<?php echo $rowc['cid']; ?>">
                          <input type="hidden" name="editdate" value="<?php echo date('Y-m-d H:i:s'); ?>">
                        </div>
                        <div class="form-group">
                          <textarea placeholder="Message" name="message"><?php echo $rowc['message']; ?></textarea>
                        </div>
                        <button type="submit" name="editComment" class="form-btn">Submit</button>
                      </fieldset>
                    </form>
                  </div>
                    </li>
                    <?php   } ?> 
                  </ul>            
<?php endforeach; ?>
<!-- Mt Comments style edit of the Page -->
<style>
  .second-comment {
    display: none;
  }
</style>
<!-- Mt Comments edit of the Page -->
                    <!-- Script comments edit -->
                    <script>

function showHide(divId){
  var x =document.getElementById(divId);
  if(divId){
    if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
 }
}
                    </script>
                  <!-- Mt Leave Comments of the Page -->
                  <?php  if (isset($_SESSION['name'])) { ?>
                  <div class="mt-leave-comment">
                    <h2>LEAVE A COMMENT</h2>
                    <form action="<?php setComments($conn) ?>" class="comment-form" method="POST">
                      <fieldset>
                        <div class="form-group">
                        <input name="postid" type="hidden" value="<?php echo $_GET['id']; ?>">
                          <input type="hidden" name="uid" value="<?php echo $_SESSION['name'] ?>">
                          <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
                        </div>
                        <div class="form-group">
                          <textarea placeholder="Message" name="message" required></textarea>
                        </div>
                        <button type="submit" name="submitComment" class="form-btn">Submit</button>
                      </fieldset>
                    </form>
                  </div>
                  <?php   } ?>
                  <!-- Mt Leave Comments of the Page end -->
                </div>
                <!-- Mt Comments Section of the Page end -->
              </div>
            </div>
          </div>
        </div>
        <!-- Mt Blog Detail of the Page end -->
      </main>
      <!-- footer of the Page -->
      <footer id="mt-footer" class="style1 wow fadeInUp" data-wow-delay="0.4s">
        <!-- Footer Holder of the Page -->
        <div class="footer-holder dark">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
                <!-- F Widget About of the Page -->
                <div class="f-widget-about">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="Schon"></a>
                  </div>
                  <p>Exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <!-- Social Network of the Page -->
                  <ul class="list-unstyled social-network">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                  </ul>
                  <!-- Social Network of the Page end -->
                </div>
                <!-- F Widget About of the Page end -->
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
                <div class="f-widget-news">
                  <h3 class="f-widget-heading">Twitter</h3>
                  <div class="news-articles">
                    <div class="news-column">
                      <i class="fa fa-twitter"></i>
                      <div class="txt-box">
                        <p>Laboris nisi ut <a href="#">#schön</a> aliquip econse- <br>quat. <a href="#">https://t.co/vreNJ9nEDt</a></p>
                      </div>
                    </div>
                    <div class="news-column">
                      <i class="fa fa-twitter"></i>
                      <div class="txt-box">
                        <p>Ficia deserunt mollit anim id est labo- <br>rum. incididunt ut labore et dolore <br><a href="#">https://t.co/vreNJ9nEDt</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs">
                <!-- Footer Tabs of the Page -->
                <div class="f-widget-tabs">
                  <h3 class="f-widget-heading">Product Tags</h3>
                  <ul class="list-unstyled tabs">
                    <li><a href="#">Sofas</a></li>
                    <li><a href="#">Armchairs</a></li>
                    <li><a href="#">Living</a></li>
                    <li><a href="#">Bedroom</a></li>
                    <li><a href="#">Lighting</a></li>
                    <li><a href="#">Tables</a></li>
                    <li><a href="#">Pouf</a></li>
                    <li><a href="#">Wood</a></li>
                    <li><a href="#">Office</a></li>
                    <li><a href="#">Outdoor</a></li>
                    <li><a href="#">Kitchen</a></li>
                    <li><a href="#">Stools</a></li>
                    <li><a href="#">Footstools</a></li>
                    <li><a href="#">Desks</a></li>
                  </ul>
                </div>
                <!-- Footer Tabs of the Page -->
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 text-right">
                <!-- F Widget About of the Page -->
                <div class="f-widget-about">
                  <h3 class="f-widget-heading">Information</h3>
                  <ul class="list-unstyled address-list align-right">
                    <li><i class="fa fa-map-marker"></i><address>Connaugt Road Central Suite 18B, 148 <br>New Yankee</address></li>
                    <li><i class="fa fa-phone"></i><a href="tel:15553332211">+1 (555) 333 22 11</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="mailto:&#105;&#110;&#102;&#111;&#064;&#115;&#099;&#104;&#111;&#110;&#046;&#099;&#104;&#097;&#105;&#114;">&#105;&#110;&#102;&#111;&#064;&#115;&#099;&#104;&#111;&#110;&#046;&#099;&#104;&#097;&#105;&#114;</a></li>
                  </ul>
                </div>
                <!-- F Widget About of the Page end -->
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Holder of the Page end -->
        <!-- Footer Area of the Page -->
        
        <!-- Footer Area of the Page end -->
          <?php include "index_sub/footer.php"; ?>
