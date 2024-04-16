<?php

namespace Projeto\Banco\Service;

use Projeto\Banco\Model\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;
    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }
    public function recuperaTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}
