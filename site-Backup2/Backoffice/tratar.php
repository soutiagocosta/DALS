<?php
	include('../login/lig_pdo.php');
	
	$db = new lig_pdo();
	
	if(isset($_GET['id'])){
		if(!empty($_GET['id'])){
			
			$db -> apagar($_GET['id']);	
			header("location: listarBD.php");	
		}
		
	}
	?>