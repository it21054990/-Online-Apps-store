<?php

require 'config.php';

?>
<html>
<head>
<title> AppNet.com</title>
<link rel="stylesheet" href="styles/mainstyle.css">
</head>
<div>
<body>
<div class="headerfooterborder">
<img src="images/appnet logo.png" width="85px" height="80px" align="left">
<h1>AppNet</h1><br><br>
<br><br><br><br>
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
</div><br><br>

<h4>Enter Your Email</h4>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="email" name="Email" style="width:30%;padding:7px;display:inline block;"><br><br>
<button type="submit" name="checkBtn" style="background-color:black;color:white;padding:7px;cursor:pointer">Check my responses</button>

</form>


<?php

if(isset($_POST['checkBtn'])){
	
	$email=$_POST['Email'];
    
	$sql="SELECT * FROM jobapplications WHERE Email='$email'";
    $result=$conn->query($sql);
	
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Submission ID</th>";
    echo "<th>Name</th>";
    echo "<th>DOB</th>";
    echo "<th>Email</th>";
    echo "<th>Contact No</th>";
    echo "<th>Gender</th>";
	echo "<th>Address</th>";
	echo "<th>Job</th>";
    echo "</tr>";
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row['ID']."</td><td>".$row['Name']."</td><td>".$row['Date_of_Birth']."</td><td>".$row['Email'].
			"</td><td>".$row['Contact_No']."</td><td>".$row['Gender']."</td><td>".$row['Address']."</td><td>".$row['Job']."</td></tr>";
		}
	}
	else
	{
		echo "You have no previously submitted responses";
	}
	
	echo "<table>";
}
?>  