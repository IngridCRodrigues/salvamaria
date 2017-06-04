<?php
    require_once('../heart/controller/base.php');
    require_once('../models/admin.php');

    class Admin_controller extends \Controller\Base {
        public $fillneeded = ['matricula' => 'matricula', 'senha' => 'senha', 'nome' => 'nome'];
        public $location = '../views/admins.php';
    }

    $obj = new Admin_controller();
    $admins = $obj->loadAll();
    $admin = $obj->one();