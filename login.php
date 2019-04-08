<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= TITLE ?> - Login</title>
</head>
<body>
	<form action="auth.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Ok">
    </form>

    <a href="index.php">Voltar</a>
</body>
</html>