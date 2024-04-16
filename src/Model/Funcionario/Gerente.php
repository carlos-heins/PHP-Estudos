<?php

namespace Projeto\Banco\Model\Funcionario;

use Projeto\Banco\Model\Autenticavel;
use Projeto\Banco\Model\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}
