<?php
	class lig_pdo{
		private $servidor ='localhost';
		private $dbnome='TicketSell';
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
		

		
		function listar_tabela(){
			
			$select = "select * FROM Leilao";
	
			$stmt= $this->liga->prepare($select);
			$stmt->execute();
			
			//devolve um array com o conteudo
			return $stmt->fetchAll();
		}
		
		function apagar($id){
			
			$select = "delete FROM Leilao where id_leilao LIKE ?";
			
			$stmt= $this->liga->prepare($select);
			$stmt->bindValue(1,$id);
			$stmt->execute();
			
		}
		

	}	
?>