<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['dailys', 'users']; ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.inc'); ?>
    <title>Mulheres</title>
</head>
<body class="panel">
    <?php include('includes/header-user.inc'); ?>
<section>
    <div class="top-bar">
    <h1>Diário</h1>    
    <a  class="btn sucess">Exportar PDF</a>
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
        <?php foreach($dailys as $daily): ?>
            <tr>
                <td><?php Prints::it($daily, 'data'); ?></td>
                <td><?php Prints::it($daily, 'descricao'); ?></td>
                <td>
                    <a class="action danger clean" href="edit-daily.php<?php Prints::it($daily, 'id', 'get/id');  ?>">Visualisar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
</body>
<script type="text/javascript" src="../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</html>