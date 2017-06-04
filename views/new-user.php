<?php require_once('heart/pulse.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Novo usuário</title>
</head>
<body>
<form action="../controllers/user_controller.php" method="POST">
<label for="nome">Nome:</label>
<input id="nome" type="text" name="nome">
<label for="endereco">Endereco:</label>
<input id="endereco" type="text" name="endereco">	
</form>
</body>
</html>