<?php

$username="root";
$password="";
$server="localhost";
$database="AppNet";

$conn=new mysqli($server,$username,$password,$database);

if($conn->connect_error)
{
	die ("error:".$conn->connect_error);
}


?>