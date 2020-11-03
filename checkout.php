<?php
	$order = $_COOKIE['order'];
	$price = $_COOKIE['price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="mycss.css">
    <script type="text/javascript" src="script.js"></script>
	
</head>
<body>
<form action="payment.php" method="post">
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
	    <h1 style="font-size: 400%; text-align: center">CHECKOUT</h1>
        <br>
        <br>
        <div id="item">
		<h2> Order Items </h2>
		<table>
		<tr><td>Items</td>
		<td><?php echo $order; ?></td></tr>
		<tr><td>Amount</td>
		<td><?php echo "$".$price; ?></td></tr>
		</table>
		</div>
		<div id="option">
		<h2> Dining Options </h2>
		<small> Please Select Time between 11am and 8pm, 30 minutes from payment time.</small><br><br><br>
		<input type="radio" name="radio" value="dine">Dine-in<br><br>
		<small>Please Select a Time for Dine-in Meal. &nbsp &nbsp &nbsp </small>
		<label><input type="time" id="dine_time" name="dine_time" min="11:00" max="20:00"></label>
		<br><br><br>
		<input type="radio" name="radio" value="pick">Self-Pickup<br><br>
		<small>Please Select a Time for Self-Pickup Meal.</small>
		<label><input type="time" id="pick_time" name="pick_time" min="11:00" max="20:00"></label>
		<br><br><br>
		<input type="radio" name="radio" value="deliver">Delivery<br><br>
		<small>Please Select a Time for Delivery. &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </small>
		<label><input type="time" id="deliver_time" name="deliver_time" min="11:00" max="20:00"></label><br><br>
		<small>Please Enter Address for Delivery. &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </small>
		<label><textarea id="address" name="address" rows="4" cols="30"></textarea></label>
		</div>
    </div>   
</div>
<div id='checkout'>
<input type="submit" value="PAYMENT">
</div>
</form>

</body>
</html>