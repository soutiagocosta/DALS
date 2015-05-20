<?php
	include("lig.php");
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="Select password, salt From users where username='$username';";
	
	$result=mysqli_query($ligacao,$query);
	$userData=mysqli_fetch_assoc($result);
	$passBD=$userData['password'];
	$salt=$userData['salt'];
	
	$hash=hash('sha256',$password);
	$hash=hash('sha256',$salt.$hash);
	
	if($hash!=$passBD){
		echo ("<h3>LOGIN ERRADO</h3>");
	}
	else{
		session_start();
		$_SESSION['loginname']=$username;
		header("Location:home.php");
		echo ("<h3>LOGIN EFECTUADO COM SUCESSO</h3>");
	}
?>
	