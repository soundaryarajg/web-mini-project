<?php 
session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $sum=$_GET['sum'];





?>
<html>
    <head>
        <title> Payment via credit card</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/loadding.css">
        <link rel="stylesheet" type="text/css" href="css/popup-style.css">
        <meta name="robots" content="noindex, nofollow">

    </head>
	<style>
	body{
			background-attachment:fixed;
			background-size:cover;
		}
		</style>
    <body style="background-image: url(img/back.jpg);">
        <div id="main" style="color:white;">
            <center><h1> Payment via Credit Card</h1></center>
            <form action="pay2.php?id=<?php echo $user_id?> && amount=<?php echo$sum; ?>" method="POST">
                 <input type="hidden" name="submitted" value="true" />
                <div id="container">

                    <hr/>
                    <center> <h3 style="font-size: xx-large;">Billing Information</h3></center>

                    <table style="width:100%; color: white; text-align:center; font-size: x-large; font-style: bold;" >
                        <tr>
                            <td id="td-label">First name :
                            <input type="text" name="firstName" id="name" placeholder="enter first name"></td>

                        </tr>
                        <tr>
                            <td id="td-label">Last name :
                            <input type="text" name="lastName" id="name" placeholder="enter last name"></td>

                        </tr>
                        <tr>
                            <td id="td-label">Card type :
                            
                                <select name="creditCardType">
                                    <option value="Visa" selected="selected">Visa</option>
                                    <option value="MasterCard">MasterCard</option>

                                </select>
                            </td>

                        </tr>
                        <tr>

                            <td id="td-label">Card number :
                            <input type="text" name="creditCardNumber" placeholder="enter card number" required="true"></td>

                        </tr>

                        <tr>

                            <td id="td-label">Expiry date :
                            <select name="expDateMonth">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                

                                    <select name="expDateYear">

                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </td>

                        </tr>

                        <tr>

                            <td id="td-label">CVV :
                            <input type="text" name="cvv2Number"  placeholder="cvv" required="true"></td>

                        </tr>
                        <tr>

                            <td >Amount :
                            <input type="text" name="amount" value="<?php echo $sum;?>" placeholder=" " disabled ></td>

                        </tr>
                    </table>

                    <center> <h3 style="font-size: xx-large;">Billing address</h3></center>

                    <table style="width:100%; color:white; text-align:center; font-size: x-large; font-style: bold;">
                        <tr>
                            <td id="td-label">Address 1 :
                            <input type="text" name="address1" id="name" placeholder="enter address "></td>

                        </tr>
                        <tr>
                            <td id="td-label">Address 2 :
                            <input type="text" name="address2" id="name" placeholder="enter address"></td>

                        </tr>
                        <tr>
                            <td id="td-label">City :
                            <input type="text" name="city" id="name" placeholder="enter city name"></td>

                        </tr>
                        <tr>





                        </tr>

                        <tr>

                            <td id="td-label">Pin code :
                            
                                <input type="text" name="zip" id="name" placeholder="enter pin code">
                            </td>

                        </tr>
                        <tr>

                        </tr>
                        <tr>

                            <td id="td-label">Phone Number :
                            <input type="text" name="phone" id="name" placeholder="enter Phone number "></td>
                        </tr>
                    </table><br>
                  <center>   <th><input style="font-size:large; border-radius:5px;" type="submit"/></th></center>
                </div>
            </form>

        </div>


    </body>
</html>
