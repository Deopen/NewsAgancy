<?php


require "header.php";
require './DB_access/newsAgancy/DB_access.php';
session_start();

if (!isset($_SESSION['login']['uid']) || $_SESSION['login']['AL']=="unknown")
    {
    
        echo "Go login";
        die;
        
  }//hes not login

  
$back_link = $_SERVER['HTTP_REFERER'];
$smarty->assign("BACK_LINK",$back_link);
  
$smarty->assign("username",  getUserNameWithId($_SESSION['login']['uid']));

if (isAdminPremission())
    $smarty->assign("admin",1);

$smarty->display("user_panel.tpl");


?>