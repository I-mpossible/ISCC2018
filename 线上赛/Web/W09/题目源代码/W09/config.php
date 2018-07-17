<?php
include("UserController.class.php");
include("MessageController.class.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$base_path = '/';
function sessionConfig(){
	session_save_path('/tmp/'); 
	$cookie_config = session_get_cookie_params(); 
	session_set_cookie_params( 
		$cookie_config["lifetime"], 
		$GLOBALS['base_path'], 
		$cookie_config["domain"], 
		$cookie_config["secure"], 
		true 
	); 
}
sessionConfig();
session_start();

//db_config
$flag = "flag{UnSer1ali2e1sInt4rt1n9}";
$DBHOST = 'localhost';
$DBUSER = '----';
$DBPASS = '----';
$DBNAME = '----';
$mysqli = new mysqli($DBHOST, $DBUSER, $DBPASS, $DBNAME);

function gencsrftoken($length=10, $chrs = '1234567890qwertyuiopasdfghjklzxcvbnm'){
	$csrf = '';
	for($i = 0; $i < $length; $i++) {
		$csrf .= $chrs{mt_rand(0, strlen($chrs)-1)};
	}
	return $csrf;
}

$csrftoken = gencsrftoken();
setcookie('csrftoken', $csrftoken, time()+3600, $base_path);

if(!empty($_POST)){
	if($_POST['csrftoken'] !== $_COOKIE['csrftoken']) die("csrftoken Error!");
}
if($_SESSION['admin'] === '1'){
	setcookie('flag', $flag, time()+3600, $base_path, '', false, true);
}

