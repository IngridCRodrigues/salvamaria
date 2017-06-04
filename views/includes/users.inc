<form class="gt-form small" action="../controllers/user_controller.php<?php Prints::it($user, 'id', 'get/id');  ?>" method="POST">

<label for="processo">Processo:</label>
<input id="processo" type="text" name="processo" value="<?php Prints::it('$user', 'processo'); ?>">

<label for="nome">Nome:</label>
<input id="nome" type="text" name="nome" value="<?ph pPrints::it('$user', 'name'); ?>">

<label for="rua">rua:</label>
<input id="rua" type="text" name="rua" value="<?php Prints::it('$user', 'rua'); ?>">

<label for="bairro">bairro:</label>
<input id="bairro" type="text" name="bairro" value="<?php Prints::it('$user', 'bairro'); ?>">

<label for="numero">numero:</label>
<input id="numero" type="text" name="numero" value="<?php Prints::it('$user', 'numero'); ?>">

<label for="cidade">cidade:</label>
<input id="cidade" type="text" name="cidade" value="<?php Prints::it('$user', 'cidade'); ?>">

<label for="complemento">complemento:</label>
<input id="complemento" type="text" name="complemento" value="<?php Prints::it('$user', 'complemento'); ?>">

<label for="endereco_visita">endereco_visita:</label>
<input id="endereco_visita" type="text" name="endereco_visita" value="<?php Prints::it('$user', 'endereco_visita'); ?>">

<label for="ponto_referencia">ponto_referencia:</label>
<input id="ponto_referencia" type="text" name="ponto_referencia" value="<?php Prints::it('$user', 'ponto_referencia'); ?>">

<label for="telefone">telefone:</label>
<input id="telefone" type="text" name="telefone" value="<?php Prints::it('$user', 'telefone'); ?>">

<label for="turno_visita">turno_visita:</label>
<input id="turno_visita" type="text" name="turno_visita" value="<?php Prints::it('$user', 'turno_visita'); ?>">

<label for="estado_civil">estado_civil:</label>
<input id="estado_civil" type="text" name="estado_civil" value="<?php Prints::it('$user', 'estado_civil'); ?>">

<label for="filhos">filhos:</label>
<input id="filhos" type="text" name="filhos" value="<?php Prints::it('$user', 'filhos'); ?>">

<label for="filhos_com_agressor">filhos_com_agressor: </label>
<input id="filhos_com_agressor" type="text" name="filhos_com_agressor" value="<?php Prints::it('$user', 'filhos_com_agressor'); ?>">

<label for="escolaridade">escolaridade:</label>
<input id="escolaridade" type="text" name="escolaridade" value="<?php Prints::it('$user', 'escolaridade'); ?>">

<label for="etnia">etnia:</label>
<input id="etnia" type="text" name="etnia" value="<?php Prints::it('$user', 'etnia'); ?>">	

<label for="idade">idade:</label>
<input id="idade" type="number" name="idade" value="<?php Prints::it('$user', 'idade'); ?>">

<label for="religiao">religiao:</label>
<input id="religiao" type="text" name="religiao" value="<?php Prints::it('$user', 'religiao'); ?>">

<label for="profissao">profissao:</label>
<input id="profissao" type="text" name="profissao" value="<?php Prints::it('$user', 'profissao'); ?>">

<label for="trabalha">trabalha:</label>
<input id="trabalha" type="text" name="trabalha" value="<?php Prints::it('$user', 'trabalha'); ?>">

<label for="ultimo_emprego">ultimo_emprego:</label>
<input id="ultimo_emprego" type="text" name="ultimo_emprego" value="<?php Prints::it('$user', 'ultimo_emprego'); ?>">

<label for="local_trabalho">local_trabalho:</label>
<input id="local_trabalho" type="text" name="local_trabalho" value="<?php Prints::it('$user', 'local_trabalho'); ?>">

<label for="renda">renda:</label>
<input id="renda" type="text" name="renda" value="<?php Prints::it('$user', 'renda'); ?>">

<label for="responsavel_sustento">responsavel_sustento:</label>
<input id="responsavel_sustento" type="text" name="responsavel_sustento" value="<?php Prints::it('$user', 'responsavel_sustento'); ?>"> 

<button name="action" type="submit" value="store" class="btn sucess">Salvar</button>
</form>


<?php var_dump(Prints::it('$user', 'bairro')); ?>