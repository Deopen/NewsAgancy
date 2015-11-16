<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "header.php";
require './DB_access/newsAgancy/DB_access.php';

if ( isset($_REQUEST['more']) )
    {
        echo getContextOfNews($_REQUEST['more']);
        die;
    }//end send more


session_start();

$viewer=isset($_SESSION['login']['uid'])?
        getUserNameWithId($_SESSION['login']['uid']):
    "unknown_".rand()."_".$_SERVER['REMOTE_ADDR'];

if ( !isset($_SESSION['login']['uid']) )
{
    $info=array(
        
        "id"=>'NULL',
        "name"=>wrapedInQuatation("unknown"),
        "family"=>wrapedInQuatation("unknown"),
        "username"=>wrapedInQuatation($viewer),
        "password"=>wrapedInQuatation("unknown"),
        "AL"=>wrapedInQuatation("unknown")
        
    );
    
    $res=insertUser($info);
    $_SESSION['login']['uid']=getIdWithUserName($viewer);
    $_SESSION['login']['AL']=getAccessLevelWithUserName($viewer);
    
    //echo $res;
}//end register unknown user


if ($_SESSION['login']['AL']=="unknown")
    $smarty->assign("unknown",1);

$smarty->assign("viewer",$viewer);


$allNews=array();
$moreFlags=array();
$viewerLikeArray=array();

//like_dislike(6 ,12, "like");


foreach (getAllUserLike($_SESSION['login']['uid']) as $likeInfo){
    //                       news_id ===> "like or dislike"
    $viewerLikeArray[$likeInfo[1]]=$likeInfo[3];
    
}//end loop



if (isAdminPremission())
    $smarty->assign("admin",1);


foreach (getAllNews() as $value){
    
    $value[3]=getUserNameWithId($value[3]);
    $trimed=  substr($value[2], 0,moreLimit);
    
    if (strlen($trimed)!=strlen($value[2]))
        $more=1;
    else
        $more=0;
    
    
    
    $value[2]=$trimed;
    
    array_push($moreFlags, $more);
    //$value[2]=wordwrap($value[2],500,"<br />\n");
    //$value[2]=  str_pad($value[2], 50);
    
        if (isset($viewerLikeArray[$value[0]])){
        
        if ($viewerLikeArray[$value[0]]==1)
            array_push ($value, 1);
        else 
            array_push ($value, -1);
        
        }//end if user like or dislike this tiny shit
       
    $value[2]=nl2br($value[2]);
    array_push($allNews, $value);
   
    
    
    //$title=$value[1];
    //$context=$value[2];
    //$owner=$value[3];

    
}

$smarty->assign("allNews",$allNews);
$smarty->assign("more",$moreFlags);

$smarty->display("news_reader.TPL");

?>