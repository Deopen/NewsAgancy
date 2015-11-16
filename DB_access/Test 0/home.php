<?php

$files=scandir('.');
$approvedFiles=array();
foreach ($files as $f){
	$ext=substr($f,strrpos($f,".")+1);
	$ext=strtolower($ext);
	$htmlFound=is_int(strpos($ext,'html'));
	$phpFound=is_int(strpos($ext,'php'));
	
	if ($phpFound or $htmlFound) 
		array_push($approvedFiles,substr($f,0,strrpos($f,".")));
	
}//end foreach

$approvedFilesFrequency=array_count_values($approvedFiles);
$approvedFiles=array_unique($approvedFiles);
foreach ($approvedFiles as $f){
	if($approvedFilesFrequency[$f]==2)
		echo "<a href=".$f.".html>".$f.".html</a><br>";
	else
		echo "<a href=".$f.".php>".$f.".php</a><br>";
}//end foreach
?>