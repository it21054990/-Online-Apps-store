<?php

require "config.php";

$id = $_GET["id"];


$sql = "DELETE FROM ratereview WHERE ID = $id";

if($conn->query($sql))
{
	echo ("<script>
    window.alert('Review Succesfully deleted');
    window.location.href='RateReview.php';
    </script>");
		
}
else
	{
		echo ("<script>
    window.alert('Review not deleted');
    window.location.href='RateReview.php';
    </script>");
	}


?>