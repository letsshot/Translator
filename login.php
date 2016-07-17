<?php session_start();
$login="Plop";
$pass="1234";


if(isset($_POST['login']) && $_POST['login']==$login && $_POST['pass']==$pass){ 

	if($_POST['check']=='on'){
		$credentials = serialize(array('login'=>$login, 'pass'=>$pass));
		setcookie("login",$credentials,time() + 60 * 60 * 24 * 30);

	}

$_SESSION['login']=$login;
header("location:translator.php");

}
else header("location:index.php?error");

?>