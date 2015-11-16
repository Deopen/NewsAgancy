<?php

header('Location: user_view.php');
include("connect.php");

session_start();

if (isset($_SESSION['admin_access']))
	echo "Welcome Admin";
else{
	echo "go to hell and die!<br>";
	die;
}//end else

$id_toDel=$_GET['uid'];

$query="DELETE FROM `testcase1`.`users` WHERE `users`.`id` = $id_toDel";
echo "<br>";
if ($conn->query($query)===TRUE)
	echo "Delete Successfully";
else
	echo "Error :".$conn->error;

?>