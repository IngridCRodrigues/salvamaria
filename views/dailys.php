<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['dailys', 'users']; ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.inc'); ?>
    <title>Mulheres</title>
</head>
<body class="panel">
    <?php include('includes/header-admin.inc'); ?>
<section>
    <table class="gt-table striped hovered">
        <thead>
            <tr>    
                <th>Data</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php foreach($dailys as $daily): ?>
            <tr>
                <td><?php Prints::it($daily, 'data'); ?></td>
                <td><?php Prints::it($daily, 'descricao'); ?></td>
                <td>
                    <a class="" href="edit-daily.php<?php Prints::it($daily, 'id', 'get/id');  ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
</body>
</html>