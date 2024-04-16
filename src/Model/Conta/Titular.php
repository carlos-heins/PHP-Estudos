<?php

namespace Projeto\Banco\Model\Conta;

use Projeto\Banco\Model\Autenticavel;
use Projeto\Banco\Model\Pessoa;
use Projeto\Banco\Model\Endereco;
use Projeto\Banco\Model\CPF;

class Titular extends  Pessoa implements Autenticavel
{
    private string $nome;
    private Endereco $endereco;


    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
