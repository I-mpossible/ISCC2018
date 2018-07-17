<?php
error_reporting(0);
$flag = "flag{ISCC2017_Very_GOOD!}";	
if(isset($_GET['username'])){
	if (0 == strcasecmp($flag,$_GET['username'])){
	$a = fla;
	echo "very good!Username is right";
	}
	else{
	print 'Username is not right<!--index.php.txt-->';}
}else
print 'Please give me username or password!';
if (isset($_GET['password'])){
	if (is_numeric($_GET['password'])){
		if (strlen($_GET['password']) < 4){
			if ($_GET['password'] > 999){
			$b = g;
			print '<p>very good!Password is right</p>';
		}else 
			print '<p>Password too little</p>';
		}else
		print '<p>Password too long</p>';
	}else
	print '<p>Password is not numeric<!--index.php.txt--></p>';
}

if ($a.$b == "flag")
	print $flag;
?>
