<?php

use Projeto\Banco\Model\CPF;
use Projeto\Banco\Model\Funcionario\Diretor;
use Projeto\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João da Silva',
    new CPF('111.233.445.-33'),
    1000
);


$autenticador->tentaLogin($umDiretor, '1234');
