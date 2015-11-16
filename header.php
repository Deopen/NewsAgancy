<?php

require './libs/smarty/Smarty.class.php';

function isAdminPremission(){
        if ($_SESSION['login']['AL']=="admin")
            return true;
        else
            return false;
 }//end if is admin
 


function wrapedInQuatation($str){
	if ($str=="*") return "*";
	return '\''.$str.'\'';
}





$smarty=new Smarty;

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
//$smarty->debugging=true;
//$smarty->caching=true;
//$smarty->cache_lifetime=120;

?>