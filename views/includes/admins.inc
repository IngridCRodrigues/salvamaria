<form class="gt-form small" action="../controllers/admin_controller.php" method="POST">

<label for="matricula">Matricula: </label>
<input type="number" name="matricula" value="<?php if ($admin) echo $admin->matricula;?>">

<label for="senha">Senha: </label>
<input type="password" name="senha">

<label for="nome">Nome: </label>
<input type="text" name="nome" value="<?php if ($admin) echo $admin->nome;?>">

<button name="action" type="submit" value="store" class="btn sucess">Salvar</button>
</form>