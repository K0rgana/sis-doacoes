<?php 

	include 'init.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= TITLE ?> - Página inicial</title>
</head>
<body>
	<h4><a href="logout.php">Clique aqui se deseja sair</a></h4>

   <table>
   		<?php if (is_logged()): ?>
	   		<tr>
	            <th>Item</th>
	            <th>Descrição</th>
	            <th>autor</th>
	            <th>ações</th>
	        </tr>
			
			<?php $itensdata = file("itens.csv") ?>
			 <?php foreach ($itensdata as $itens => $iten): 
			 	
			 	$it = explode(',', $iten); ?>
	                <tr>
	                    <td><?= $it[0] ?></td>
	                    <td><?= $it[1] ?></td>
	                    <td><?= $it[2] ?></td>
	            		<td><a href="detalhes.php">ver mais</a></td>
	            	</tr>
	        <?php endforeach ?>

	        <?php else: ?>
	        	<tr>
	            	<th>Item</th>
	            	<th>Descrição</th>
	        	</tr>
			
			<?php $itensdata = file("itens.csv") ?>
			 <?php foreach ($itensdata as $itens => $iten): 
			 	
			 	$it = explode(',', $iten); ?>
	                <tr>
	                    <td><?= $it[0] ?></td>
	                    <td><?= $it[1] ?></td>
	            	</tr>
	        <?php endforeach ?>
		<?php endif ?>

		
	</table>

</body>
</html>