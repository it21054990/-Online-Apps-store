
<?php require "config.php"?>

<!DOCTYPE html>
<html>
<head>
<title> AppNet.com</title>
<link rel="stylesheet" href="styles/mainstyle.css">
<link rel="stylesheet" href="styles/rate.css">
</head>
<body>
<div class="headerfooterborder">
<img src="images/profpic login.png" id="profpic" width="50px" height="50px" align="right "style="padding-left:1350px">
<div style="float: right;">
<a href="login.php" class="header">Login</a><br><br>
<a href="signupform.html" class="header">Sign up</a>
</div>
<img src="images/appnet logo.png" width="85px" height="80px" align="left">
<h1>AppNet</h1><br><br>
<ul>
<li><a href="Home.php">Home</a></li>
<li class="dropdown"><a href="#" class="dropbtn">Categories</a>
<div class="dropcontent">
 <a href="music.php">Music</a>
 <a href="education.php">Education</a>
 <a href="finance.php">Finance</a>
 <a href="games.php">Games</a>
 <a href="lifestyle.php">Lifestyle</a>
</div></li>
<li><a href="devLogin.php">Upload an App</a></li>
</ul>
</div>

<?php

$id = $_GET["id"];
$sql = "SELECT * FROM ratereview where ID = $id";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$appname = $row["appname"];
		$review = $row["review"];
	}
}

?>

<form method="post" action="updatereview.php?id=<?php echo $id;?>">
<div id="form">
App name: <input type="text" name="appname" value="<?php echo $appname; ?>"><br>
Review      :<textarea name="review" rows="6" style="display: block"><?php echo $review; ?>"</textarea><br><br>
<input id="submit" type="submit" value="Save">

</form>
</div>

<div class="headerfooterborder">
<img src="images/appnet logo.png" width="60px" height="60px" align="left">
<h2>AppNet</h2><br><br>
<h3 align="center">Company</h3>
<p id="footerlinks" align="center">
<a href = "aboutus.html">About_us</a>
<a href = "Careers.html">Careers</a>
<a href = "legal information.html">Legal_polices</a>
</p>
<div align="right">
<img src="images/whatsapp.png" width="30px" height="30px">
<a href="https://www.facebook.com/"><img src="images/facebook.png" width="30px" height="30px"></a>
<a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><img src="images/twitter.png" width="30px" height="30px"></a>
<a href="https://www.instagram.com/accounts/login/"><img src="images/insta.png" width="30px" height="30px"></a>
</div>
</div>
</body>
</html>
