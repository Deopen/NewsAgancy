<?php

/*prevent code injection:

http://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php

$mysqli = new mysqli("server", "username", "password", "database_name");

    // TODO - Check that connection was successful.

    $unsafe_variable = $_POST["user-input"];

    $stmt = $mysqli->prepare("INSERT INTO table (column) VALUES (?)");

    // TODO check that $stmt creation succeeded

    // "s" means the database expects a string
    $stmt->bind_param("s", $unsafe_variable);

    $stmt->execute();

    $stmt->close();

    $mysqli->close();
    
    http://de1.php.net/manual/en/mysqli.real-escape-string.php
    
==========================================================================================

http://stackoverflow.com/questions/129677/whats-the-best-method-for-sanitizing-user-input-with-php
http://de1.php.net/manual/en/mysqli.real-escape-string.php
http://php.net/manual/en/function.htmlspecialchars.php

What you should do, to avoid problems is quite simple: Whenever you embed a string within 
foreign code, you must escape it, according to the rules of that language. For example, 
if you embed a string in some SQL targeting MySql, you must escape the string with MySql's
 function for this purpose (mysqli_real_escape_string).

Another example is HTML: If you embed strings within HTML markup, you must escape it with 
htmlspecialchars. This means that every single echo or print statement should 
use htmlspecialchars.

==========================================================================================
filtering:
http://www.w3schools.com/php/php_ref_filter.asp
PHP 5 Predefined Filter Constants
Constant 						ID 		Description
FILTER_VALIDATE_BOOLEAN 		258 	Validates a boolean
FILTER_VALIDATE_EMAIL 			274 	Validates an e-mail address
FILTER_VALIDATE_FLOAT 			259 	Validates a float
FILTER_VALIDATE_INT 			257 	Validates an integer
FILTER_VALIDATE_IP 				275 	Validates an IP address
FILTER_VALIDATE_REGEXP 			272 	Validates a regular expression
FILTER_VALIDATE_URL 			273  	Validates a URL
FILTER_SANITIZE_EMAIL 			517 	Removes all illegal characters from an e-mail address
FILTER_SANITIZE_ENCODED 		514 	Removes/Encodes special characters
FILTER_SANITIZE_MAGIC_QUOTES 	521 	Apply addslashes()
FILTER_SANITIZE_NUMBER_FLOAT 	520 	Remove all characters, except digits, +- and optionally .,eE
FILTER_SANITIZE_NUMBER_INT 		519 	Removes all characters except digits and + -
FILTER_SANITIZE_SPECIAL_CHARS 	515 	Removes special characters
FILTER_SANITIZE_FULL_SPECIAL_CHARS 	  	 
FILTER_SANITIZE_STRING 			513 	Removes tags/special characters from a string ****IMP****
FILTER_SANITIZE_STRIPPED 		513 	Alias of FILTER_SANITIZE_STRING 
FILTER_SANITIZE_URL 			518 	Removes all illegal character from s URL
FILTER_UNSAFE_RAW 				516 	Do nothing, optionally strip/encode special characters
FILTER_CALLBACK 				1024 	Call a user-defined function to filter data

Example 1

Remove all HTML tags from a string:

$str = "<h1>Hello World!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;


Example 2

Check if the variable $email is a valid email address:

$email = "john.doe@example.com";

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}


*/

//method 1: 
/*
$name=htmlspecialchars($_POST["name"]);
$family=htmlspecialchars($_POST["family"]);
$email=htmlspecialchars($_POST["email"]);
$pass=$_POST["pass"]; //to respect complex passwords :) use mysqli_escape instead %md5%
*/

//method 2 (filtering):
$uname=filter_var($_POST["uname"],FILTER_SANITIZE_STRING);
$name=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
$family=filter_var($_POST["family"],FILTER_SANITIZE_STRING);
$email=filter_var($_POST["email"],FILTER_SANITIZE_STRING);
$pass=$_POST["pass"]; //to respect complex passwords :) use mysqli_escape instead %md5%


if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo "Email is not valid!"; // Its working (tested)
}else{
	echo "Full name: ".$name." ".$family." <br>"."Email: ".$email."<br>";
}//end validate email

include("connect.php");

$uname=mysql_real_escape_string($uname);
$name=mysql_real_escape_string($name);
$family=mysql_real_escape_string($family);
$email=mysql_real_escape_string($email);
$pass=mysql_real_escape_string($pass);


//http://www.w3schools.com/php/php_mysql_insert.asp
/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

*/

$sql = "INSERT INTO users (id,uname,name, family,email,pass) 
VALUES (NULL,'$uname','$name', '$family', '$email',MD5('$pass'))";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo "";
    echo "<br><a href=home.php>Home</a><br>";
} else if (strpos($conn->error,"Duplicate entry")!==false) {
	echo "Please choose another username, It's choosen before";
	echo "<br><a href=home.php>Home</a><br>";	
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br><a href=home.php>Home</a><br>";	
}

$conn->close();
?>