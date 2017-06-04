<?php
    require_once('../heart/model/base.php');

    class Admin extends \Model\Base {
        public $fillable = ['matricula', 'senha', 'nome'];
    }
?>