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
<script type="text/javascript" src="./password.js"></script>
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
<?php 
$token = isset($_GET['token'])?$_GET['token']:'';
if ($token != md5('success')) {
	echo '<h1 class="text-center">先过第一关再来吧！</h1>';
	exit();
}
$password = isset($_POST['password'])?$_POST['password']:'';
if($password == ''){

}elseif ($password == 'xinyiji.com') {
	$flag='B1H3n5u0xI2n9J1522';
	echo '<h2>您的flag为：'.$flag.'</h2>';
}else{
	echo '<h2>密码错误</h2>';
}
?>
  <h1 class="text-center">第二关</h1>
  <br>
  <hr>
  <br><br>
  <h2>密码在哪里呢？</h2>
<form class="form-signin" action="" method="post">

	<div class="form-group">
	<div class="input-group">
	<span class="input-group-addon fs_17"><i class="glyphicon glyphicon-lock"></i></span>
	<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="password" placeholder="输入密码" name="password" id="password">
	</div>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">获取flag</button>
</form>
</div>

<div id="footer" class="container">
<br>
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="navbar-inner navbar-content-center">
        <p class="text-muted credit text-center" style="padding: 10px; font-size: 25px;">
            Powered by 新一极web安全  Copyright 2016-2017 &nbsp; <a href="http://www.xinyiji.com" target="_blank">www.xinyiji.com</a>
        </p>
    </div>
</nav>