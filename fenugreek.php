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
                        <img src="img/fenugreek.jpg" alt="Fenugreek(Methi)">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Fenugreek(Methi)</h3>
                                    <p>Price: Rs. 32.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=13 && bd=2" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>




 <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" >
 Methi leaves are loaded with fibre and many other essential nutrients. During the winter season, you can see methi leaves everywhere. You can add it to your diet in various ways. Here are some health benefits of fenugreek leaves which you must know.Winter is here and it is the time when you will see methi leaves everywhere. Fenugreek seeds are widely used for cooking and also associated with many health benefits. Similarly, fresh fenugreek leaves are also good for health and loaded with health benefits. These leaves are commonly available during the winter season. From methi parathas to methi saag it is widely used for cooking during the winter season. If you also see the market loaded with fenugreek leaves then you must grab one and try different recipes with it. Here are some impressive health benefits of methi leaves which you cannot afford to miss.
</p>

</div>
    </body>
</html>