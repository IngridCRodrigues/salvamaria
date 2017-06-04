<?php
    require_once('../heart/model/base.php');

    class Daily extends \Model\Base {
        public $fillable = ['data', 'descricao'];
    }
?>
