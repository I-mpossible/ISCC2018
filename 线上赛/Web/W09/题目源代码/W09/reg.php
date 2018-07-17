<?php
require_once 'config.php';
$user = new User();
if (!empty($_POST['username'])){
  $h = $user->randomPass(100);
  $hash = md5($h);
  while( mysqli_num_rows($user->query("SELECT * FROM `{$user->dbTable}` WHERE `activationHash` = '$hash' LIMIT 1")) == 1)
      $hash = $user->randomPass(20);
  $data = array(
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'password' => $_POST['pwd'],
    'activationHash' => $hash,
    'active' => 0
  );
  $userID = $user->insertUser($data);
  if ($userID==0)
    echo '用户名已被占用!';
  else {
    echo '注册成功,请登录!';
  echo $email;
  }
}
?>
<h1>Register</h1>
<p><form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" />
 username: <input type="text" name="username" /><br /><br />
 password: <input type="password" name="pwd" /><br /><br />
 email: <input type="text" name="email" /><br /><br />
<input type="hidden" name="csrftoken" value="<?php echo $csrftoken; ?>"/>
 <input type="submit" value="Register" />
</form>
</p>