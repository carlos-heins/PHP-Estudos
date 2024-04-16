<?php 

namespace Projeto\Banco\Model;

class CPF {
    private string $cpf;
    
    public function __construct(string $cpf) {
        $this->cpf = $cpf;
    }

    public function recuperaCpf()  {
        return $this->cpf;
    }
}