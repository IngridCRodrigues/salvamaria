<?php
    require_once('../heart/controller/base.php');
    require_once('../models/certese.php');
    class Certese_controller extends \Controller\Base {
        public $fillneeded = ['tipo' => 'tipo', 'data' => 'data', 'depoimento_usuaria' => 'depoimento_usuaria', 'depoimento_agressor' => 'depoimento_agressor', 'grau_risco' => 'grau_risco'];
        public $location = '../views/certeses.php';
    }
    $obj = new Certese_controller();
    $certeses = $obj->loadAll();
    $certese = $obj->one();
?>