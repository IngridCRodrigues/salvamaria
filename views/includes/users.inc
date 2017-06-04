<div class="top-bar">	
	<a href="new-certese.php" class="btn add">Adicionar Certidão</a>
	<a href="new-report.php" class="btn add">Adicionar Relatório de Serviço</a>
	<a href="dailys.php" class="btn add">Ver diário</a>
</div>

<form class="gt-form small" action="../controllers/user_controller.php<?php Prints::it($user, 'id', 'get/id');  ?>" method="POST">

<label for="processo">Processo:</label>
<input id="processo" type="text" name="processo" value="<?php if($user) if($user) echo $user->processo; ?>">

<label for="nome">Nome:</label>
<input id="nome" type="text" name="nome" value="<?php if($user) echo $user->nome; ?>">

<label for="rua">Rua:</label>
<input id="rua" type="text" name="rua" value="<?php if($user) echo $user->rua; ?>">

<label for="bairro">Bairro:</label>
<input id="bairro" type="text" name="bairro" value="<?php if($user) echo $user->bairro; ?>">

<label for="numero">Numero:</label>
<input id="numero" type="text" name="numero" value="<?php if($user) echo $user->numero; ?>">

<label for="cidade">Cidade:</label>
<input id="cidade" type="text" name="cidade" value="<?php if($user) echo $user->cidade; ?>">

<label for="complemento">Complemento:</label>
<input id="complemento" type="text" name="complemento" value="<?php if($user) echo $user->complemento; ?>">

<label for="endereco_visita">Endereco_visita:</label>
<input id="endereco_visita" type="text" name="endereco_visita" value="<?php if($user) echo $user->endereco_visita; ?>">

<label for="ponto_referencia">Ponto_referencia:</label>
<input id="ponto_referencia" type="text" name="ponto_referencia" value="<?php if($user) echo $user->ponto_referencia; ?>">

<label for="telefone">Telefone:</label>
<input id="telefone" type="text" name="telefone" value="<?php if($user) echo $user->telefone; ?>">

<label for="turno_visita">Turno_visita:</label>
<input id="turno_visita" type="text" name="turno_visita" value="<?php if($user) echo $user->turno_visita; ?>">

<label for="estado_civil">Estado_civil:</label>
<input id="estado_civil" type="text" name="estado_civil" value="<?php if($user) echo $user->estado_civil; ?>">

<label for="filhos">Filhos:</label>
<input id="filhos" type="text" name="filhos" value="<?php if($user) echo $user->filhos; ?>">

<label for="filhos_com_agressor">Filhos_com_agressor: </label>
<input id="filhos_com_agressor" type="text" name="filhos_com_agressor" value="<?php if($user) echo $user->filhos_com_agressor; ?>">

<label for="escolaridade">Escolaridade:</label>
<input id="escolaridade" type="text" name="escolaridade" value="<?php if($user) echo $user->escolaridade; ?>">

<label for="etnia">Etnia:</label>
<input id="etnia" type="text" name="etnia" value="<?php if($user) echo $user->etnia; ?>">	

<label for="idade">Idade:</label>
<input id="idade" type="number" name="idade" value="<?php if($user) echo $user->idade; ?>">

<label for="religiao">Religiao:</label>
<input id="religiao" type="text" name="religiao" value="<?php if($user) echo $user->religiao; ?>">

<label for="profissao">Profissao:</label>
<input id="profissao" type="text" name="profissao" value="<?php if($user) echo $user->profissao; ?>">

<label for="trabalha">Trabalha:</label>
<input id="trabalha" type="text" name="trabalha" value="<?php if($user) echo $user->trabalha; ?>">

<label for="ultimo_emprego">Ultimo_emprego:</label>
<input id="ultimo_emprego" type="text" name="ultimo_emprego" value="<?php if($user) echo $user->ultimo_emprego; ?>">

<label for="local_trabalho">Local_trabalho:</label>
<input id="local_trabalho" type="text" name="local_trabalho" value="<?php if($user) echo $user->local_trabalho; ?>">

<label for="renda">Renda:</label>
<input id="renda" type="text" name="renda" value="<?php if($user) echo $user->renda; ?>">

<label for="responsavel_sustento">Responsavel_sustento:</label>
<input id="responsavel_sustento" type="text" name="responsavel_sustento" value="<?php if($user) echo $user->responsavel_sustento; ?>"> 

<button name="action" type="submit" value="store" class="btn sucess">Salvar</button>
</form>
