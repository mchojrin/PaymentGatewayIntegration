<?php

session_start();
$_SESSION['referrerId'] = $_GET['referrerId'];

?>
<html>
<head>
    <title>Init purchase</title>
</head>
<body>
    <p>You are about to make a purchase. You've been referred here by salesman <b><?php echo $_SESSION['referrerId'];?></b></p>
    <p>Click on this button to initiate payment</p>
    <button onclick="location.href='http://localhost:8001?callback=<?php echo urlencode('http://localhost:8000/payment_complete.php');?>'">Pay</button>
</body>
</html>
