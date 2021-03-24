<!DOCTYPE html>
<html>
<head>

	<title>Lista de usuários</title>

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
		<div class="list-group">
        <button type="button" class="list-group-item list-group-item-action active">
            Usuários
        </button>
			<?php foreach ($users as $user) : ?>
                <button type="button" class="list-group-item list-group-item-action"><?php echo $user['name']; ?></button>
			<?php endforeach; ?>
        <div class="text-left">
            <a class="btn btn-primary" href="http://localhost:8080/teste/hello.php" role="button">Tabela de usuários</a>
        </div>
	</div>
</body>
</html>