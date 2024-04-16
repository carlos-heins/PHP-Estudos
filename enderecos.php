<?php 
use Projeto\Banco\Model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Macapá', 'Centro', 'Minha Rua', '233');

$umEndereco->cidade = 'New Orleans';
echo $umEndereco->cidade;

echo PHP_EOL;

echo $umEndereco->__toString();