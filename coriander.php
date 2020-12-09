<?php
    session_start();
    require 'check_if_added.php';
    require 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Herbs Shopping</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
	<style>
	body{
			background-attachment:fixed;
			background-size:cover;
		}
		</style>
    <body background="img/back.jpg">
        <div>
            <?php
                require 'header.php';
            ?>

<div class="col-md-3 col-sm-6" style="position: absolute; left:600px;">
                        <div class="thumbnail">
                        <img src="img/coriander.jpg" alt="Coriander">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Coriander</h3>
                                    <p>Price: Rs. 50.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1 && bd=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>




 <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" >
 Aromatic green leaves that are largely used to flavour and garnish food. Belonging to the same family of Cilantro, the leaves, dried seeds and powder are widely used in the Indian cuisine. There has always been a debate if coriander is more an herb or spice.
 

 Coriander is one of the world's oldest spices tracing back to 5000 B.C. Almost available all throughout the year, coriander leaves stay fresh and usable not more than a week. Apart from the leaves and the seeds, the roots of the coriander plant are also edible. The roots however have a deeper and much more intense flavour compared to the leaves. They are commonly used in a variety of Asian and Thai dishes.
  
 
 Coriander leaves have a strong odour. They also haveAromatic green leaves that are largely used to flavour and garnish food. Belonging to the same family of Cilantro, the leaves, dried seeds and powder are widely used in the Indian cuisine. There has always been a debate if coriander is more an herb or spice.
 
 Coriander is one of the world's oldest spices tracing back to 5000 B.C. Almost available all throughout the year, coriander leaves stay fresh and usable not more than a week. Apart from the leaves and the seeds, the roots of the coriander plant are also edible. The roots however have a deeper and much more intense flavour compared to the leaves. They are commonly used in a variety of Asian and Thai dishes.
</p>

</div>
    </body>
</html>