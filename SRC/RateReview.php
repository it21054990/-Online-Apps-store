<?php require "config.php"?>


<!DOCTYPE html>
<html>
<head>
<title>Rate and Review</title>
<link rel="stylesheet" href="styles/mainstyle.css">
<link rel="stylesheet" href="styles/rate.css">
</head>
<body>
<div class="headerfooterborder">

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

<div id="form">
<center>
<img src="images/rate.jpg" width="100px" height="100px">
<h1 style="text-shadow: 2px 2px 5px white;">Rate and Review</h1>
</center>
<form id="rate "method="POST" action="rate.php"><br><br>

<label for="username">Enter username</label><br>
<input id="username" type="text" name="uname"><br><br>

<label for="app">Enter name of app</label><br>
<input id="app" type="text" name="appname"><br><br>
Select stars <br>

 <input type="radio" id="star5" name="rate" value="5">
 <label for="star5">5 stars</label>
 <input type="radio" id="star4" name="rate" value="4">
 <label for="star4">4 stars</label>
 <input type="radio" id="star3" name="rate" value="3">
 <label for="star3">3 stars</label>
 <input type="radio" id="star2" name="rate" value="2">
 <label for="star2">2 stars</label>
 <input type="radio" id="star1" name="rate" value="1">
 <label for="star1">1 star</label>
 
<br><br>	
<label for="reviewapp">Add a review</label>
<textarea id="reviewapp" name="review" rows="4" cols="50" style="display: block"></textarea><br>

<input type="submit" value="submit" name="submitbtn" id="submit"><br><br>
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>View my reviews</h2>
<label for="unm">Enter username</label><br>
<input id="unm" type="text" name="username"><br><br>
<input type="submit" name="table" value="Show my reviews" id="submit"></form>

<?php

if(isset($_POST["table"]))
{
echo "<table border='1' with='50%'>
      <tr>
	  <th>App name</th>
	  <th>Review</th>
	  <th>Update</th>
	  <th>Delete</th>
	  </tr>";
	  
	  $username = $_POST["username"];
	  
	  $sql1 = "SELECT ID, appname, review from ratereview WHERE username = '$username'";
	  
	  $results1 = $conn->query($sql1);
	  
	  if($results1->num_rows > 0)
	  {
		  while($row = $results1->fetch_assoc())
		  {
			  $id =  $row["ID"];
			  echo "<tr><td>".$row["appname"]."</td><td>".$row["review"]."</td>
			  <td><a href='editReview.php?id=$id'><input type='submit' value='Edit'></a></td>
			  <td><a href='deleteReview.php?id=$id'><input type='submit' value='Delete'></a></td></tr>";
		  }
	  }
	  else
	  {
		  echo "<script>alert('You have not added a review yet')</script>";
	  }
	  

echo "</table>";


}
?>




</div>

<?php

echo "<div id='defaultreviews'><h1>Top 10 User Reviews</h1><hr>";

$sql = "SELECT username, appname, review from ratereview ORDER BY ID DESC LIMIT 10";
	
	$results = $conn->query($sql);
	
	if($results->num_rows > 0)
	{
		while($rows = $results->fetch_assoc())
		{
			echo "<p><b>".$rows["username"]."</b><br>".$rows["appname"]."<br>".$rows["review"]."</p><hr>";
		}
	}
	else
	{
		echo "0 results";
	}
	
	echo "</div>";

$conn->close();



?>




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
