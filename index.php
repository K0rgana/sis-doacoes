<?php include 'init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> - Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
     
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

            <a href="logout.php">sair</a>

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

            <a href="login.php">Login/Cadastro</a>
        <?php endif ?>

    </table>    
    









</body>
</html>