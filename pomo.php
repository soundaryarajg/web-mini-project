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
                        <img src="img/pomegranate.JPG" alt="Pomegranate">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Pomegranate</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7 && bd=1" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>




 <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" >
 Categorized as a berry, the pomegranate fruit is about 5–12 cm (2–5 inches) in diameter. It is red, round and looks kind of like a red apple with a flower-shaped stem.

The skin of the pomegranate is thick and inedible, but there are hundreds of edible seeds within. Each seed is surrounded by a red, juicy and sweet seed covering known as an aril.

The seeds and arils are the edible parts of the fruit — eaten either raw or processed into pomegranate juice — but the peel is discarded.
The pomegranate arils are also very sweet, with one cup containing 24 grams of sugar and 144 calories.

However, pomegranates really shine in their wealth of powerful plant compounds, some of which have potent medicinal properties.
</p>

</div>
    </body>
</html>