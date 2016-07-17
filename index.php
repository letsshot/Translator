<?php if(isset($_COOKIE['login']) && !empty($_COOKIE['login'])) header("location:translator.php") ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<h1>Login Page</h1>
<?php if(isset($_GET['error'])): ?>
<p style="color:red">Bad credentials!</p>
<?php endif; ?>

<form action="login.php" method="post">
		<label>Username: </label><input type="text" name="login" autofocus="autofocus" />  
		<label>Password: </label><input type="password" name="pass" />
		<input type="checkbox" name="check"  /><label>Remember me</label>
		<input type="submit" name="button" id="button" value="Log in" />

</form>
</body>
</html>
