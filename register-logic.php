<?php
    include 'init.php';
    $nome = post('nome');
    $email = post('email');
    $senha = post('senha');
    $senha2 = post('senha2');
    $telefone = post('telefone');
    $cidade = post('cidade');
    $bairro = post('bairro');
?>

<?php if ($senha != $senha2): ?>
    <h1>Senhas não conferem; tente novamente</h1>
    <a href="index.php">Voltar</a>
    <?php exit(); ?>
<?php endif ?>

<?php
    $data = juntar([$nome, $email, md5($senha), $telefone, $cidade, $bairro]) . "\n";
    // salva o dado no arquivo csv
    $handle = fopen('users.csv', 'a');
    fwrite($handle, $data);
    header('location: index.php');
?>