<?php
    require_once('../heart/model/base.php');

    class User extends \Model\Base {
        public $fillable = ['processo', 'nome', 'rua', 'bairro', 'numero', 'cidade', 'complemento', 'endereco_visita', 'ponto_referencia', 'telefone', 'turno_visita', 'estado_civil', 'filhos', 'filhos_com_agressor', 'escolaridade', 'etnia', 'idade', 'religiao', 'profissao', 'trabalha', 'ultimo_emprego', 'local_trabalho', 'renda', 'responsavel_sustento' ];
    }
?>
