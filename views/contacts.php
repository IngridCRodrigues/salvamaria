<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['dailys', 'users']; ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.inc'); ?>
    <title>Contatos</title>
</head>
<body class="panel">
    <?php include('includes/header-user.inc'); ?>
<section>
    <div class="top-bar">
    <h1>Contatos</h1>
    </div>
    <table class="gt-table striped hovered">
        <thead>
            <tr>    
                <th>Instituição</th>
                <th>Telefone(s)</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>Ronda</td>
                <td>8712-8712</td>
                <td>ronda@gmail.com</td>
            </tr>
        </tbody>
    </table>
</section>
<script type="text/javascript" src="../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</body>
</html>