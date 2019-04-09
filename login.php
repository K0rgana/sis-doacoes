<?php
    include 'init.php';
    
    if (is_logged()) {
        header('location: index.php');
    }
    $inputs = [
        'nome' => 'text',
        'email' => 'text',
        'senha' => 'password',
        'senha2' => 'password',
        'telefone' => 'number',
        'cidade' => 'text',
        'bairro' => 'text',
    ];
    $usuariosFile = file('users.csv');
    $usuarios = [];
    foreach ($usuariosFile as $usuario) {
        $usuarioData = explode(',', $usuario);
        $nome = $usuarioData[0];
        $usuarios[] = $nome; // adiciona o elemento $nome ao final do array $usuarios
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= TITLE ?> - Login/Cadastro de Usuário</title>
</head>
<body>
	<div>
		<h3>Faça login</h3>
		<form action="auth.php" method="POST">
	        <input type="text" name="email" placeholder="Email">
	        <input type="password" name="senha" placeholder="Senha">
	        <input type="submit" value="Ok">
	    </form>
	</div>

	<hr>

    <div>
    	<h3>ou Cadastre-se</h3>
    	<?php if (get('message') !== false): ?>
	        <div class="message">
	            <?= get('message') ?>
	        </div>
    	<?php endif ?>

    <form action="register-logic.php" method="POST">
        <?php foreach ($inputs as $name => $type): ?>
            <input type="<?= $type ?>" name="<?= $name ?>" placeholder="<?= $name ?>" ><br>
        <?php endforeach ?>

        <input type="submit" value="Cadastrar">
    </form>

    </div>

    <a href="index.php">Voltar</a>
</body>
</html>