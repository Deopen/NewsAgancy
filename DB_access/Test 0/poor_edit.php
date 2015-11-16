<html>
<head>
<title>Edit</title>
</head>

<body>

<form method="POST" Action="poor_do_edit.php" name="editForm">

<?php
$uname=$_POST["uname"];
include("connect.php");
$query = "SELECT * FROM users WHERE uname = '$uname'";
$res=$conn->query($query)->fetch_assoc();
?>

Username  		: <input type="text" name="uname" value='<?php echo $uname;?>'/>
<br><br>
Name  			: <input type="text" name="name" value='<?php echo $res['Name'];?>'/><br><br>
Family			: <input type="text" name="family" value='<?php echo $res['Family'];?>'/><br><br>
<input type="hidden" name="id" value='<?php echo $res['id'];?>'/>
<br><br><input type="submit" value="Edit">
<br><a href="home.php">Home</a>
</body>
</html>