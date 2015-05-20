<?php
include("../login/lig_pdo.php");	

$db = new lig_pdo();

$resultado= $db->listar_tabela();
	
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script language="Javascript">
		//funcao javascript para apagar registo da bd 
		function confirmacao() {
		     var resposta = confirm("Deseja remover esse registo?");
		 
		     if (resposta == true) {
		        
		          //window.location.href = "remover.php?id="+id;
		     }
		}
</script>
	</head>
	
			<table class="table table-condensed">
				<thead>	
					<tr>
					  	<td><strong>ID</strong></td>
					  	<td><strong>Username</strong></td>
					  	<td><strong>Password</strong></td>
					  	<td><strong>Salt</strong></td>
				  	</tr>
				</thead>
				<tbody>
					<?php foreach($resultado as $row){ ?>
				  	<tr>
					  	<td><?php echo $row['id'] ?></td>
					  	<td><?php echo $row['username']?></td>
					  	<td><?php echo $row['password']?></td>
					  	<td><?php echo $row['salt']?></td>
					  	<td><a href="tratar.php?id=<?php echo($row['id']); ?>" onclick="confirmacao()"><button type="button" class="glyphicon glyphicon-remove" aria-label="Left Align" name="delete"></button></a>
					  
				  	</tr>
				  	<?php } ?>
				</tbody>
		  	</table>
		
	

</html>