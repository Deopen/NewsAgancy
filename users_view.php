<?php

require "header.php";
require './DB_access/newsAgancy/DB_access.php';
session_start();

if (!isset($_SESSION['login']['uid']) && $_SESSION['login']['AL']!="admin")
    {
    
        echo "Premission denied!";
        die;
        
  }//hes not login

  $users=array();
  
  foreach (getAllUsers() as $userInfo){
      
      $userElement=array(
          "id"=>$userInfo[0],
          "name"=>$userInfo[1],
          "family"=>$userInfo[2],
          "email"=>$userInfo[3],
          "username"=>$userInfo[4]
       );
      
       array_push($users, $userElement);
      
  }//end loop for iterating user
  
  $smarty->assign("allUsers",$users);
  $smarty->display("users_view.tpl");

  
?>