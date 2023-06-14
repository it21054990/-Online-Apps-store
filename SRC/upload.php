<?php

		include_once 'config.php';
//connection with database is established
?>

<?php
if(isset($_POST['submitBtn']))
{
$fname= $_POST["firstname"];
$lname=$_POST["lname"];
$email = $_POST["email"];
$appname = $_POST["appname"];
$category = $_POST["category"];
$des = $_POST["description"];
$age18 = $_POST["checkbox1"];


$sql = "INSERT INTO uploadedapps(app_ID, firstname, lastname, email, appname, category, description, ageabv18)
 VALUES(' ', '$fname', '$lname','$email', '$appname', '$category', '$des', '$age18')";

if (mysqli_query($conn,$sql)){
	
	echo ("<script>
    window.alert('App uploaded successfully!');
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
$target_dir = "uploads/appfiles/";
$target_file = $target_dir . basename($_FILES["appfile"]["name"]);
if(isset($_FILES["appfile"])) {
if (move_uploaded_file($_FILES["appfile"]["tmp_name"],$target_file)){
echo "The file ". basename( $_FILES["appfile"]["name"]). " is uploaded.";
} 
else {
echo "Error while uploading your file."; 
}
}else{
echo "File not available"; 
}

?>