<?php


	require "config.php";
	
	if(isset ($_POST["submitbtn"]))
	{
		$username = $_POST["uname"];
		$appname = $_POST["appname"];
		$rate = $_POST["rate"];
		$review = $_POST["review"];


		$sql = "INSERT INTO ratereview(username,appname,rate,review)
		VALUES('$username','$appname','$rate','$review')";
	
	if($conn->query($sql))
	{
		echo ("<script>
		window.alert('Review Succesfully added');
		window.location.href='RateReview.php';
		</script>");
		
	}
	else
	{
		echo ("<script>
		window.alert('Review not added');
		window.location.href='RateReview.php';
		</script>");
	}
	
		$conn->close();
    }
	



?>
