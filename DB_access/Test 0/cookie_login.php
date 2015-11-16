<?php

$uname=filter_var($_POST["uname"],FILTER_SANITIZE_STRING);
$pass=$_POST["pass"];

include("connect.php");

$uname=mysql_real_escape_string($uname);
$pass=mysql_real_escape_string($pass);
$pass_MD5=MD5($pass);


$sql = "SELECT * FROM users WHERE uname = '$uname' and pass = '$pass_MD5' ";

if (($result=$conn->query($sql))==TRUE){
	if (($result->num_rows)==1){
		//$fields=$result->fetch_fields();
		//number of fields=sizeof($fields)
		//$fields[0]->name ; name of field
		$fields=$result->fetch_assoc();
		echo "Welcome ".$fields['Name']." !<br><br>";
		setcookie("uid",$fields['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
		echo "<a href=cookie_edit.php>Cookie_edit</a><br>";
		echo "<a href=home.php>Home</a><br>";
	}else{
		echo "User or password is incorrect!<br><br>";
		echo "<a href=home.php>Home</a><br>";		
	}
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>