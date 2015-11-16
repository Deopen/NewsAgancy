<?php

function createHtmlFormButton($link,$name,
								$varNameForPost,
								$varValueForPost){

	$htmlCode="<form method='POST' action='$link'>";
	$htmlCode=$htmlCode."<input type='submit' value='$name'>";
	if ($varNameForPost!="" && $varValueForPost!="")
		$htmlCode=$htmlCode."<input type='hidden' 
											name='$varNameForPost'
											value='$varValueForPost'>";
	$htmlCode=$htmlCode."</form>";
	echo $htmlCode;

}//end create html form button

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
		createHtmlFormButton("poor_edit.php","edit","uname",$uname);
		echo "<br><a href=\"home.php\">Home</a>";
	}else{
		echo "User or password is incorrect!<br><br>";
		createHtmlFormButton("poor_login.html","back","","");
		echo "<br><a href=\"home.php\">Home</a>";
	}
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>