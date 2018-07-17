<?php
function waf($str){
$array=array("'","\""," ","or","and","(",")","<","?");
for ($i=0; $i < sizeof($array); $i++) {
	if(strpos($str,$array[$i])){
		echo "<script>alert('too young too simple,do not hack')</script>";
		die();
	}
}
return $str;
}
?>