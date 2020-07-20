<?php session_start();
$msg="";
 if (isset($_POST['ID'])) {
   include "config.php";
   include "core/clientC.php";
   $client=new clientC();
   $user=$client->afficheruser($_POST['ID']);
   if($_POST['Password']==$user['Password'])
   {
     $_SESSION['username']=$_POST['ID'];
     $_SESSION['name']=$user['prenom']; 
       if(isset($_SESSION['previous']))
       {  
        header('Location: '.$_SESSION['previous']);
        unset($_SESSION['previous']);
        exit();
       }
       else
       {
        header('Location: index.php');
        exit();
       }
   }
   else {
     $msg="mot de passe incorrect !";
   }
}
   if(isset($_SESSION['username']))
{
  header('Location: index.php');
  exit();
}
 
include"index_sub/header.php" ?>

      <!-- Main of the Page -->
      <main id="mt-main">
        <!-- Mt Content Banner of the Page -->
        <section class="mt-contact-banner" style="background-image: url(assets/images/fuck.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
                <h1>login</h1>
                <nav class="breadcrumbs">
                  <ul class="list-unstyled">
                    <li><a href="index.html">home <i class="fa fa-angle-right"></i></a></li>
                    <li>login</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Content Banner of the Page end -->
         <br><br>
        <!-- Mt Detail Section of the Page -->
        <section class="mt-detail-sec toppadding-zero">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-sm-push-2">
                <div class="holder" style="margin: 0;">
                    <div class="mt-side-widget">
                      <header>
                        <h2 style="margin: 0 0 5px;">SIGN IN</h2>
                        <p>Welcome back! Sign in to Your Account</p>
                      </header>
                      <form action="loginpage.php" method="POST">
                        <fieldset>
                          <input type="text" placeholder="Username" class="input" name="ID" required>
                          <input type="password" placeholder="Password" class="input" name="Password" required>
                          <div class="box">
                            <span class="left"><input class="checkbox" type="checkbox" id="check1"><label for="check1">Remember Me</label></span>
                            <a href="register.php" class="help">Vous n'avez pas de compte?</a>
                          </div>
                          <button type="submit" class="btn-type1">Login</button>
                          <br><br>
                          <p style="color: red"><strong><?php echo $msg; ?></strong></p>
                        </fieldset>
                      </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
         
      </main><!-- Main of the Page end -->
    
    <?php include"index_sub/footer.php" ?>