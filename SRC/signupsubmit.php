<?php

		include_once 'config.php';
//connection with database is established
?>

<?php
if(isset($_POST['submitBtn']))
{

$fname= $_POST["firstname"];
$lname=$_POST["lname"];
$dob = $_POST["day"];
$email = $_POST["email"];
$password = $_POST["psw"];


$sql = "INSERT INTO useraccounts(userID,firstname,lastname,dob,email, password) VALUES(' ', '$fname', '$lname', '$dob', '$email', '$password')" ;

if (mysqli_query($conn,$sql)){
	
	echo ("<script>
    window.alert('Account created successfully');
    window.location.href='Home.php';
    </script>");
}
else{
	
	echo "<script> alert('Error!') </script>";
	
}

mysqli_close($conn);
}

 ?>
 
 <?php
$target_dir = "profilepics/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);



if(isset($_FILES["image"])) {
if (move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
echo "Profile picture has been set to ". basename( $_FILES["image"]["name"]);
} 
else {
echo "Error while uploading your profile photo."; 
}
}else{
echo "File not available"; 
}

rename($target_file, "profilepics/$email.jpeg");
?>



			 
