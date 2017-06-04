<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['events']; ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.inc'); ?>
    <title>Eventos</title>
</head>
<body class="panel">
    <?php include('includes/header-admin.inc'); ?>
<section>
    <div class="top-bar">
    <h1>Próximos eventos</h1>
    <a href="new-event.php" class="btn sucess">Adicionar Evento</a>
    </div>
    <table class="gt-table striped hovered">
        <thead>
            <tr>    
                <th>Evento</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>Festa1</td>
                <td>Desdesdesdes desd</td>
                <td>12/12/1212</td>
                <td>
                    <a href="" class="action  clean">Editar</a>
                    <a href="" class="action danger clean">Excluir</a>
                    <a href="" class="action  clean">Ver confirmações</a>
                </td>
            </tr>
        </tbody>
    </table>
</section>
</body>
<script type="text/javascript" src="../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</html>