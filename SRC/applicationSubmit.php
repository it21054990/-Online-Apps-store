<?php
    
	require "config.php";

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
<h1>AppNet</h1>
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

<?php
   $target_dir = "uploads/CV_files/";
   $target_file = $target_dir . basename($_FILES["CVFile"]["name"]);
   $Upload = 1;
   $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//Validations brfore uploading the file code referred from https://www.w3schools.com/php/php_file_upload.asp

   if ($_FILES["CVFile"]["size"] > 20000000)  //size less than 20MB
   {
    echo "Sorry, your file is too large.";
    $Upload = 0;
   }

   if($FileType != "pdf") 
   {
    echo "Sorry, only PDF files are allowed.";
    $Upload = 0;
   }

   if ($Upload == 0) 
   {
    echo "Sorry, your file was not uploaded.<br>";
   } 
   else 
   {
     if (move_uploaded_file($_FILES["CVFile"]["tmp_name"], $target_file)) {
     echo "Your CV file ". htmlspecialchars( basename( $_FILES["CVFile"]["name"])). " has been uploaded.";
   } 
     else 
     {
       echo "Sorry,please retry uploading.";
     }
}
   
 
   if(isset($_POST["submitBtn"])){
	   
   $Name=$_POST["fullName"];
   $DateofBirth=$_POST["DOB"];
   $Email=$_POST["email"];
   $ContactNo=$_POST["phoneNo"];
   $Gender=$_POST["gender"];
   $Address=$_POST["address"];
   $Job=$_POST["jobApplying"];

   $sql="INSERT INTO jobapplications (ID,Name,Date_of_Birth,Email,Contact_No,Gender,Address,Job) 
   VALUES ('','$Name','$DateofBirth','$Email','$ContactNo','$Gender','$Address','$Job')";
   
   
    if($conn->query($sql))
    {
	 echo "Thank You ! Your response was recorded <br>";
    }
    else
    {
	  echo "Error :".$conn->error;
    }
	
   }
   
   $newName=$target_dir.$Name."_".$Job.".pdf";
   
   rename($target_file, $newName);
   
 ?>
<br>
<button style="background-color:black;padding:7px;"><a href="Application.html" style="text-decoration:none;color:white;">Back</a></button>