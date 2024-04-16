<?php
namespace Projeto\Banco\Model\Funcionario;
use Projeto\Banco\Model\Autenticavel;
use Projeto\Banco\Model\Funcionario\Funcionario;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }
    public function podeAutenticar(string $senha):bool {
        return $senha === '1234';
    }
}
