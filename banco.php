<?php

namespace Projeto\Banco;

require_once 'autoload.php';

use Projeto\Banco\Model\{Endereco, CPF};
use Projeto\Banco\Model\Conta\{Titular, Conta, ContaCorrente, ContaPoupanca};

$endereco = new Endereco("Macapá", "Beirol", "Av. Bahia", "123");

$carlos = new Titular(new CPF("000.000.000-00"), "Carlos de Souza", $endereco);
$contaCarlos = new ContaCorrente($carlos);
$contaCarlos->depositar(500);
$contaCarlos->sacar(300);

echo $contaCarlos->recuperaCpfTitular() . PHP_EOL;
echo $contaCarlos->recuperaNomeTitular() . PHP_EOL;
echo $contaCarlos->recuperaSaldo() . PHP_EOL;

$hayra = new Titular(new CPF("111.111.111-11"), "Hayra Frota", $endereco);
$contaHayra = new ContaPoupanca($hayra);
var_dump($contaHayra);
