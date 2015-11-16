<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require "header.php";
require './DB_access/newsAgancy/DB_access.php';

session_start();
if (!isset($_SESSION['login']) || $_SESSION['login']['AL']=="unknown")
    {
    
        echo "Go login";
        die;
        
    }//hes not login

    
if (empty($_POST))
	$smarty->display('register_news.tpl');
elseif ( isset($_POST['title']) && isset($_POST['context']) ) {
    //insert the news
    
    $title=$_POST['title'];
    $context=$_POST['context'];
    $uid=$_SESSION['login']['uid'];
    
    $title=  filter_var($title,FILTER_SANITIZE_STRING);
    $context=  filter_var($context,FILTER_SANITIZE_STRING); 
    
    $title=  mysql_real_escape_string($title);
    $context=  mysql_real_escape_string($context);
    
    
    $newsInfo=array(
        'id'=>"NULL",
        'title'=>wrapedInQuatation($title),
        'context'=>wrapedInQuatation($context),
        'owner'=>wrapedInQuatation($uid),
        'date'=>"now()"
    );
    if  ($res=insertNews($newsInfo))
        header("Location:news_reader.php");
    else
        echo $res;
    
    
    
}else {
    
    echo "ERROR";
}

?>