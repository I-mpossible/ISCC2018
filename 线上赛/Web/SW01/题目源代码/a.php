<?php
  if ($_POST['submit'])
  {
	  if ($_POST['key']=='/%nsfocusXSStest%/')
	  
	  {
		  echo "<script language='javascript'>alert('恭喜你！flag{Hell0World}');history.back();</script>";
		  
		  }
		  else
		  {
			  echo "<script language='javascript'>alert('加油！在尝试一次。');history.back();</script>";
			  }
	  }


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>你能跨过去吗？</title>
</head>

<body>

<p style="color:#F00">Key Words:XSS</p>

<p>
如果你对xss了解的话,那你一定知道key是什么了，加油！</p>



<p>http://www.test.com/NodeMore.jsp?id=672613&page=2&pageCounter=32&undefined&callback=%2b/v%2b%20%2bADwAcwBjAHIAaQBwAHQAPgBhAGwAZQByAHQAKAAiAGsAZQB5ADoALwAlAG4AcwBmAG8AYwB1AHMAWABTAFMAdABlAHMAdAAlAC8AIgApADwALwBzAGMAcgBpAHAAdAA%2bAC0-&_=1302746925413
</p>
<form action="a.php" method="post">
<input type="text" name="key">
<input type="submit" name="submit" value="提交">
</form>
</body>
</html>