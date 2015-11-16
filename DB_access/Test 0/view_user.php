<?php

include("connect.php");
session_start();

if (isset($_SESSION['admin_access']))
	echo "<h3>Admin panel</h3><br>";
else{
	echo "go to hell and die!<br>";
	die;
}//end else

$uid=$_GET['uid'];

$query="SELECT * FROM users where id='$uid'";
$res=$conn->query($query)->fetch_assoc();

foreach ($res as $name=>$val) {

	echo $name.': '.$val.'<br>';

}

echo "<a href=home.php>Home</a><br>";
?>