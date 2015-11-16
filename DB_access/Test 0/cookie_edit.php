<html>
<head>
<title>Edit</title>
</head>

<body>

<form method="POST" Action="session_do_edit.php" name="editForm">

<?php
session_start();
$uid=$_COOKIE["uid"];
include("connect.php");
$query = "SELECT * FROM users WHERE id = '$uid'";
$res=$conn->query($query)->fetch_assoc();
?>

Username  		: <input type="text" name="uname" value='<?php echo $res['uname'];?>'/>
<br><br>
Name  			: <input type="text" name="name" value='<?php echo $res['Name'];?>'/><br><br>
Family			: <input type="text" name="family" value='<?php echo $res['Family'];?>'/><br><br>
<br><br><input type="submit" value="Edit">
<br><a href="home.php">Home</a>
</body>
</html>