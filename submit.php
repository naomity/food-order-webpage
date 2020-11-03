<?php
	$order = $_COOKIE['order'];
	$price = (float)$_COOKIE['price'];
	$time = $_COOKIE['time'];
	$address = $_COOKIE['address'];
	$method = $_COOKIE['method'];
	
	$name = $_POST['username'];
	$phone = $_POST['userphone'];
	$email = $_POST['useremail'];
	$date = date('Format String');
	
	if (!empty($_POST["comment"])){
		$comment = $_POST["comment"]; 
	} else{
		$comment = ""; 
	}
	
	@ $db = new mysqli('localhost', 'f31ee', 'f31ee', 'f31ee');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database.  Please try again later.';
		exit;
	}
	
	$query = "INSERT INTO `eatwhat_orders` ( `orderid` , `name` , `phone` , `email` , `comment` , `item` , `amount` , 
	`dining_method` , `delivery_time` , `delivery_address` , `timestamp` ) VALUES 
	(NULL , '".$name."', '".$phone."', '".$email."', '".$comment."', '".$order."', 
	'".$price."',  '".$method."', '".$time."', '".$address."', NULL)"; 
	

	if ($db->query($query) === TRUE) {
		$msg = "Order Successfully Submitted!";
		
	} else {
		$msg = "Error updating record: " . $db->error;
		$msg = "<br> Error query is: " . $query;
	}
	
	$to      = $email;
	$subject = 'Order Confirmation from EatWhat';
	$message = 'Dear Customer, <br> your order with us has been confirmed. <br> 
	Please refer to below for your order details. You may also visit our website to check latest status of your order.'.
	PHP_EOL .'Items: '.$order.PHP_EOL .'Amount: '.$price.PHP_EOL .'Dining Option: '.$method.PHP_EOL .'Estimated Time: '.$time.PHP_EOL .
	'Address: '.$address. PHP_EOL .'Name: '.$name.PHP_EOL .'Phone Number: '.$phone.PHP_EOL .'Email Address: '.$email.PHP_EOL .'Comments: '.$comment.PHP_EOL .
	PHP_EOL . 'Thank you and bon appeite!';
	$headers = 'From: f31ee@localhost' . "\r\n" .
		'Reply-To: f31ee@localhost' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers,'-ff31ee@localhost');
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit</title>
    <link rel="stylesheet" href="mycss.css">
    <script type="text/javascript" src="script.js"></script>
	
</head>
<body>
<div id="wrapper">
    <div id="leftcolumn">
        <h1><img id="logo" src="logo.png" style="padding-top: 30px;"></h1>
        <p style="font-style: italic;">SINGAPORE ECONOMIC<br><br>MIXED RICE</p>
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
	<div id="rightcolumn1">
	    <h2 style="font-size: 300%; text-align: center"><?php echo $msg; ?></h2>
        <br>
        <br>
        <div id="item">
		<h2> Order Details </h2>
		<table>
		<tr><td>Items</td>
		<td><?php echo $order; ?></td></tr>
		<tr><td>Amount</td>
		<td><?php echo "$".$price; ?></td></tr>
		<tr><td>Dining Option</td>
		<td><?php echo "Dining Option:  ".$method; ?><br>
			<?php echo "Estimated Time: ".$time; ?><br>
			<?php echo "Address:        ".$address; ?></td></tr>
		<tr><td>Name</td>
		<td><?php echo $name; ?></td></tr>
		<tr><td>Phone</td>
		<td><?php echo $phone; ?></td></tr>
		<tr><td>Email</td>
		<td><?php echo $email; ?></td></tr>
		<tr><td>Comments</td>
		<td><?php echo $comment; ?></td></tr>
		</table>
		</div>
		<div id="option2">
		<h2> Message from EatWhat</h2>
		<p> A confirmation email has been sent to your email address. <br><br>
		You can also check the order status or give feedback
		by finding them in the navigation bar. <br><br>
		You will be notified when your order is ready. <br><br>
		Thank you. </p>
		</div>
    </div>   
</div>
</body>
</html>