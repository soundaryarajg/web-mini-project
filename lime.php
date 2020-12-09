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
                        <img src="img/sweet.jpg" alt="sweet">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sweet Lime</h3>
                                    <p>Price: Rs. 190.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(25)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=25 && bd=1" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>




 <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" >
 Mosambi or sweet lime is actually a citrus fruit located mainly in south-east Asia. Mosambi fruits usually are small green citrus fruit of round oval shape, that turns yellow whenever ripe as with most fruits. Mosambi is almost much like lemon in look, however it features a sweeter taste much like orange. Mosambi juice is extremely well-known in India as well as Pakistan and isn’t acidic regardless of belonging to the citrus family. The acid content in mosambi is recognized to eliminate toxins through the bowel tracts. Moreover, the fruit consists of dietary fiber which helps the roughage to act like a purgative cure for those struggling with bowel problems. Lime juice with a pinch of salt is usually suggested to individuals along with constipation problems. Mosambi juice could be valuable in case of diabetes as well, for this function, you are able to mix 2 teaspoons mosambi juice, 4 teaspoons amla juice as well as 1 teaspoon honey and take this before eating anything each morning for the best outcomes.
</p>

</div>
    </body>
</html>