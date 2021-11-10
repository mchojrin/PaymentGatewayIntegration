<?php
session_start();
?>
<html>
<head>
    <title>Payment complete</title>
</head>
<body>
    <p>Thanks for your purchase!</p>
    <p>The salesman <b><?php echo $_SESSION['referrerId'];?></b> will get the comission</p>
</body>
</html>

