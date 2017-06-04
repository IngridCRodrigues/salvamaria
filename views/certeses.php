<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['certeses']; ?>
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
    <h1>Diário</h1>
    <a href="new-certese.php" class="btn sucess">Adicionar Certidão</a>
    </div>
    <table class="gt-table striped hovered">
        <thead>
            <tr>    
                <th>Data</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php foreach($certeses as $certese): ?>
            <tr>
                <td><?php Prints::it($certese, 'tipo'); ?></td>
                <td><?php Prints::it($certese, 'data'); ?></td>
                <td>
                    <a class="" href="edit-certese.php<?php Prints::it($certese, 'id', 'get/id');  ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
</body>
</html>