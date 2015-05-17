<?php
	include("lig_pdo.php");
	
	$username=$_POST['loginname'];
	$password=$_POST['password'];
	//$query="Select password, salt From users where username='$username';";
	//$data = $conn->query('SELECT * FROM users WHERE username = ' . $conn->quote($username));

	$stmt=null;
// 	$stmt= $DBH -> prepare ("SELECT password, salt FROM users WHERE username=".$username.";");
	$stmt= $DBH -> prepare ("SELECT password, salt FROM users WHERE username=:username");
	$stmt->bindparam(":username",$username); 
	//$stmt->bindparam(2, $_POST['salt'], PDO::PARAM_STR); 


	
	
	// Executando statement 
	$stmt->execute(); 
	
	//verifica pass
	$userData=$stmt->fetchAll(PDO::FETCH_ASSOC);
	$passBD=$userData['password'];
	$salt=$userData['salt'];
	$hash=hash('sha256',$password);
	$hash=hash('sha256',$salt.$hash);

	
	// Obter linha consultada 
	$obj = $stmt->fetchObject(); 
	
	// Se a linha existe: indicar que esta logado e encaminhar para outro lugar 
	if ($obj) { 
		if($hash==$passBD){
			//$_SESSION['password'] = $_POST['password'];
			echo "<p> Login Correto</p>"; 
			//header('Location: http://outro/lugar');
		} 
	} else { 
		echo '<p class="erro">Login/Senha Inv&aacute;lidos</p>'; 
	} 

?>