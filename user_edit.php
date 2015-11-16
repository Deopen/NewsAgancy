<?php

require "header.php";
require './DB_access/newsAgancy/DB_access.php';

session_start();

if (!isset($_SESSION['login']['uid']) || $_SESSION['login']['AL']=="unknown")
    {
    
        echo "Go login";
        die;
        
  }//hes not login
 
  function getUserInfoAndAssignToSmarty($uid){

    global $smarty;
       $userInfo=  getAllFromTableWithWhere
          ("users", "where id=".wrapedInQuatation($uid));
//print_r($userInfo[0]);
    $name=$userInfo[0][1];
    $family=$userInfo[0][2];
    $email=$userInfo[0][3];
    $username=$userInfo[0][4];
    $_SESSION["currentEditingUsername"]=$username;
    
    $smarty->assign("edit",1);
    $smarty->assign("name",$name);
    $smarty->assign("family",$family);
    $smarty->assign("username",$username);
   $smarty->assign("email",$email);
      
  }//end get user info and smarty assign
  
 
 if (empty($_POST) && empty($_REQUEST)){
     
     getUserInfoAndAssignToSmarty($_SESSION['login']['uid']);
    $smarty->display("register_main.tpl"); 
}else if(isset($_POST["name"])) {
    
    
    if (!isset($_SESSION['login']['uid']) || $_SESSION['login']['AL']=="unknown")
    {
        header("Location:login.php");  
        echo "Go login";
        die;
    }//hes not login

    
    header("Location:user_panel.php");  
    
    $name=  wrapedInQuatation($_POST["name"]);
    $family= wrapedInQuatation($_POST["family"]);
    $username= wrapedInQuatation($_POST["username"]);
    
    $pass= wrapedInQuatation(md5($_POST["pass"]));
    
    if(isAdminPremission() && isset($_SESSION['login']['editUid'])){
        $uid=$_SESSION['login']['editUid'];
        header("Location:users_view.php");
        $_SESSION['login']['editUid']=null;
    }else{
        $uid=$_SESSION['login']['uid'];
    }
    
    $_SESSION["currentEditingUsername"]=null;
    updateTableWithWhere("users", 
                "name=$name,family=$family,username=$username,password=$pass",
                "where id='$uid' ");
    
    if ($username!=getUserNameWithId($_SESSION['login']['uid']) && isAdminPremission()){
        header("Location:users_view.php");
    }
}else if (isAdminPremission() && isset($_REQUEST["edit_user"])){
    
    
    $username=$_REQUEST["edit_user"];
    $uid= getIdWithUserName($username);
    $_SESSION['login']['editUid']=$uid;
    getUserInfoAndAssignToSmarty($uid);
    $smarty->display("register_main.tpl");
    
}//end else if admin
else if (isAdminPremission() && isset($_REQUEST["delete_user"])){
    
    header("Location:users_view.php");
    $username=$_REQUEST["delete_user"];
    $uid=  getIdWithUserName($username);
    deleteRowFromTable("users", "where id='$uid'");
    
}//end else if admin


?>