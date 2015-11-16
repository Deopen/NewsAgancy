<?php
header('Location: home.php');

session_start();
$_SESSION=array();
foreach ($_COOKIES as $cookieId=>$cookieValue){
	setcookie($cookieId,NULL,time()-3600,'/');
}
session_destroy();
?>