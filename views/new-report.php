<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['certeses']; ?>
<?php require_once('../heart/helpers/print.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.inc'); ?>
	<title>Adicionar Relatorio</title>
</head>
<body class="panel">
	<?php include('includes/header-admin.inc'); ?>
<section>
		<form  class="gt-form" action="#" method="POST">
		<label for="tipo">Guarnição:</label>
		<select id="tipo" name="tipo">
        	<option value="FISCALIZACAO">Guarnição 1</option>
        	<option value="RECUSA">Guarnição 1</option>
        	<option value="RETORNO">Guarnição 1</option>
        </select>

		<label for="tipo">Viatura:</label>
		<select id="tipo" name="tipo">
        	<option value="FISCALIZACAO">Viatura 1</option>
        	<option value="RECUSA">Viatura 1</option>
        	<option value="RETORNO">Viatura 1</option>
        </select>

		<label for="data">Data:</label>
		<input id="data" type="date" name="data">

		<label for="local">Comandante:</label>
		<input id="local" type="text" name="local">

		<label for="horario">Motorista:</label>
		<input id="horario" type="text" name="horario">

		<label for="tema">Patrulheiro 1:</label>
		<input id="tema" type="text" name="tema">

		<label for="tema">Patrulheiro 2:</label>
		<input id="tema" type="text" name="tema">


		<label for="tema">Patrulheiro 3:</label>
		<input id="tema" type="text" name="tema">


		<label for="depoimento_agressor">Ocorrências</label>
		<textarea id="depoimento_agressor" name="depoimento_agressor" rows="4">
		</textarea>

		<label for="depoimento_agressor">Ocorrências Operacionais</label>
		<textarea id="depoimento_agressor" name="depoimento_agressor" rows="4">
		</textarea>

		<label for="depoimento_agressor">Comunicações</label>
		<textarea id="depoimento_agressor" name="depoimento_agressor" rows="4">
		</textarea>

		<a href="events.php" class="btn sucess right">Gerar código</a>
		</form>
</section>
</body>
<script type="text/javascript" src="../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</html>