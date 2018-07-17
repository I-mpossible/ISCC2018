<?php
include 'sqlwaf.php';
define("SECRET_KEY", "Dfa5cUiJb2Xquhgv");
define("METHOD", "aes-128-cbc");
session_start();

function get_random_iv(){
    $iv='';
    for($i=0;$i<16;$i++){
        $iv.=chr(rand(1,255));
    }
    return $iv;
}
function login($info){
    $iv=get_random_iv();
    $plain = serialize($info);
    $cipher = openssl_encrypt($plain, METHOD, SECRET_KEY, OPENSSL_RAW_DATA, $iv);
    $_SESSION['username'] = $info['username'];
    setcookie("iv", base64_encode($iv));
    setcookie("cipher", base64_encode($cipher));
}
function show_homepage(){
    if ($_SESSION["username"]==='admin'){
        echo '<p>Hello admin</p>';
        echo '<p>Flag is ISCC{12345678910}</p>';
    }else{
        echo '<p>hello '.$_SESSION['username'].'</p>';
        echo '<p>Only admin can see flag</p>';
    }
    echo '<p><a href="loginout.php">Log out</a></p>';
    die();
}
function check_login(){
    if(isset($_COOKIE['cipher']) && isset($_COOKIE['iv'])){
        $cipher = base64_decode($_COOKIE['cipher']);
        $iv = base64_decode($_COOKIE["iv"]);
        if($plain = openssl_decrypt($cipher, METHOD, SECRET_KEY, OPENSSL_RAW_DATA, $iv)){
            $info = unserialize($plain) or die("<p>base64_decode('".base64_encode($plain)."') can't unserialize</p>");
            $_SESSION['username'] = $info['username'];
        }else{
            die("ERROR!");
        }
    }
}

if (isset($_POST['username'])&&isset($_POST['password'])) {
  $username=waf((string)$_POST['username']);
  $password=waf((string)$_POST['password']);
  if($username === 'admin'){
        exit('<p>You are not real admin!</p>');
    }else{
        $info = array('username'=>$username,'password'=>$password);
        login($info);
        show_homepage();
    }
}
else{
  if(isset($_SESSION["username"])){
        check_login();
        show_homepage();
    }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Paper login form</title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="login">
  <form action="" method="post">
    <h1>Sign In</h1>
    <input name='username' type="text" placeholder="Username">
    <input name='password' type="password" placeholder="Password">
    <button>Sign in</button>
</div>
</body>
</html>