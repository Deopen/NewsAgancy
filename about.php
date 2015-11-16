<?php

require 'header.php';
require './DB_access/newsAgancy/DB_access.php';

$aboutTxt=  getFromConfig("about");
$emailPos=  strpos($aboutTxt,"Email:");
$phonePos= strpos($aboutTxt,"Phone: ");
$email=  substr($aboutTxt, $emailPos+strlen("Email: "),$phonePos-strlen("Email: "));
$phone=  substr($aboutTxt, $phonePos+strlen("Phone: "));

$smarty->assign("phone",$phone);
$smarty->assign("email",$email);

$smarty->display("about.TPL");


?>