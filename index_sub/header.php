<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SoukElMedina</title>
	<!-- include the site stylesheet -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic%7cMontserrat:400,700%7cOxygen:400,300,700' rel='stylesheet' type='text/css'>
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="assets/css/animate.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/icon-fonts.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	 <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</link>
</head>
<body class="right-side">
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- Page Loader -->
    <div id="pre-loader" class="loader-container">
      <div class="loader">
        <img src="assets/images/svg/rings.svg" alt="loader">
      </div>
    </div>
		<!-- W1 start here -->
		<div class="w1">
			<!-- mt header style9 start here -->
			<header id="mt-header" class="style9">
				<!-- mt bottom bar start here -->
				<div class="mt-bottom-bar">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<!-- mt icon list right start here -->
								<ul class="mt-icon-list right">
									<li class="marginzero">
										<a class="bar-opener side-opener" href="#">
											<span class="bar"></span>
											<span class="bar small"></span>
											<span class="bar"></span>
										</a>
									</li>
								</ul><!-- mt icon list right end here -->
								<!-- navigation start here -->
								<nav id="nav">
									<ul>
					
										<li>
											<a href="blog.php">Blog</a>
										</li>
										<li>
											<a class="drop-link" href="product-grid-view.html">PRODUITS <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
											<div class="s-drop">
												<ul>
													<li><a href="product-grid-view.php?referencee=habit traditionnels">Habit traditionnels</a></li>
													<li><a href="product-grid-view.php?referencee=bijoux">Bijoux</a></li>
													<li><a href="product-grid-view.php?referencee=accessoire">Accessoire</a></li>
													<li><a href="product-grid-view.php?referencee=poterie">Poterie</a></li>
													<li><a href="product-grid-view.php?referencee=tapis">Tapis</a></li>
													
												</ul>
											</div>
										</li>
										
					
									</ul>
								</nav><!-- navigation end here -->
								<!-- mt icon list end here -->
								<ul class="mt-icon-list">
									<li><a href="" id="efff" class="icon-magnifier"></a></li>
									<?php if (isset($_SESSION['username'])) { 
         
  ?>
                      <li><a class="icon-heart" href="wishlist.php"></a></li>
                  
                  
               <?php }   
                else { ?> 
                   <li><a  href="loginpage.php" class="icon-heart"></a></li>
                <?php } ?>
									
									<li >
										<a href="order-shopping-cart.php" class="cart-opener">
											<span class="icon-handbag"></span>
											<span class="num" id="total"><?php
											if(isset($_SESSION['total']))
											{
											 echo $_SESSION['total'] ;
											}
											else { ?>0</span>
										<?php } ?></span>
											
										</a>
										<!-- mt drop start here -->
										
									</li>
								<?php if(!isset($_SESSION['username'])): ?>
								<li style="font-size: 20px ; color: black ;"><a href="loginpage.php">Connexion</a></li>
								<?php endif ; if(isset($_SESSION['username'])): ?>
								<li style="font-size: 20px ; color: black ;"><a href="views/logout.php">Deconnexion (<?php echo $_SESSION['username']; ?>)</a></li>

								<?php endif; ?>

								</ul><!-- mt icon list end here -->
								<!-- mt logo start here -->
								<div class="mt-logo" style="width: 180px;"><a href="index.php"><img src="assets/images/mt-logo.png" alt="schon"></a></div>
							</div>
						</div>
					</div>
				</div><!-- mt bottom bar end here -->
				<!-- mt bottom bar end here -->
				<span class="mt-side-over"></span>
			</header><!-- mt header end here -->
			<!-- mt side menu start here -->
			<div class="mt-side-menu">
				<!-- mt holder start here -->
				<div class="mt-holder">
					<a href="#" class="side-close"><span></span><span></span></a>
					<strong class="mt-side-title">MENU</strong>
					<!-- mt side widget start here -->
					<div class="mt-side-widget borderbottom">
						<nav class="mt-side-nav">
							<ul>
								<li>
									<a href="index.php">ACCUEIL</i></a>
								<li>
									<a href="#.html" class="drop-link">CATEGORIES<i aria-hidden="true" class="fa fa-angle-down"></i></a>
									<div class="drop">
										<ul>
											<li><a href="#">Habits traditionnels</a></li>
											<li><a href="#">bijoux</a></li>
											<li><a href="#">Tapis</a></li>
											<li><a href="#">Poterie</a></li>
											<li><a href="#">Accessoire</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="blog.php">Blog</a>
								<li>
								<li>
									<a href="#">Evenement</a>
								<li>
								<li>
									<a href="#" class="drop-link">Connexion ou Inscription<i aria-hidden="true" class="fa fa-angle-down"></i></a>
									<div class="drop">
										<ul>
											<li><a href="loginpage.php">se connecter</a></li>
											<li><a href="register.php">s'inscrire</a></li>
											
										</ul>
									</div>
								</li>
								<li><a href="about-us.html">A propos</a></li>
								<li>
									<a href="contact.php" >Contact</a>
									
								</li>
							</ul>
						</nav>
					</div><!-- mt side widget end here -->
				</div><!-- mt holder end here -->
			</div><!-- mt side menu end here -->
			<!-- mt search popup start here -->
			<div class="mt-search-popup">
				<div class="mt-holder">
					<a href="#" class="search-close"><span></span><span></span></a>
					<div class="mt-frame">
						<form action="search.php" method="GET" id="search_voice">
							<fieldset>
								<input type="text" placeholder="rechercher..."  name="voice">

								<button  type="button" id="micro"><span class="icon-microphone" id="span"></span></button>
								<button class="icon-magnifier" type="submit" ></button>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!-- mt search popup end here -->
