<?php
    require_once('../heart/controller/base.php');
    require_once('../models/daily.php');

    class Daily_controller extends \Controller\Base {
        public $fillneeded = ['data' => 'data', 'descricao' => 'descricao'];
        public $location = '../views/index-user.php';

    }
   
    $obj = new Daily_controller();
    $dailys = $obj->loadAll();
    $daily = $obj->one();
