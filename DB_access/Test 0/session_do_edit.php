<?php

include("connect.php");
session_start();
$uname=$_POST['uname'];
$name=$_POST['name'];
$family=$_POST['family'];

if (isset($_SESSION['admin_access']))
	$uid=$_POST['uid'];
else
	$uid=$_SESSION["uid"];

$query="UPDATE `testcase1`.`users` SET `uname` = '$uname', `Name` = '$name', `Family` = '$family' WHERE `users`.`id` = $uid;";
//echo $query.'<br>';

if ($conn->query($query)===TRUE)
	echo "Edit Successfully";
else
	echo "Error :".$conn->error;
	

echo  "<br><a href=\"home.php\">Home</a>";

?>