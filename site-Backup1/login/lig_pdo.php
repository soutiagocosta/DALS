<?php
	//print_r(PDO::getAvailableDrivers());
	$user="root";
	$pass="";
	$host="localhost";
	$bdname="sawb";
	
	try{
		$DBH = new PDO ("mysql:host=$host;dbname=$bdname",$user,$pass);
		
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>