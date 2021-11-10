<html>
<title>Payment Gateway</title>
<body>
    <p>Confirm payment by clicking this button</p>
    <button onclick="location.href='<?php echo urldecode($_GET['callback']);?>'">Confirm payment</button>
</body>
</html>
