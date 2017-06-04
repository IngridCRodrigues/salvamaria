<?php require_once('../heart/pulse.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.inc'); ?>
    <title>Admins</title>
</head>
<body class="panel">
    <?php include('includes/header-admin.inc'); ?>
<section>
    <div class="top-bar">
    <h1>PMS</h1>
    <a href="new-admin.php" class="btn sucess">Adicionar PM</a>
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
        <?php foreach($admins as $admin): ?>
            <tr>
                <td><?php Prints::it($admin, 'nome'); ?></td>
                <td><?php Prints::it($admin, 'matricula'); ?></td>
                <td>
                    <a class="action danger clean" href="edit-admin.php<?php Prints::it($admin, 'id', 'get/id');  ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
</body>
<script type="text/javascript" src="../../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</html>