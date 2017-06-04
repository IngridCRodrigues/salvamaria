<?php
    require_once('../heart/controller/base.php');
    require_once('../models/user.php');

    class User_controller extends \Controller\Base {
        public $fillneeded = ['processo' => 'processo', 'nome' => 'nome', 'rua' => 'rua', 'bairro' => 'bairro', 'numero' => 'numero', 'cidade' => 'cidade','complemento' => 'complemento','endereco_visita' => 'endereco_visita','ponto_referencia' => 'ponto_referencia','telefone' => 'telefone','turno_visita' => 'turno_visita','estado_civil' => 'estado_civil', 'filhos' => 'filhos', 'filhos_com_agressor' => 'filhos_com_agressor', 'escolaridade' => 'escolaridade', 'etnia' => 'etnia', 'idade' => 'idade', 'religiao' => 'religiao', 'profissao' => 'profissao', 'trabalha' => 'trabalha', 'ultimo_emprego' => 'ultimo_emprego', 'local_trabalho' => 'local_trabalho', 'renda' => 'renda', 'responsavel_sustento' => 'responsavel_sustento'];
        public $location = '../views/users';

    }
    
    $obj = new User_controller();
    $users = $obj->loadAll();
    $user = $obj->one();
