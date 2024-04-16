<?php

namespace Projeto\Banco\Service;

use Projeto\Banco\Model\Autenticavel;
use Projeto\Banco\Model\Funcionario\Diretor;

class Autenticador {
    public function tentaLogin(Autenticavel $autenticavel, string $senha):void {
        if($autenticavel->podeAutenticar($senha)) {
            echo "Login Efetuado com sucesso!";
        } else {
            echo "Senha incorreta!";
        }
    }
}