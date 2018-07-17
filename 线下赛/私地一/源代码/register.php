<?php 
header("content-type:text/html;charset=utf-8");
header("hint:username start with 'iscc_' and end up with 4 digitals");
?>



<html>
<head>
	<title>注册</title>
</head>
<body>
	<h1 style='text-align:center'>注册</h1>
	<div style="text-align:center">
		<form action="register.php" method="GET">
			用户名：iscc_<input type="text"  name="uname" placeholder="请输入四位数字" />
			<br/><br/>
			密码：<input type="password" name="pwd"/>
			<br/><br/>
			<input type="submit" value="注册">
		</form>
	</div>
</body>
<?php 
if(isset($_GET['uname'])||isset($_GET['pwd']))
{
	echo "<h1 style='text-align:center;color:red;'>注册功能关闭</h1>";
}
?>
</html>