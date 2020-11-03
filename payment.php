<?php
	$order = $_COOKIE['order'];
	$price = $_COOKIE['price'];
	$address = "At EatWhat"; 
	if (empty($_POST["radio"])){
		$error = "Dining Option is required."; 
	} else{
		$method = $_POST["radio"]; 
		if ($method == "deliver"){
			setcookie("method", "Delivery", time() + (86400 * 10), "/");
			if (empty($_POST["deliver_time"]) or empty($_POST["address"])){
				$error = "Time and Address are required."; 
			} else{
					$time = $_POST["deliver_time"]; 
					$address = $_POST["address"]; 
			}
		} else if ($method == "dine"){
			setcookie("method", "Dine-in", time() + (86400 * 10), "/");
			if (empty($_POST["dine_time"])){
				$error = "Time is required."; 
			} else{
					$time = $_POST["dine_time"]; 
			}
		} else{
			setcookie("method", "Self-Pickup", time() + (86400 * 10), "/");
			if (empty($_POST["pick_time"])){
				$error = "Time is required."; 
			} else{
					$time = $_POST["pick_time"]; 
			}
		}
	}
	setcookie("time", $time, time() + (86400 * 10), "/");
	setcookie("address", $address, time() + (86400 * 10), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="mycss.css">
    <script type="text/javascript" src="script.js"></script>
	
</head>
<body>
<form action="submit.php" method="post">
<div id="wrapper">

    <div id="leftcolumn">
        <h1><img id="logo" src="logo.png" style="padding-top: 30px;"></h1>
        <p style="font-style: italic;">SINGAPORE ECONOMIC<br><br>MIXED RICE </p>
        <br>
        <br>
        <nav>
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li>. . . . . . . . . . . .</li>
                <li><a href="aboutus.html">ABOUT US</a></li>
                <li>. . . . . . . . . . . .</li>
                <li><a href="order.html">ORDER</a></li>
                <li>. . . . . . . . . . . .</li>
                <li><a href="checkstatus.html">CHECK STATUS</a></li>
                <li>. . . . . . . . . . . .</li>
                <li><a href="contactus.html">CONTACT US</a></li>
            </ul>
        </nav>
    </div>
	<div id="rightcolumn3">
	    <h1 style="font-size: 400%; text-align: center">PAYMENT</h1>
        <br>
        <br>
        <div id="item" style="padding-right: 100px; ">
		<h2> Contact Information </h2>
		<small>Required fields are marked with asterisk *</small><br><br><br>
		<label>Name*: </label>
		<label><input type="text" id="username" name="username" required size="20"></label>
		<br><br><br>
		<label>Phone*:</label>
		<label><input type="text" id="userphone" name="userphone" required size="20"></label>
		<br><br><br>
		<label>Email*: </label>
		<label><input type="text" id="useremail" name="useremail" required size="20"></label>
		<br><br><br>
		<label>Comment: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
		<label><textarea id="comment" name="comment" rows="4" cols="30"></textarea></label>
		</div>
		<div id="option2">
		<h2> Payment Method </h2>
		<small> Please Scan the follow QR Code for Payment and Submit when payment is completed.</small><br><br>
		<table>
		<tr><td><small>Items</small></td>
		<td><small><?php echo $order; ?></small></td></tr>
		<tr><td><small>Amount</small></td>
		<td><small><?php echo "$".$price; ?></small></td></tr>
		</table><br><br>
		<img style="float: center; padding-left: 100px;" src="qrcode.jpg" width="300" height="300">
		</div>
    </div>   
</div>
<div id='checkout'>
<input type="submit" value="SUBMIT">
</div> 
</form>
</body>
</html>