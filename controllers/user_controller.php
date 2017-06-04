<?php
    require_once('../heart/controller/base.php');
    require_once('../models/user.php');

    class User_controller extends \Controller\Base {

        public $fillneeded = ['nome' => 'nome', 'email' => 'E-mail'];
        public $location = '../views/users';
    }

    $obj = new User_controller();
    $users = $obj->loadAll();
    $user = $obj->one();