<?php
	header("Content-Type:text/html;charset=utf-8");
	#error_reporting(E_ERROR);
	define ('PATH_WEB', dirname(__FILE__).'/');
	require_once(dirname(__FILE__).'/include/conf.php');
	require_once(dirname(__FILE__).'/include/fiter.php');
	var_dump($_SESSION);
	if($_SESSION['flag'] === 1){
		header("location:./admin/");exit;
	}
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>去死把</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
	<style type="text/css">
		html,body {
			height: 100%;
		}
		.box {
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6699FF', endColorstr='#6699FF'); /*  IE */
			background-image:linear-gradient(bottom, #6699FF 0%, #6699FF 100%);
			background-image:-o-linear-gradient(bottom, #6699FF 0%, #6699FF 100%);
			background-image:-moz-linear-gradient(bottom, #6699FF 0%, #6699FF 100%);
			background-image:-webkit-linear-gradient(bottom, #6699FF 0%, #6699FF 100%);
			background-image:-ms-linear-gradient(bottom, #6699FF 0%, #6699FF 100%);
			
			margin: 0 auto;
			position: relative;
			width: 100%;
				height: 100%;
			}
		.login-box {
			width: 100%;
			max-width:500px;
			height: 400px;
			position: absolute;
			top: 50%;

			margin-top: -200px;
			
			
		}
		@media screen and (min-width:500px){
			.login-box {
				left: 50%;
		
				margin-left: -250px;
			}
		}	

		.form {
			width: 100%;
			max-width:500px;
			height: 275px;
			margin: 25px auto 0px auto;
			padding-top: 25px;
		}	
		.login-content {
			height: 300px;
			width: 100%;
			max-width:500px;
			background-color: rgba(255, 250, 2550, .6);
			float: left;
		}		
			
			
		.input-group {
			margin: 0px 0px 30px 0px !important;
		}
		.form-control,
		.input-group {
			height: 40px;
		}

		.form-group {
			margin-bottom: 0px !important;
		}
		.login-title {
			padding: 20px 10px;
			background-color: rgba(0, 0, 0, .6);
		}
		.login-title h1 {
			margin-top: 10px !important;
		}
		.login-title small {
			color: #fff;
		}

		.link p {
			line-height: 20px;
			margin-top: 30px;
		}
		.btn-sm {
			padding: 8px 24px !important;
			font-size: 16px !important;
		}
		</style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Home's</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">首页</a></li>
			
		  </ul>
        </div>
      </div>
    </nav>

	<div class="box">
		<div class="login-box">
			<div class="login-title text-center">
				<h1><small>登录</small></h1>
			</div>
			<div class="login-content">
			<div class="form">
			<form action="login.php" method="post">
				<div class="form-group">
					<div class="col-xs-12  ">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" id="uname" name="uname" class="form-control" placeholder="用户名">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12  ">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="password" id="passwd" name="passwd" class="form-control" placeholder="密码">
						</div>
					</div>
				</div>
				<div class="form-group form-actions">
					<div class="col-xs-4 col-xs-offset-4 ">
						<button type="submit" class="btn btn-sm btn-info">登录</button>
					</div>
				</div>
			</form>
			</div>
			</div>
			
			<footer><p>&copy;Hnuahe 2017/p></footer>
		</div>
	</div>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
