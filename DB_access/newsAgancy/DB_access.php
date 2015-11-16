<?php

    require("connect.php");
    
    const moreLimit=500;
    
    
    function getFromTableWithWhere($strColumn,$strTable,$strWhereStatement)
    {
        
        global $conn;
        if ($strColumn=='*')
            $query="select ".$strColumn ." from `".$strTable."` ".$strWhereStatement;
        else
            $query="select `".$strColumn ."` from `".$strTable."` ".$strWhereStatement;
        

        //echo $query."<br>";
        if ( ($res=$conn->query($query))==TRUE){
            if ($strColumn=='*')
                return $res->fetch_all();
             else
                return $res->fetch_assoc()[$strColumn];
        }else{
            throw new Exception("ERROR: ".$query." ".$conn->error);
        }
        
    }//end getFromTableWithWhere
    
    function updateTableWithWhere($strTable,$updateStatement,$whereStatement){
     global $conn;
     $query="UPDATE `newsAgancy`.`$strTable` SET $updateStatement"
             . " $whereStatement ";
     //echo $query;
     //echo ">>>>>>>>>>".$query."<br>";
     if ( ($res=$conn->query($query))==TRUE){
            return true;
        }else{
            throw new Exception("ERROR: ".$query." ".$conn->error);
        }
        
    }
    //UPDATE `newsAgancy`.`news` SET `like` = '1' WHERE, `news`.`id` = 6;
    
    
    function deleteRowFromTable($strTable,$whereStatement){
        
        //DELETE FROM `newsAgancy`.`like` WHERE `like`.`id` = 4 
        
        global $conn;
        $query="DELETE FROM `newsAgancy`.`$strTable` ".$whereStatement;
        //echo $query;
        if ( ($res=$conn->query($query))==TRUE){
            return true;
        }else{
            throw new Exception("ERROR: ".$query." ".$conn->error);
        }
        
    }//end delete row from table
    
    function getAllFromTable($strTable){
        return getFromTableWithWhere("*", $strTable, "");
    }//end getAllFrom Table
    
    function getAllFromTableWithWhere($strTable,$strWhereStatement){
        return getFromTableWithWhere("*", $strTable, $strWhereStatement);
    }//end getAllFrom Table with where
    
    
    function getFromTable($strColumn,$strTable){
        return getFromTableWithWhere($strColumn, $strTable, "");
    }//end getFromTable
    
    function checkPassword($username,$password){
        $res=getFromTableWithWhere
        ("id", "users", 
                "where username='$username' and password='$password'");
        
        return $res;
    }//end check password
    
    
    function getIdWithUserName($username){
        
        $res=getFromTableWithWhere("id","users","where username='$username'");
        return $res;
        
    }//end function getId With user name
    
    function getAccessLevelWithUserName($username){
        
        $res=getFromTableWithWhere("AL","users","where username='$username'");
        return $res;
        
    }//end function Access Level With user name
    
    function getOwnerIdOfNews($newsId){
        
        return getFromTableWithWhere( "owner","news", "where id=".wrapedInQuatation($newsId));
        
    }//end get owner of news
    

    
    function updateNews($title,$context,$newsId){
        
        return updateTableWithWhere("news", "title='$title',context='$context'", "where id='$newsId'");
        
    }//end updateNews
    
    function isUniqUser($user){
        
        if ( is_numeric( strpos( strtolower($user) ,"unknown") ) )
                return false;
        
        if ( isset($_SESSION["currentEditingUsername"]) )
            if ($_SESSION["currentEditingUsername"]==$user)
                return true;
        
        
        $id=getIdWithUserName($user);
        if (is_numeric($id) ){
            return false;
        }else{
            return true;
        }
        
    }//end is uniq user
    //
    //
    
    function getLikeOfNews($newsId){
        
        return getFromTableWithWhere("likeCount","news", "where id='$newsId' ");
        
    }//end get like of news
    
    function getContextOfNews($newsId){
        $context=getFromTableWithWhere("context","news", "where id='$newsId' ");
        return $context;
    }//end get context news
    
    function updateNewsLike($newsId,$likeOrDislike){
    
        $likeCount= getLikeOfNews($newsId);
        //echo '^^^^'.$likeCount.'<br>';
        if ($likeOrDislike=="like"){
            //add like
            $likeCount++;
            
        }else{
            //remove like
            $likeCount--;
        }
        
        updateTableWithWhere("news", "likeCount='$likeCount' ","where id='$newsId' ");
        
    }//end update news like
    
    function remove_like_dislike($viwerId,$newsId,$currentValue){
        
        $whereStatement="where news_id='$newsId' and  viewer_id='$viwerId' ";
        deleteRowFromTable("like", $whereStatement);
        
        if ($currentValue==1)
            updateNewsLike($newsId, "dislike");
        else
            updateNewsLike($newsId,"like");
        
    }//end remove like dislike
    
    function remove_news($newsId){
        
        return deleteRowFromTable("news", "where id='$newsId'");
        
    }//end remove news
    function like_dislike($viwerId,$newsId,$likeOrDislike){
        //getFromTableWithWhere("likeCount","news", "where id='$newsId' ");
        
        $whereStatement="where news_id='$newsId' and  viewer_id='$viwerId' ";
        
        $updateFlgLikeOrDislike=
                (int)getFromTableWithWhere("likeOrDislike","like",$whereStatement );
        
        
        $likeOrDislikeFlg= ($likeOrDislike=="like") ?1:-1;
        
        if ($updateFlgLikeOrDislike){
            //update like
            if ($likeOrDislikeFlg==$updateFlgLikeOrDislike)
                remove_like_dislike ($viwerId, $newsId,$updateFlgLikeOrDislike);
            else{
                //update here
                updateNewsLike($newsId, $likeOrDislike);//to remove ex value
                updateTableWithWhere("like", "likeOrDislike="."'$likeOrDislikeFlg'", $whereStatement);
                updateNewsLike($newsId, $likeOrDislike);
            }//end update else
        }else{
            //insert like
            
            $likeRow=array(
                
                "id"=>"NULL",
                "news_id"=>  wrapedInQuatation($newsId),
                "viewer_id"=>  wrapedInQuatation($viwerId),
                "likeOrDislike"=>  wrapedInQuatation($likeOrDislikeFlg)  
            );
            
            insertToDB("like", $likeRow);
            updateNewsLike($newsId, $likeOrDislike);
            
        }
        
        
    }//end like
    
    
    
    function getUserNameWithId($id){
        
        
        return getFromTableWithWhere("username", "users", "where id='$id' ");
        
    }//end getUserName With id
    
/*    
    function getUid($uname){
        
        
        return getFromTableWithWhere("id", "users", "where username='$uname' ");
        
    }//end getUserName With id
    
  */  
    
    function getFromConfig($field){
        
        return getFromTable($field, "config");
        
    }//end getFromConfig
    
    function insertToDB($tableName,$arrayToInsert){
        global $conn;
        //example:
        //$sql = "INSERT INTO users (id,uname,name, family,email,pass) 
        //VALUES (NULL,'$uname','$name', '$family', '$email',MD5('$pass'))";
        //print_r(array_keys($arrayToInsert));
        
        /*INSERT INTO users (id, full_name, username, contact_id, birthdate, signupdate, password, accesslevel)
         *VALUES (NULL, 'omid yaghoubi', 'deopen', NULL, NULL, NULL, '123', 'admin');
        */
        
        $fieldNames=implode(array_keys($arrayToInsert),',');
        $fieldValues=implode(array_values($arrayToInsert),',');
        $query="INSERT INTO `".$tableName."` (".$fieldNames.") VALUES (".$fieldValues.");";
        //echo $query;
        return $conn->query($query);
        
    }//end insert to DB function
    
    function getAllNews(){
        
        return getAllFromTable("news");
        
    }//end get newsInforMation
    
    function getAllUsers(){
        
        return getAllFromTable("users");
        
    }//end get all users
    
    function getAllUserLike($userId){
        
        return getAllFromTableWithWhere("like","where viewer_id='$userId' ");
        
    }//end get all user like
    
    function insertNews($newsinfo){
            
        return insertToDB("news", $newsinfo);
        
    }//end insert news
    
    
    function insertUser($userInfo){
        global $conn;
        
        if (strpos($userInfo["username"],"UNKNOWN"))
            return "ERROR: This username is reserved by system, please choose another.";
        if (insertToDB("users",$userInfo)!=true){
            
            if ( strpos ( $conn->error,"Duplicate entry" )!==false ) {
                
                return "This username is choosen before, please choose another.";
                
            }else {
                
                return "ERROR: ".$conn->error;
                
            }
        }
        return true;
        
    }//end insertUser func
    
    /*
    function insertContactInfo($contactInfo){
        global $conn;
        
        if (insertToDB("contact_info",$contactInfo)!=true){
             return "ERROR: ".$conn->error;
        }
        
        return true;
    }//end insert contact info
    */
?>