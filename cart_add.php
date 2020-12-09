<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
	$id=$_GET['bd'];
    $add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));
	if($id=='1')
		header('location:watch.php');
	else if($id=='2')
		header('location:camera.php');
	else if($id=='3')
		header('location:apparel.php');
	else if($id=='4')
		header('location:products.php');
?>