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
            <!--<div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Herbs Store!</h1>
                    <p>We have the best Herbs for you. No need to hunt around, We have all in one place.</p>
                </div>
            </div> -->




            <div class="col-md-3 col-sm-6" style="position: absolute; left:600px;">
                        <div class="thumbnail">
                            
                                <img src="img/curry.jpg" alt="Curry Leaves">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Curry Leaves</h3>
                                    <p>Price: Rs. 34.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(18)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=18 && bd=2" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
            
            <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" > 
            Curry Leaves, that quintessential aromatic ingredient, found in the Indian households have innumerable health and therapeutic benefits. This tree being indigenous to India, Srilanka and many South east Asian countries is known by several vernacular names such as Kadi Patta or Meetha Neem in Hindi, Kariveppilai in Tamil, Karivepaaku in Tamil or Karivempu in Malayalam.

Derived from the Tamil word “Kari” meaning spicy, curry leaves are mentioned in ancient Tamil scriptures dating back to the 4th century AD for its amazing benefits and culinary significance.

Curry tree, being a sub-tropical tree growing to a height of 4-6 m and having a medium sized trunk goes by the botanical name Murraya
koenigii.

The aromatic curry leaves are seen in the form of pairs on the branches of the tree. The plant produces small white flowers which can pollinate themselves and it produces small, black, shiny semi-globose fruits with a single large seed. Though the fruits are fleshy and edible, neither the flower nor the fruits are used for culinary purposes.
        </p>



            </div>
    </body>
</html>