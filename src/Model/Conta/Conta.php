<?php

namespace Projeto\Banco\Model\Conta;

abstract class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }
    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorSaque;
        }
    }
    abstract protected function percentualTarifa(): float;
    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "O Valor de depósito precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperaNomeTitular()
    {
        return $this->titular->recuperaNome();
    }
    public function recuperaCpfTitular()
    {
        return $this->titular->recuperaCpf();
    }
}
