<?php
    require_once('../heart/model/base.php');
    class Certese extends \Model\Base {
        public $fillable = ['tipo', 'data', 'depoimento_usuaria', 'depoimento_agressor'];
    }
?>