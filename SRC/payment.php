<?php require "config.php"?>

<!DOCTYPE html>
<html>
<head>
<title>Rate and Review</title>
<link rel="stylesheet" href="styles/mainstyle.css">
<link rel="stylesheet" href="styles/rate.css">
</head>
<style>
#frame{
	width:500px;
	heigh:600px;
	border:2px solid black;
	border-radius:20px;
	padding:20px;
}
#frm{
	text-align:lefr;
}

table{
	border-collaspe:collapse;
}
td{padding-left:5px;
}
.confirm{
	background-color: black;
	color: white;
	width: 15%;
	padding: 10px;
}
</style>
</head>
<body>
<center>
<div id="frame">
<?php
$Mthd = $_POST["method"];
$Cno = $_POST["Cnumber"];
$Ed = $_POST["Edate"];
$cw = $_POST["cw"];
$CHname = $_POST["CHname"];
$appname = $_POST["appname"];
 

$sql = "SELECT * from appprices WHERE appname = '$appname'";

$results = $conn->query($sql);

if($results->num_rows > 0)
{
	while($row = $results->fetch_assoc())
	{
		$price = $row["price"];
	}
}

echo "<table border='1' width='300' heigh='60'>
<tr><th colspan='2'>Paymant Method</th></tr>
<tr><td>Paymant method</td><td>$Mthd</td></tr>
<tr><td>Card Number</td><td>$Cno</td></tr>
<tr><td>Expiration Date</td><td>$Ed</td></tr>
<tr><td>CW</td><td>$cw</td></tr>
<tr><td>Card Holder's Name</td><td>$CHname</td></tr>
<tr><td>App name</td><td>$appname</td></tr>
<tr><td>Price of the app</td><td>$price</td></tr>
</table>";


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="submit" value="Confirm" name="confirm" class="confirm">
</form>
</div>
<br><br>

<?php

if(isset($_POST["confirm"]))
{
	echo ("<script>
		window.alert('Download started');
		window.location.href='Home.php';
		</script>");
}


?>

</center>
</body>
</html>



