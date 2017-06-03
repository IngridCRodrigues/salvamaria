<?php
    require_once('../heart/controller/base.php');
    require_once('../models/certeses.php');

    class User_controller extends \Controller\Base {

        public $fillneeded = ['tipo' => 'tipo', 'data' => 'data', 'depoimento_usuaria' => 'depoimento_usuaria', 'depoimento_agressor' => 'depoimento_agressor', 'grau_risco' => 'grau_risco'];
        public $location = '../views/certeses';
    }

    $obj = new Certese_controller();
    $certeses = $obj->loadAll();
    $certese = $obj->one();