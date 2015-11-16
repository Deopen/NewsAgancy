<?php

require 'header.php';
require './DB_access/newsAgancy/DB_access.php';

$back_link = $_SERVER['HTTP_REFERER'];
$smarty->assign("BACK_LINK",$back_link);

session_start();
if (!isset($_POST['name']) && !isset($_REQUEST['isUniqUser']))
        $smarty->display("register_main.TPL");
else if(isset($_REQUEST['isUniqUser'])){
        if (!isUniqUser($_REQUEST['isUniqUser'])){
            echo "ERR";
        }else{
            echo "OK";
        }
        die;
}//send an username with ajax
else {	
                
                $name=$_POST['name'];
                $family= $_POST['family'];
                $uname=$_POST['username'];
                $email=$_POST['email'];
                $pass=md5($_POST['pass']);
                $AL="user";
                
                //===========security things==================
                //scape tags :
                $name=filter_var($name,FILTER_SANITIZE_STRING);
                $family=filter_var($family,FILTER_SANITIZE_STRING);
                $uname=filter_var($uname,FILTER_SANITIZE_STRING);
                $email=filter_var($email,FILTER_SANITIZE_EMAIL);
                //scape sql injection
                $name=  mysql_real_escape_string($name);
                $family=  mysql_real_escape_string($family);
                $uname=  mysql_real_escape_string($uname);
                $email=  mysql_real_escape_string($email);
                //======================================
                
	$_SESSION['register']=array();
	$_SESSION['register']['id']='NULL';
	$_SESSION['register']['name']=  wrapedInQuatation($name);
                $_SESSION['register']['family']=wrapedInQuatation($family);
	$_SESSION['register']['username']=wrapedInQuatation($uname);
                $_SESSION['register']['email']=wrapedInQuatation($email);
	$_SESSION['register']['password']=wrapedInQuatation($pass);
	$_SESSION['register']['AL']=wrapedInQuatation($AL);
	
	$res=insertUser($_SESSION['register']);
	//echo $res; 
        //==============captcha======================
                if (!isset($_POST['g-recaptcha-response']))
                {
                    
                    $smarty->assign('err',"Confirm captcha!");
	    $smarty->display("register_main.TPL");
                    die;

                }else{
                    
                    $cap=$_POST['g-recaptcha-response'];
                    //echo "cap: ".$cap."<br>";
                    $addr="https://www.google.com/recaptcha/api/siteverify?secret=6LdkoQYTAAAAACRu289qcQKTvtpvW8KagS1C9Yzd&response=".
                            $cap."&remoteip=".$_SERVER['REMOTE_ADDR'];
                    $response=file_get_contents($addr);
                   // echo "response: ".$response."<br>";
                    //echo $response;
                    if (strpos($response,"false")>0){
                       // echo $response;
                        //echo "<br>".strpos($response,"false");
                        $smarty->assign('err',"Confirm captcha!");
                        $smarty->display("register_main.TPL");
                        die;   
                    }
                    
                }
            //==========================================
	if ($res!==true){
		$smarty->assign('err',$res);
		$smarty->display("register_main.TPL");
	}else{
                        header("Location:login.php");
                        $_SESSION['suggested_username']=$uname;
                        $_SESSION['register']=null; 
                        //$_SESSION['register']['user_table']['id']=getIdWithUserName($_POST['username']);                                
	}
	
}


?>