<?php require_once('../heart/pulse.php'); ?>
<?php $contexts = ['certeses']; ?>
<?php require_once('../heart/helpers/print.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.inc'); ?>
	<title>Adicionar Evento</title>
</head>
<body class="panel">
	<?php include('includes/header-admin.inc'); ?>
<section>
		<form  class="gt-form" action="#" method="POST">
		<label for="tipo">Publico:</label>
		<select id="tipo" name="tipo">
        	<option value="FISCALIZACAO">Geral</option>
        	<option value="RECUSA">Mulheres negras</option>
        	<option value="RETORNO">Mulheres pobres</option>
        </select>

		<label for="data">Data:</label>
		<input id="data" type="date" name="data">

		<label for="local">Local:</label>
		<input id="local" type="text" name="local">

		<label for="horario">Horário:</label>
		<input id="horario" type="text" name="horario">

		<label for="tema">Tema:</label>
		<input id="tema" type="text" name="tema">

		<label for="depoimento_agressor">Descrição</label>
		<textarea id="depoimento_agressor" name="depoimento_agressor" rows="4">
		</textarea>

		<a href="events.php" class="btn sucess right">Salvar</a>
		</form>
</section>
</body>
<script type="text/javascript" src="../vendors/gainTime-2.1.2/js/gaintime.min.js"></script>
</html>