<?php
    include 'init.php';

    $email = post('email');
    $senha = post('senha');
    $users = file('users.csv');

    foreach($users as $user) {
        $userData = explode(',', $user);
        if (trim($userData[1]) == $email && trim($userData[2]) == md5($senha)) {
            login($userData[0], $userData[2]);
            break;
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (is_logged()): ?>
        <?=header('location: index.php');?>
    <?php else: ?>
        Login ou senha incorreto. <a href="login.php">Clique para voltar</a>
    <?php endif ?>
</body>
</html>