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
                        <img src="img/mint.jpg" alt="Mint">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mint</h3>
                                    <p>Price: Rs. 30.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=16 && bd=2" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>




 <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" > Mint or mentha belongs to the Lamiaceae family, which contains around 15 to 20 plant species, including peppermint and spearmint. It is a popular herb that people can use fresh or dried in many dishes and infusions. Manufacturers of toothpaste, gum, candy, and beauty products often use mint oil.

Using fresh mint and other herbs and spices in cooking can help a person add flavor while reducing their sodium and sugar intake.

Throughout history, people have used different species of mint plants in medicine. Different types of mint plants offer a range of antioxidant qualities and potential health benefits, especially for people who have irritable bowel syndrome (IBS).

In this article, we provide a nutritional breakdown of mint and explain its possible health benefits. We also give tips on including more mint in the diet. </p>

</div>
    </body>
</html>