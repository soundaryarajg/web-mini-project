<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Herbs Shopping</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<style>
		body{
			background-attachment:fixed;
			background-size:cover;
		}
		
.card {
  box-shadow: 0 8px 8px 0 rgba(0,0,0,0.5);
  transition: 0.3s;
  width: 20%;
}

.card:hover {
  box-shadow: 0 16px 20px 0 rgba(0,0,0,0.5);
}

.container {
  padding: 2px 16px;
}
.row{
    position: absolute;
    left:400px;
}
a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: center;
}

</style>
		
		
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body background="img/back.jpg">
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell Herbs and Fruits</h1>
                      
                       <!--<a href="products.php" class="btn btn-danger">Shop Now</a>-->
                   </div>
                   </center>
               </div>
           </div>
		   
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="camera.php">
                                <img src="img/Herbs.jpg" alt="Herbs">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Herbs</p>
                                        <p>Choose Among The Finest Available In The World.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="watch.php">
                               <img src="img/Fruit0.jpg" alt="Fruits">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Fruits</p>
                                    <p>Organic Fruits Straight From The Farm.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <!--<div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="apparel.php">
                               <img src="img/images.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Kurtas</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div> -->
               </div>
           </div>
            <br><br> <br><br><br><br>
           <!--<footer class="footer"> 
               <div class="container">
             
               </div>
           </footer>-->
        </div>
    </body>
</html>
