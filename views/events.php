<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['events']; ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('includes/head.inc'); ?>
    <title>Eventos</title>
</head>
<body class="panel">
    <?php include('includes/header-user.inc'); ?>
<section>
    <div class="top-bar">
    <h1>Próximos eventos</h1>
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
                <td>Mesa redonda</td>
                <td>Tema: Mulheres negras e a violência contra mulher</td>
                <td>12/12/1212</td>
                <td><a href="#" onclick="alert('Confirmar presença?')" class="">Confirmar presença</a></td>
            </tr>
            <tr>
                <td>Oficina de Tecnologia</td>
                <td>A tecnologia e a mulher</td>
                <td>12/12/1212</td>
                <td><a href="#" onclick="alert('Confirmar presença?')" class="">Confirmar presença</a></td>
            </tr>
        </tbody>
    </table>
</section>
</body>
<script type="text/javascript" src="../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</html>