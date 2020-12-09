<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Herbs Shopping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/popupcss.css">
    <script src="./js/plugin/jquery-1.11.0.min.js"></script>


    <script src="./js/success.js"></script>

  

</head>
<body class="cyan">
<!--/.modal popup start-->
		<div class="container modalcontainer">
				<div class="row">
						<div class="modalbox success col-sm-8 col-md-6 col-lg-5 center animate">
								<div class="icon">
										<span class="glyphicon glyphicon-ok"></span>
								</div>
							
								<h1>Success!</h1>
								<p>We've have received your Payment!!!
                     Shop  Again
										<br><br>Click below to go Home</p>
								<a href="index.php"class ="hidepp" style="display:block"><button type="button" class="redo btn">Ok</button></a>
						</div>
						<!--/.success-->
				</div>
				<!--/.row-->
				<!--<div class="row">
						<div class="modalbox error col-sm-8 col-md-6 col-lg-5 center animate">
								<div class="icon">
										<span class="glyphicon glyphicon-thumbs-down"></span>
								</div>-->

	<!--<div id="loader-wrapper">-->
        <!--<div id="loader"></div>-->
        <!--<div class="loader-section section-left"></div>-->
        <!--<div class="loader-section section-right"></div>-->
    </div>


        <div>
            <?php
               require 'header.php';
            ?>
            <br>


<?php

include('connection.php');
if(isset($_POST['submitted'])){




$creditCardNumber=$_POST['creditCardNumber'];
$cvv2Number=$_POST['cvv2Number'];
$amount=$_GET['amount'];

if(true)
$query=  "INSERT INTO payment(creditCardNumber,cvv2Number,amount) VALUES  ('$creditCardNumber','$cvv2Number','$amount')";
$result = $con->query($query);
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $delete_query="DELETE from users_items where user_id='$user_id'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
	 
	 
/*echo"<center><b><I> Payment success </I></b></center><br><br>";*/





}

?>
<div class="checkmark-circle">
  <div class="background"></div>
  <div class="checkmark draw"></div>
</div>
<br><br><br><br><br>
<footer class="footer">
    <div class="container">

    </div>
</footer>
</div>
</body>
</html>
