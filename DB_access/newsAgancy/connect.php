<?php

$conn=new mysqli("localhost","root","","newsAgancy");
if ($conn->connect_error){
    die("connection error :".$conn->connect_error);
}

?>