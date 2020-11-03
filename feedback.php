<?php
	$your_email = $_POST['feedback_email'];
	$your_phone = $_POST['feedback_phone'];
	$your_comment = $_POST['feedback_comment'];

	@ $db = new mysqli('localhost', 'f31ee', 'f31ee', 'f31ee');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database.  Please try again later.';
		exit;
	}
	$query = "INSERT INTO `eatwhat_feedback` ( `email` , `phone` , `comment`) 
	            VALUES ('".$your_email."', '".$your_phone."', '".$your_comment."')"; 


	if ($db->query($query) === TRUE) {
		$msg = "Your feedback has been received successfully!";
	} else {
		$msg = "Error updating record: " . $db->error;
		$msg = "<br> Error query is: " . $query;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
    <link rel="stylesheet" href="mycss.css">
</head>
<body>
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
    <br><br><br><br>
    <h1 style="font-size: 400%; text-align: center"><?php echo $msg; ?></h1>
    </div>  
</div>
<div id='checkout'>
    <a href="home.html"><input type="submit" value="BACK TO HOME PAGE"></a>
</div>
</body>
</html>