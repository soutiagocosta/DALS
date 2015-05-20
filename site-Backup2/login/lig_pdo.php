<?php
	class lig_pdo{
		private $servidor ='localhost';
		private $dbnome='sawb';
		private $user='root';
		private $pass='';
		public $liga; // variavel para efetuar ligacao
		
		public function __construct(){
			try{
				$this->liga =new PDO('mysql:host='.$this->servidor.';dbname='.$this->dbnome,$this->user,$this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
			}catch(PDOExexption $e){
				echo 'Error: '.$e->getMessage();
				die();
			}
		}
		
		function login($user,$pass){

			$select = "select * FROM users WHERE username LIKE ?";
	
			$stmt= $this->liga->prepare($select);
			$stmt->bindValue(1,$user);
			$stmt->execute();
			//devolve um array com o conteudo
			$resposta = $stmt->fetchAll();

			
			foreach($resposta as $verif){

				$passBD=$verif['password'];
				$salt=$verif['salt'];
				
				$hash=hash('sha256',$pass);
				$hash=hash('sha256',$salt.$hash);
						
			
				if($hash == $passBD){
					echo "Bem Vindo".$user;
				}else{
					echo "Login / Password Errados! ";
				}
			}
		}
		
		function listar_tabela(){
			
			$select = "select * FROM users";
	
			$stmt= $this->liga->prepare($select);
			$stmt->execute();
			
			//devolve um array com o conteudo
			return $stmt->fetchAll();
		}
		
/*
		function apagar_registo(){
			
			$select = "delete * FROM users ";
	
			$stmt= $this->liga->prepare($select);
			$stmt->execute();
			
			//devolve um array com o conteudo
			return $stmt->fetchAll();
		}
*/
	}	
?>