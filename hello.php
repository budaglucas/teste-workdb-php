<!DOCTYPE html>
<html>
<head>

	<title>Teste workdb</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>
<body>

	<?php

		$url = 'https://jsonplaceholder.typicode.com/users';
		$data = file_get_contents($url); 
		$users = json_decode($data, true);
		?>

		<br/>
		<div class="container">
		<h2>Usuários</h2>
		<table class="table-bordered">
		<tbody>
			<tr>
				<th>ID</th>
				<th class="col text-center">Nome</th>
				<th class="col text-center">Email</th>
				<th class="col text-center">Nível</th>
                <th class="col text-center">Status</th>
			</tr>
			<?php foreach ($users as $user) : ?>
	        <tr>
	            <td> <?php echo $user['id']; ?> </td>
	            <td class="col text-center"> <?php echo $user['name']; ?> </td>
	            <td class="col text-center"><?php echo $user['email']; ?></td>
	            <td class="col text-center"><?php echo (rand(1,2)) ?></td>
                <td class="col text-center"><?php echo (rand(1,2)) ?></td>
                <td class="col text-center"><button type="button" class="btn btn-primary">Atualizar</button></td>
                <td class="col text-center"><button type="button" class="btn btn-danger">Remover</button></td>
	        </tr>
			<?php endforeach; ?>
		</tbody>
	    </table>
        <div class="text-right">
        <a class="btn btn-primary" href="http://localhost:8080/teste/index.php" role="button">Lista de Usuários</a>
        </div>
	</div>
</body>
</html>