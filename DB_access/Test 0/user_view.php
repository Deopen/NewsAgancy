<?php

include("connect.php");
session_start();

if (isset($_SESSION['admin_access']))
	echo "<h3>Admin panel</h3><br>";
else{
	echo "go to hell and die!<br>";
	die;
}//end else


$query="SELECT * FROM users";
$res=$conn->query($query);

echo "<table border=1> <tr><td>Name</td><td>Family</td>
<td>User Name</td><td>View</td><td>Edit</td><td>Delete</td></tr>";

while ($row=$res->fetch_array(MYSQLI_ASSOC)) {
	echo "<td>".$row['Name']."</td>";
	echo "<td>".$row['Family']."</td>";
	echo "<td>".$row['uname']."</td>";
	echo "<td><a href=view_user.php?uid=".$row['id'].">View</a></td>";
	echo "<td><a href=session_edit.php?uid=".$row['id'].">Edit</a></td>";
	echo "<td><a href=delete_user.php?uid=".$row['id'].">Delete</a></td>";
	echo '</tr>';
}//end while
echo '</table>';
echo "<a href=home.php>Home</a><br>";	
?>