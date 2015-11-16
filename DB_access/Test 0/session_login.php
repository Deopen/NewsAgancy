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
		session_start();
		$_SESSION['uid']=$fields['id'];
		echo "<a href=session_edit.php>Session_edit</a><br>";
		//======================user view=========================
		if ($fields['access']==="admin"){
			echo "<a href=user_view.php>User_view</a><br>";
			$_SESSION['admin_access']=1;
			}//end if
		else 
			$_SESSION['admin_access']=NULL;
		//========================================================
		
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