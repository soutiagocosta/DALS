<?php
	include('lig_pdo.php');
	
	$db = new lig_pdo();
	
	if(isset($_GET['id_leilao'])){
		if(!empty($_GET['id_leilao'])){
			
			$db -> apagar($_GET['id_leilao']);	
			header("location: backoffice.php");	
		}
		
	}
	?>