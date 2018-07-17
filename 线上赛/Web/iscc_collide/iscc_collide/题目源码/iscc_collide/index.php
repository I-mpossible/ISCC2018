<?php
include "secret.php";
@$username=(string)$_POST['username'];
function enc($text){
	global $key;
	return md5($key.$text);
}
if(enc($username) === $_COOKIE['verify']){
	if(is_numeric(strpos($username, "admin"))){
		die($flag);
	}
	else{
		die("you are not admin");
	}
}
else{
	setcookie("verify", enc("guest"), time()+60*60*24*7);
	setcookie("len", strlen($key), time()+60*60*24*7);
}
show_source(__FILE__);
