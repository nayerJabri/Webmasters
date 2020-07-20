<?PHP
session_start();
include "config.php"; 
include "core/BlogC.php";
include "Entities/blog.php";
include "core/CommentC.php";
$eC=new blogC();
$blogs =$eC-> selectAll();

?>
<?php include "index_sub/header.php";  ?>
      <main id="mt-main">
        <!-- Mt Contact Banner of the Page -->
        <section class="mt-contact-banner style4 wow fadeInUp" data-wow-delay="0.4s" style="background-image: url(img/banner.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
                <h1>BLOGS</h1>
                <!-- Breadcrumbs of the Page -->
                <nav class="breadcrumbs">
                  <ul class="list-unstyled">
                    <li><a href="index.html">Home <i class="fa fa-angle-right"></i></a></li>
                    <li><a href="#">Blog <i class="fa fa-angle-right"></i></a></li>
                    <li>Category</li>
                  </ul>
                </nav>
                <!-- Breadcrumbs of the Page end -->
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <a href="#" class="search">Search <i class="fa fa-search"></i></a>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Contact Banner of the Page end -->

        <!-- Mt Blog Detail of the Page -->
        <div class="mt-blog-detail style2">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-8 wow fadeInLeft" data-wow-delay="0.4s">
                <!-- Pagination -->     
    <?php
         
        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 2;
      $offset = ($pageno-1) * $no_of_records_per_page;
      $sql = "SELECT * FROM blog LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        $total_pages_sql = "SELECT COUNT(*) FROM blog";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
    ?>
                <!-- Blog Post of the Page -->                                                
                  <?php while($blog = mysqli_fetch_array($res_data)){ ?>
                          <article class="blog-post">
                        <div class="img-holder">
                          <a href="blog-post.php?id=<?php echo $blog['id']; ?>"><img src="<?php echo "img/" . $blog['picture']; ?>" alt="image description" height="365" width="790"></a>
                        </div>
                      <time class="time" datetime=<strong><?php echo date('d M',strtotime($blog['postdate'])); ?></strong></time>
                        <div class="blog-txt">
                          <h2><a href="blog-post.php?id=<?php echo $blog['id']; ?>"><?php echo $blog['titre']; ?></a></h2>
                          <ul class="list-unstyled blog-nav">
                            <li> <a href="#"><i class="fa fa-clock-o"></i><?php echo date('d,F,Y',strtotime($blog['postdate'])); ?></a></li>
                            <li> <a href="#"><i class="fa fa-list"></i><?php echo $blog['category']; ?></a></li>
                            <li> <a href="#"><i class="fa fa-comment"></i><?php CommentsCount($conn, $blog['id']); ?> Comments</a></li>
                          </ul>
                          <p><?php echo strip_tags(html_entity_decode(substr($blog['text'], 0, 250).'...')); ?></p>
                          <a href="blog-post.php?id=<?php echo $blog['id']; ?>" class="btn-more">Read More</a>
                        </div>
                      </article>
                      <?php } mysqli_close($conn); ?>
                     <?php unset($blog); 
                     $eC=new blogC();
                     $blogs =$eC-> selectAll();?>
                <!-- Blog Post of the Page end -->
                <div class="btn-holder">
                  <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="btn-prev"><i class="fa fa-angle-left"></i> PREVIOUS</a>
                  <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="btn-next">NEXT <i class="fa fa-angle-right"></i></a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 text-right wow fadeInRight" data-wow-delay="0.4s">
                <!-- Category Widget of the Page -->
                <article class="widget category-widget">
                  <h3>CATEGORIES</h3>
                  <ul class="list-unstyled widget-nav">
                  <?php foreach ($blogs as $blog): ?>
                    <li><a href="#"><?php echo $blog['category']; ?></a></li>
                    <?php endforeach; ?>
                    <?php unset($blog); 
                     $eC=new blogC();
                     $blogs =$eC-> selectAll();?>
                  </ul>
                </article>
                <!-- Category Widget of the Page end -->
                <!-- Popular Widget of the Page -->  
                <section class="widget popular-widget">                
                  <h3>POPULAR BLOG</h3>
                  <?php foreach ($blogs as $blog): ?>
                  <ul class="list-unstyled text-right popular-post">                  
                    <li>
                      <div class="img-post">
                        <a href="blog-post.php?id=<?php echo $blog['id']; ?>"><img src="<?php echo "img/" . $blog['picture']; ?>" alt="image description" height="65" width="65"></a>
                      </div>
                      <div class="info-dscrp">
                        <p><?php echo strip_tags(html_entity_decode(substr($blog['text'], 0, 100).'...')); ?></p>
                        <time datetime=<strong><?php echo date('d.m.Y',strtotime($blog['postdate'])); ?></strong></time>
                      </div>              
                    </li>                    
                  </ul>
                  <?php endforeach; ?>
                </section>
                
                <!-- Popular Widget of the Page end -->
                <!-- Tag Widget of the Page 
                <section class="widget tag-widget">
                  <h3>TAGS</h3>
                  <ul class="list-unstyled text-right tags">
                    <li><a href="#">Fusce,</a></li>
                    <li><a href="#">mattis,</a></li>
                    <li><a href="#">nunc,</a></li>
                    <li><a href="#">lacus,</a></li>
                    <li><a href="#">vulputate,</a></li>
                    <li><a href="#">facilisis,</a></li>
                    <li><a href="#">dui,</a></li>
                    <li><a href="#">efficitur,</a></li>
                    <li><a href="#">ut</a></li>
                  </ul>
                </section> -->
                <!-- Tag Widget of the Page end -->
              </div>
            </div>
          </div>
        </div>
        <!-- Mt Blog Detail of the Page end -->
      </main>
          <?php include "index_sub/footer.php"; ?>
