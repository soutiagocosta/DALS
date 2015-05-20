<?php
	include("lig_pdo.php");

	$db = new lig_pdo();
	
	$user = $_POST['loginname'];
	$pass = $_POST['password'];
	
	$db -> login($user,$pass);
?>