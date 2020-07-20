 
<li><a class="addpanier" href="views/panier.php?reference=<?php echo $row['reference'] ;?>"><i class="icon-handbag"></i><span>Panier</span></a></li>



 <?php if (isset($_SESSION['username'])) { 
          if ($key=array_search($row['reference'], $wish)===false) { 
           $selected='';
             
          }
          else
          {
             $selected='selected';
          }
  ?>

                  <li><a class="addwish" href="views/wishlist.php?id=<?php echo $row['reference'] ;?>&pos=<?php echo $pos; ?>"><i id="<?php echo $pos.$row['reference'];?>" class="fas fa-heart <?php echo $selected; ?>"></i><span>Wish</span></a></li>
                  
               <?php }   
                else { ?> 
                   <li><a  href="loginpage.php"><i class="fas fa-heart"></i><span>Wish</span></a></li>
                <?php } ?>
               