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
    <h1>Índices</h1>
    <div class="btn sucess right">Exportar PDF</div>
    </div>
    <form class="gt-form small">
    <label class="right" for="ano">Escolha o ano:</label>
    <select id="ano" class="right" name="ano">
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</select>
    </select> 

    <label class="right" for="ano">Categoria:</label>         
    <select id="ano" class="right" name="ano">
        <option value="1">Mulheres negras</option>
        <option value="2">Mulheres brancas</option>
        <option value="3">Mulheres pobres</select>
    </select>    

    <label class="right" for="ano">Bairro:</label>
    <select id="ano" class="right" name="ano">
        <option value="1">Barra</option>
        <option value="2">Brotas</option>
        <option value="3">Ribeira</select>
    </select>   
    </div>
    </form>
    <div>
        <p>Gráficos correspondentes:</p>
        <img class="img-graphic" src="../assets/img/grafico.png">
        <p>Gráfico do indice de violência</p>
    </div>
</section>
</body>
<script type="text/javascript" src="../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</html>