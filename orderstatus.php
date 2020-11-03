<?php
	$check_email = $_POST['status_email'];
	if (!$check_email){
        echo'You have not entered you email address. Please go back and check again.';
        exit;
    }
	@ $db = new mysqli('localhost', 'f31ee', 'f31ee', 'f31ee');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database.  Please try again later.';
		exit;
    }
    $query = "select * from eatwhat_orders where email='".$check_email."' ORDER BY timestamp DESC LIMIT 1";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orderstatus</title>
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
        <br>
        <br>
        <?php
        if (empty($row)){
            $msg = "You haven't placed an order";
        }
        else{
            $msg = 'Your order status:';
        }
        ?>       
        <h1 style="font-size: 400%; text-align: center"><?php echo $msg?></h1>
        <br>
        <br>
        <table border="1" style="margin: auto; font-size: large;">
            <tr>
                <?php
                $date = time();
                $orderDateTime = $row['timestamp'];
                $timestamp = strtotime($orderDateTime);
                $mins = ($date - $timestamp) / 60;
                ?>
                <td>Name:</td>
                <td><?php echo $row['name']; ?></td>
                <td style="font-weight: bold" rowspan="5">
                    <?php 
                    if (empty($row)){
                        echo "No order.";
                    }
                    elseif ($mins<=20){
                        echo "We are preparing your order.";
                    }
                    elseif ($row['method']=='deliver' && 20<$mins && $mins<=40){
                        echo "We are delivering your order.";
                    }
                    elseif ($row['method']!='deliver' && 20<$mins && $mins<=40){
                        echo "Your order is ready.";
                    }
                    else{
                        echo "Your order has been finished.";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><?php echo $row['phone']; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
                <td>Order time:</td>
                <td><?php echo $row['timestamp']; ?></td>
            </tr>
            <tr>
                <td>Dining method:</td>
                <td><?php echo $row['dining_method']; ?></td>
            </tr>
        </table>
        
    </div>   
</div>
<div id='checkout'>
    <a href="contactus.html"><input type="submit" value="CONTACT EatWhat"></a>
</div>
</body>
</html>
