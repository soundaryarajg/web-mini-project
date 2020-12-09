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

<div class="col-md-3 col-sm-6" style="position: absolute; left:600px; ">
                        <div class="thumbnail">
                            
                                <img src="img/sorel.jpg" alt="Sorrel">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sorrel</h3>
                                    <p>Price: Rs. 45.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(17)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=17 && bd=2" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" > Sorrel is a leafy green vegetable that is native to Europe. It has a sharp, lemony taste. It is a perennial herb also known as garden sorrel or common sorrel. Their color spectrum ranges from pale to dark green. They are arrow-headed somewhat like spinach leaves. They tend to taste more acidic as they mature. The strong flavored variety is called sour dock while the mild ones are known as dock sorrel. In southern India, sorrel leaves are called chukkakura.

It gets its sour taste due to the presence of oxalic acid. In fact its name is derivative of a french word that means 'sour'. Oxalic acid can be toxic if consumed in large quantities. Sorrel leaves are available all year round. The herb relieves cold and fever symptoms. It soothes inflammation. Red sorrel helps stimulate the stomach and sharpen the appetite. Jaundice can be effectively treated with the juice extracted from sorrel leaves. Being rich in Vitamin C, sorrel helps the body build immunity to disease. </p>







</div>
    </body>
</html>