<?php 

namespace Projeto\Banco\Model;

trait AcessoPropriedades {
    public function __get(string $nomeAtributo)
    {
        // ex: rua -> recuperaRua();
        $metodo = 'recupera' . ucfirst($nomeAtributo);

        return $this->$metodo();
    }
}