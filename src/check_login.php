<?php
 include 'config.php';

if(isset($_POST['login']))
{

if(!check_username($_POST['username']))
{
 // user not found
	$message = 'کاربری با اسم '.$_POST['username'].' یافت نشد';

}
else
{

	$stmt = $pdo->query("SELECT id,count(id) FROM users where username = '".$_POST['username']."' AND password = '".$_POST['password']."'")->fetch();
	
	if($stmt['count(id)'] == 0 )
	{
	 // wrong password
	$message = 'رمز عبور اشتباه است';
	}
	else {
		// ok
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['id'] = $stmt['id'];
		header('Location: ../dashboard.php');	
	}

}

if(isset($message))
	header('Location: ../login.php?login_error='.$message);	







}



else {

	if(!isset($_POST['name'],$_POST['username']) || !isset($_POST['password'],$_POST['password_repeat']))
		$message = ' همه ی مقادیر باید پر شوند';

	if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password_repeat']))
		$message = ' همه ی مقادیر باید پر شوند';

	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_repeat = $_POST['password_repeat'];

	if(strlen($password) < 4)
		$message = '  رمز عبور باید بیشتر از 4 رقم باشد ';

	if($password != $password_repeat)
		$message = '  رمز عبور با تکرار مطابقت ندارد ';


	if(check_username($username))
	{
	 // user found
		$message = 'کاربری با اسم '.$_POST['username'].' قبلا ثبت نام کرده است';

	}


	if(isset($message))
		header('Location: ../login.php?register_error='.$message);	

	else {
		$stmt = $pdo->query("INSERT INTO users (username,password,name) values ('".$username."','".$password."','".$name."')")->fetch();
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $pdo->lastInsertId();
		header('Location: ../dashboard.php');	

	}



}



 			
 

 


?>
