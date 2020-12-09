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
                        <img src="img/lettuce.jpg" alt="Lettuce">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lettuce</h3>
                                    <p>Price: Rs. 80.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4 && bd=2" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>




 <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" >
 You add lettuce to sandwiches and sides every day, but staring down the options at the salad bar may have you wondering if one type of leaf beats out the rest — and is there really a difference if a recipe calls for Boston instead Bibb?

Botanically speaking, the plant Lactuca sativa includes few basic types, like leaf lettuce, romaine, iceberg, and butterhead, but you'll want to mix other popular greens into your dishes for the biggest nutritional boost.

"Different types of lettuce have varying levels of specific nutrients," explains Jaclyn London, MS, RD, CDN, Nutrition Director at the Good Housekeeping Institute. "For example, spinach is higher in iron than kale, but kale provides glucosinolates, compounds that may decrease your risk of certain cancers."

No matter what you choose, each kind comes packed with antioxidants, water, fiber, and essential nutrients — stuff most us could eat a lot more of. "Fifty percent of Americans don’t eat enough fiber, nor do we consume recommended amounts of potassium, calcium, and magnesium, minerals that are found in, you guessed it, leafy greens and lettuce," she says. "Load up your meals and snacks with more produce — all types of lettuce, leafy greens, and cruciferous veggies, like cabbage, broccoli, cauliflower, Bok choy, and Brussels sprouts — to reap the best benefits for both health and flavor."
</p>

</div>
    </body>
</html>