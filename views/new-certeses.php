<?php require_once('heart/pulse.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Novo usuário</title>
</head>
<body>
	<form action="../controllers/user_controller.php" method="POST">
		<label for="tipo">Tipo:</label>
		<select id="tipo">
        	<option value="FISCALIZACAO">FISCALIZACAO</option>
        	<option value="RECUSA">Recusa</option>
        	<option value="RETORNO">Retorno</option>
        	<option value="TERMINO">Término</option>
        	<option value="NEGATIVA_ENDERECO">Negativa End</option>
        </select>
		<label for="data">Data:</label>
		<input id="data" type="date" name="data">
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

        <button type="submit" name="finalizar" value="finalizar">Finalizar</button>
		</form>
	</body>
</html>