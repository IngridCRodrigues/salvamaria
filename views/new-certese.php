<?php require_once('../heart/pulse.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.inc'); ?>
	<title>Nova certidão</title>
</head>
	<?php include('includes/header-admin.inc'); ?>
<body class="website">
	<section>
	<form  class="gt-form" action="../controllers/certese_controller.php" method="POST">
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
		<textarea id="depoimento_usuaria" name="depoimento_usuaria"  rows="4">
		</textarea>
		<label for="depoimento_agressor">Depoimento agressor:</label>
		<textarea id="depoimento_agressor" name="depoimento_agressor"  rows="4">
		</textarea>
		<label for="grau_risco">Grau de risco:</label>
		<select id="grau_risco">
        	<option value="ALTO">Alto</option>
        	<option value="MEDIO">Médio</option>
        	<option value="BAIXO">Baixo</option>
        </select>
        <button class="btn success" type="submit" name="action" value="store">Finalizar</button>
		</form>
		</section>
	</body>
</html>