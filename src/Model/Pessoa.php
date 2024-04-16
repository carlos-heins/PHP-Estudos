<?php

namespace Projeto\Banco\Model;
class Pessoa
{
    // serve para que eu consiga usar em outras classes que herdam pessoas mas não fora disso
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    
    protected function validaNomeTitular(string $nomeTitular) {
        if(strlen($nomeTitular) < 0) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit(0);
        }
    }
}
