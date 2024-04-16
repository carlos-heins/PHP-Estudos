<?php

require_once 'autoload.php';

use Projeto\Banco\Service\ControladorDeBonificacoes;
use Projeto\Banco\Model\CPF;
use Projeto\Banco\Model\Funcionario\{Funcionario, Gerente, Diretor};

$funcionarioCarlos = new Diretor(
    "Carlos de Souza",
    new CPF("000.000.000-00"), 
    "Diretor de Tecnologia", 
    3000
); 
$funcionariaHayra = new Gerente(
    "Hayra K",
    new CPF("111.111.111-11"), 
    "Gerente de Marketing", 
    4000
);
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($funcionarioCarlos);
$controlador->adicionaBonificacao($funcionariaHayra);

echo $controlador->recuperaTotalBonificacoes();