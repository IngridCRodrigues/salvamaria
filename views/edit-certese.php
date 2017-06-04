<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['certeses']; ?>
<?php require_once('../heart/helpers/print.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.inc'); ?>
	<title>Visualizar Certificado</title>
</head>
<body class="panel">
	<?php include('includes/header-admin.inc'); ?>
<section>
		<form  class="gt-form" action="#" method="POST">
		<label for="tipo">Tipo:</label>
		<select id="tipo" name="tipo">
        	<option value="FISCALIZACAO">Fiscalização</option>
        	<option value="RECUSA">Recusa</option>
        	<option value="RETORNO">Retorno</option>
        	<option value="TERMINO">Término</option>
        	<option value="NEGATIVA_ENDERECO">Negativa Endereço</option>
        </select>
		<label for="data">Data:</label>
		<input id="data" type="text" name="data">
		<label for="depoimento_usuaria">Depoimento usuaria:</label>
		<textarea id="depoimento_usuaria" name="depoimento_usuaria"  rows="4"><?php if ($certese) echo $certese->depoimento_usuaria;?>
		</textarea>
		<label for="depoimento_agressor">Depoimento agressor:</label>
		<textarea id="depoimento_agressor" name="depoimento_agressor"  rows="4"><?php if ($certese) echo $certese->depoimento_agressor;?>
		</textarea>
		<label for="grau_risco">Grau de risco:</label>
		<select id="grau_risco">
        	<option value="ALTO">Alto</option>
        	<option value="MEDIO">Médio</option>
        	<option value="BAIXO">Baixo</option>
        </select>
		</form>
</section>
</body>
<script type="text/javascript" src="../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</html>