<?php

require 'header.php';
require './DB_access/newsAgancy/DB_access.php';



session_start();
if (empty($_POST) && !isset($_REQUEST['isUniqUser']))
        $smarty->display("register_main.TPL");
else if(isset($_REQUEST['isUniqUser'])){
        if (!isUniqUser($_REQUEST['isUniqUser'])){
            echo "ERR";
        }else{
            echo "OK";
        }
        die;
}//send an username with ajax

else if (!isset($_POST['email'])) {	
	$_SESSION['register']=array();
	$_SESSION['register']['user_table']=array();
	$_SESSION['register']['user_table']['id']='NULL';
	$_SESSION['register']['user_table']['full_name']=wrapedInQuatation($_POST['fullName']);
	$_SESSION['register']['user_table']['username']=wrapedInQuatation($_POST['username']);
	$_SESSION['register']['user_table']['birthdate']=wrapedInQuatation($_POST['birthdate']);
	$_SESSION['register']['user_table']['password']=wrapedInQuatation(md5($_POST['pass']));
	$_SESSION['register']['user_table']['accesslevel']=wrapedInQuatation("user");
	
	$res=insertUser($_SESSION['register']['user_table']);
	
	if ($res!==true){
		$smarty->assign('err',$res);
		$smarty->display("register_main.TPL");
	}else{
		$_SESSION['register']['user_table']['id']=getIdWithUserName($_POST['username']);
                                $smarty->display("register_contact_info.TPL");
	}
	
}else if (isset($_SESSION['register'])) {
	
	$_SESSION['register']['contact_table']=array();
	$_SESSION['register']['contact_table']['email']= wrapedInQuatation($_POST['email']);
	$_SESSION['register']['contact_table']['mobile']=wrapedInQuatation($_POST['mobile']);
	$_SESSION['register']['contact_table']['tel']=wrapedInQuatation($_POST['telephone']);
	$_SESSION['register']['contact_table']['blog']=wrapedInQuatation($_POST['blog']);
	$_SESSION['register']['contact_table']['personal_website']=wrapedInQuatation($_POST['website']);
	$_SESSION['register']['contact_table']['id']='NULL';
	$_SESSION['register']['contact_table']['user_id']=
	wrapedInQuatation($_SESSION['register']['user_table']['id']);
        
	$res=insertContactInfo($_SESSION['register']['contact_table']);
	
	if ($res!=true){
		$smarty->assign('err',$res);
		$smarty->display("register_contact_info.TPL");
	}
	
}//end else if 
else {
	echo "ERROR";
}


?>