<?php 

//header("Content-type:text/html;charset=gb2312");
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>新一极web安全--攻防技术演示系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style/css/bootstrap.min.css">
<link rel="stylesheet" href="/.style/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="./style/css/css.css">
<script src="./style/js/jquery-1.9.1.min.js"></script>
<script src="./style/js/bootstrap.min.js"></script>


</head>
<div class="navbar navbar-fixed-top navbar-inverse">
   <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
    </div>
        <div class="collapse navbar-collapse">
        </div>
    </div>
</div>
<body>
<div class="container ">
  <h1 class="text-center">第一关</h1>
  <br>
  <hr>
  <br><br>
  <h2>第二关需要从 http://edu.xss.tv 进入，并且只有我公司的IP地址才可以进入第二关，公司IP为：110.110.110.110</h2>
</div>
<?php 
$refer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';
$getip = trim(sprintf("%u", ip2long(getClientIP())));
$ip = trim(sprintf("%u", ip2long('110.110.110.110')));

if ($refer=='http://edu.xss.tv' && $ip == $getip) {
  $token = md5('success');
  echo '<script>window.location="number2.php?token='.$token.'"</script>';
}

function getClientIP() {
    if (getenv ( "HTTP_CLIENT_IP" ) && strcasecmp ( getenv ( "HTTP_CLIENT_IP" ), "unknown" ))
        $ip = getenv ( "HTTP_CLIENT_IP" );
    else if (getenv ( "HTTP_X_FORWARDED_FOR" ) && strcasecmp ( getenv ( "HTTP_X_FORWARDED_FOR" ), "unknown" ))
        $ip = getenv ( "HTTP_X_FORWARDED_FOR" );
    else if (getenv ( "REMOTE_ADDR" ) && strcasecmp ( getenv ( "REMOTE_ADDR" ), "unknown" ))
        $ip = getenv ( "REMOTE_ADDR" );
    else if (isset ( $_SERVER ['REMOTE_ADDR'] ) && $_SERVER ['REMOTE_ADDR'] && strcasecmp ( $_SERVER ['REMOTE_ADDR'], "unknown" ))
        $ip = $_SERVER ['REMOTE_ADDR'];
    else
        $ip = "unknown";
    return ($ip);
} 
 ?>
<div id="footer" class="container">
<br>
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="navbar-inner navbar-content-center">
        <p class="text-muted credit text-center" style="padding: 10px; font-size: 25px;">
            Powered by 新一极web安全  Copyright 2016-2017 &nbsp; <a href="http://www.xinyiji.com" target="_blank">www.xinyiji.com</a>
        </p>
    </div>
</nav>