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
                        <img src="img/orange.jpg" alt="Orange">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Orange</h3>
                                    <p>Price: Rs. 130.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(23)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=23 && bd=1" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>




 <p style="background: white; position: relative; top:550px; text-align: center; padding: 100px; border-radius: 10px; font-size: large;" >
 Orange, any of several species of small trees or shrubs of the genus Citrus of the family Rutaceae and their nearly round fruits, which have leathery and oily rinds and edible, juicy inner flesh. A number of species and varieties of orange are economically important, namely the China orange, also called the sweet, or common, orange (Citrus ×sinensis); the mandarin orange (C. reticulata), some varieties of which are called tangerines; and the sour, or Seville, orange (C. ×aurantium), which is less extensively grown. Common varieties of the sweet orange include the Jaffa, from Israel, the seedless navel, and the Maltese, or blood, orange.
 The tree of the sweet orange often reaches 6 metres (20 feet) in height. The broad, glossy, evergreen leaves are medium-sized and ovate; the petioles (leafstalks) have narrow wings. Its white five-petaled flowers are very fragrant. The fruit is a modified berry known as a hesperidium, and the flesh is divided into segments called carpels. The usual shape of the sweet-orange fruit is round and the colour of its pulp orange, but there are variations. The mandarin, for example, is distinctly flattened, and the blood orange has red pulp. The pulp of the sweet orange is agreeably acidulous and sweet; the leathery peel is comparatively smooth; and the oil glands are convex. Oranges are picked when fully ripe, for, unlike some deciduous fruits, they do not ripen or improve in quality after being picked. The trees bear abundantly from 50 to 80 years or even more, and some old orange trees whose age must be reckoned by centuries still produce crops.
</p>

</div>
    </body>
</html>