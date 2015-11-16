<?php
require 'header.php';
require './DB_access/newsAgancy/DB_access.php';



session_start();


if (empty($_POST)){
                if (isset($_SESSION['suggested_username']))
                    $smarty->
                    assign("suggested_username",
                            $_SESSION['suggested_username']);
	$smarty->display('login.tpl');
}elseif ( isset($_POST['username']) && isset($_POST['password'])) {
    
        if ( is_numeric( strpos( strtolower($_POST['username']) ,"unknown") ) ){
            $smarty->assign("err","please sign in");  
            $smarty->display('login.tpl');
        }//end error handling
        
        
        $username=mysql_real_escape_string($_POST['username']);
        $password=$_POST['password'];
        if (checkPassword($username,  md5($password))){
            //login success
            //show userpanel
            //set session_true
            header("Location:user_panel.php");
            $_SESSION['login']=array();
            $_SESSION['login']['uid']=getIdWithUserName($_POST['username']);
            $_SESSION['login']['AL']=getAccessLevelWithUserName($_POST['username']);
            
        }else{
            //login faild
            //generate an error
            $smarty->assign("err","username or password incorrect!");
            $smarty->display('login.tpl');
            
        }
        
}else {
    //say something with ajax pleas sign in or sth
    $smarty->assign("err","please sign in");
   //$smarty->display('login.tpl');
}


?>