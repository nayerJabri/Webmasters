<?php 
    include "../config.php";
    include "../entities/avis.php";
    include "../core/avisc.php";
    

    
    if (isset($_POST['id']))
    {
        $avisc=new avisc();
        $result=$avisc->recupereravis($_POST['id']);
        foreach($result as $row)
        {
            $id=$row['id'];
            $nom=$row['nom'];
            $email=$row['email'];
            $review=$row['review'];
            $datea=$row['datea'];
        
        ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                                            <form method="POST" class="p-commentform">
												<fieldset>
													<h2>Edit  Comment</h2>
													<div class="mt-row">
														<label>Rating</label>
														<ul class="mt-star">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
													</div>
													<div class="mt-row">
														<label>Name</label>
														<input type="text" name="nom" class="form-control">
													</div>
													<div class="mt-row">
														<label>E-Mail</label>
														<input type="text" name="email"  class="form-control">
													</div>
													<div class="mt-row">
														<label>Review</label>
														<textarea name="review" class="form-control"></textarea>
													</div>
                                                    <input type="hidden" name="id_ini" value="<?php echo $row['id']; ?>">
                                                    <input type="submit"  name="modifier" class="btn-type4" value="ADD REVIEW"></input>
												</fieldset>
                                            </form>
                                            <?php 
        }
    }
    
    if (isset($_POST['modifier'])){
        $avisc=new avisc();
        $avis=new avis($_POST['nom'],$_POST['email'],$_POST['review']);
        $avisc->modifieravis($avis,$_POST['id_ini']);

header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    ?>
</body>
</html>