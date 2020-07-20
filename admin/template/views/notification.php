<?php if(isset($_SESSION['message'])): ?>
<div class="alert alert-success alert-dismissable">
									<li>	 <?php echo $_SESSION['message']; ?> </li>
                  </div>																		
<?php
unset($_SESSION['message']);
?>
<?php endif; ?>