<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "header.php";
require './DB_access/newsAgancy/DB_access.php';
session_start();
if (!isset($_SESSION['login']['uid']) || $_SESSION['login']['AL']=="unknown")
    {
    
        echo "Go login";
        die;
        
    }//hes not login

if (isset($_REQUEST['getContext'])){
    
    $newsId=$_REQUEST['getContext'];
    $context=getContextOfNews($newsId);
    echo $context;
    
}else if(isset($_REQUEST['delete'])){
    
    $newsId=$_REQUEST['delete'];
    if (getOwnerIdOfNews($newsId)==$_SESSION['login']['uid'] || 
            isAdminPremission()){
        $res=  remove_news($newsId);
        if ($res)
            echo "1";
    //delete news
      }
}else if(isset($_REQUEST['getMoreLimit'])){
    
    echo moreLimit;
    
}
else if ( isset($_POST['title']) && isset($_POST['context']) && isset($_POST['newsId']) ){
    $context= filter_var($_POST['context'],FILTER_SANITIZE_STRING);
    $title=filter_var($_POST['title'],FILTER_SANITIZE_STRING);
    $newsId=$_POST['newsId'];
    
    $context=  mysql_real_escape_string($context);
    $title=  mysql_real_escape_string($title);
    $newsId=  mysql_real_escape_string($newsId);
    
    if (getOwnerIdOfNews($newsId)==$_SESSION['login']['uid'] || 
            isAdminPremission()){
        
        //update news here
        
        echo updateNews($title, $context, $newsId);
        
    }//approved
    
}//end process edit
    
?>