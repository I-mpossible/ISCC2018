<?php
header("content-type:text/html;charset=utf-8");
header("hint:hint.txt");
error_reporting(0);
$con = mysqli_connect('localhost','web1','li!!@$cheng','web1');
if (!$con){
	die('Could not connect: ' . mysqli_connect_error());
}

?>
<h1 style='text-align:center'>登录</h1>
<div style="text-align:center">
	<form action="index.php" method="post"><br/>
	用户名:<input name="uname" type="text"/><br/><br/>
	密码:<input name="pwd" type="text"/><br/><br/>
	验证码:<input name="yzm" type="text"/>
	<img src="ckstr.php" align="absmiddle" style="cursor:pointer;width: 50px;height: 20px;" onclick="this.src=this.src+'?'"><br/><br/>
	<input type="submit" value="登录"/>
	<a target="_blank" href='./register.php'>注册</a>
	</form>
	
</div>
<?php
if (!isset($_POST['uname']) || !isset($_POST['pwd']))
{
	die;
}
//验证码获取函数
function GetCkVdValue()
{
	if(!isset($_SESSION)) session_start();
	return isset($_SESSION['ckstr']) ? $_SESSION['ckstr'] : '';
}


//验证码重置函数
function ResetVdValue()
{
	if(!isset($_SESSION)) session_start();
	$_SESSION['ckstr'] = '';
}

$yzm = GetCkVdValue();
if($_POST['yzm'] != $yzm)
{
	#var_dump($yzm) ;
	#var_dump($_POST['yzm']);
	ResetVdValue();
	echo "<p style='text-align:center'>验证码错误</p>";
	exit();
}

function AttackFilter($StrKey,$StrValue,$ArrReq){  
    if (is_array($StrValue)){
        $StrValue=implode($StrValue);
    }
    if (preg_match("/".$ArrReq."/is",$StrValue)== 1){   
        echo "<div style='text-align:center'><img src='./src/1.gif'></img></div>";
        exit();
    }
}

$filter = "and|or|select|from|where|union|like|join|sleep|benchmark|,|\(|\)|&|\||\*|\/|\\\\|-";
foreach($_POST as $key=>$value){ 
    AttackFilter($key,$value,$filter);
}



$sql="SELECT pwd FROM user WHERE uname = '{$_POST['uname']}'";
$query = mysqli_query($con,$sql); 
if($query)
{
	if (mysqli_num_rows($query) == 1) { 
		$key = mysqli_fetch_array($query);
	    	if($key['pwd'] == $_POST['pwd']) {
	        		echo "<p style='text-align:center'>+ADg-d+ADIAMA-d+ADUANw-e+ADI-f+ADIAYgA5AGI-e+ADUALw-f+AGIAMwAw-e+ADcAMA-f+ADcAOAAxADMANAA4ADk-dd+AGE-e+ADcAOQBi-e+ADAANwA5ADIANQBhADMANABhAC4AcABoAHA-</p>";
	    	}else{
	        		echo "<p style='text-align:center'>你这密码不太对啊</p>";
	    	}
	}
	else if(mysqli_num_rows($query) == 0){
		echo "<p style='text-align:center'>你这密码不太对啊</p>";
	}
	else{
		print "<p style='text-align:center'>数据太多了</p>";
	}	
}
else{
	echo mysqli_error($con);
}

mysqli_close($con);
?>
