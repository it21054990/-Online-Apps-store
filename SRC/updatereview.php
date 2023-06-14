<?php

require "config.php";

$id = $_GET["id"];
$appname = $_POST["appname"];
$review = $_POST["review"];

$sql = "UPDATE ratereview SET appname = '$appname', review = '$review' WHERE ID = $id";

if($conn->query($sql))
{
	echo ("<script>
    window.alert('Review Succesfully updated');
    window.location.href='RateReview.php';
    </script>");
		
}
else
	{
		echo ("<script>
    window.alert('Review not updated');
    window.location.href='RateReview.php';
    </script>");
	}


?>