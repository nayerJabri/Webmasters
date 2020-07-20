<?php
session_start(); 
 include"index_sub/header.php" ?>
      <main id="mt-main">
        <!-- Mt Content Banner of the Page -->
        <section class="mt-contact-banner" style="background-image: url(http://placehold.it/1920x205);">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
                <h1>register</h1>
                <nav class="breadcrumbs">
                  <ul class="list-unstyled">
                    <li><a href="index.html">home <i class="fa fa-angle-right"></i></a></li>
                    <li>register</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Content Banner of the Page end -->
        <!-- Mt About Section of the Page -->
        <section class="mt-about-sec" style="padding-bottom: 0;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="txt">
                  <h2>s'inscrire</h2>
                  <p>Morbi in erat malesuada, sollicitudin massa at, tristique nisl. Maecenas id eros scelerisque, vulputate tortor quis, efficitur arcu sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Umco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit sse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat <strong>Vestibulum sit amet metus euismod, condimentum lectus id, ultrices sem.</strong></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt About Section of the Page -->
        <!-- Mt Detail Section of the Page -->
        <section class="mt-detail-sec toppadding-zero">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-10 col-sm-push-1">
                <div class="holder" style="margin: 0;">
                    <div class="mt-side-widget">
                      <header>
                        <h2 style="margin: 0 0 5px;">register</h2>
                        <p>Don’t have an account?</p>
                      </header>
                      <form action="views/Ajouterclient.php" method="POST" style="margin: 0 0 80px;">
                      <fieldset>
                          <div class="row">
                            <div class="col-xs-12 col-sm-6">
                              <input type="text" placeholder="username" class="input" name="ID">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <input type="text" placeholder="Nom" class="input" name="Nom">
                            </div>
                          </div>
      
                          <div class="row">
                            <div class="col-xs-12 col-sm-6">
                              <input type="text" placeholder="Prenom" class="input" name="Prenom">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <input type="text" placeholder="Adresse_Email" class="input" name="Adresse_Email">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-6">
                              <input type="text" placeholder="Telephone" class="input" name="Telephone">
                            </div>
                            <div class="row">
                            <div class="col-xs-12 col-sm-6">
                              <input type="password" placeholder="Password" class="input" name="Password">
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <label for="sexe">  Sexe</label>
                             <select style="background-color: #f0f0f0" name="sexe" id="sexe">Sexe
                               <option value="Homme">Homme</option>
                               <option value="Femme">Femme</option>
                               <option value="Autre">Autre</option>
                             </select>
                            </div>
                         
                            <button type="submit" class="btn-type1">Register Me</button>
                        </fieldset>
                      </form>
                      
                      
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Detail Section of the Page end -->
        
        </div>
      </main><!-- Main of the Page end -->
      <!-- footer of the Page -->
  <?php include"index_sub/footer.php" ?>