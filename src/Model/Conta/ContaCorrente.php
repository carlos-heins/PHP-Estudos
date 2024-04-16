<?php
namespace Projeto\Banco\Model\Conta;
class ContaCorrente extends Conta{
    private float $saldo;
    
    protected function percentualTarifa(): float
    {
        return 0.05;
    }
    public function transferir(float $valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
}