<?php

session_start();

if(isset($_SESSION["logged_user"]))
{
	echo ("<script>
    window.alert('Download started');
	window.history.back();
    </script>");
}
else
{
	echo ("<script>
    window.alert('Please log in');
    window.location.href='login.php';
    </script>");
}

?>