<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'header.php';
require './DB_access/newsAgancy/DB_access.php';
session_start();
if (!isset($_SESSION['login']['uid']))
    die;

$viewerId=$_SESSION['login']['uid'];

if ( isset($_REQUEST['like']) )
    {
        $res=like_dislike($viewerId ,$_REQUEST['like'], "like");
        //echo $res;
        echo getLikeOfNews($_REQUEST['like']);
    }else if( isset($_REQUEST['dislike']) )
    {
        $res=like_dislike($viewerId ,$_REQUEST['dislike'], "dislike");
        echo getLikeOfNews($_REQUEST['dislike']);
        //echo $res;
    }
    
    
    

?>