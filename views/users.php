<?php require_once('../heart/pulse.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.inc'); ?>
    <title>Mulheres</title>
</head>
<body class="panel">
    <?php include('includes/header-admin.inc'); ?>
<section>
    <div class="top-bar">
    <h1>Mulheres da Ronda</h1>
    <a href="new-user.php" class="btn sucess">Adicionar mulher</a>
    </div>
    <table class="gt-table striped hovered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Bairro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php foreach($users as $user):?>
            <tr>
                <td><?php Prints::it($user, 'nome'); ?></td>
                <td><?php Prints::it($user, 'bairro'); ?></td>
                <td>
                    <a class="" href="edit-user.php<?php Prints::it($user, 'id', 'get/id');  ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
</body>
</html>