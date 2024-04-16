<?php

namespace Projeto\Banco\Model;

interface Autenticavel {
    public function podeAutenticar(string $senha):bool;
}