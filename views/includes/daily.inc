<form class="gt-form small" action="../controllers/daily_controller.php<?php Prints::it($daily, 'id', 'get/id');  ?>" method="POST">

<label for="processo">Data:</label>
<input id="processo" type="date" name="data" value="<?php if($daily) echo $daily->data; ?>">

<textarea name="descrição"><?php if($daily) echo $daily->descricao; ?></textarea>

<button class="btn sucess" type="submit" value="store" name="action">Salvar</button>
</form>