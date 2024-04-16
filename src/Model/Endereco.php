<?php

namespace Projeto\Banco\Model;

final class Endereco
{
    use AcessoPropriedades;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function escreveCidade(string $cidade)
    {
        $this->cidade = $cidade;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function escreveBairro(string $bairro)
    {
        $this->bairro = $bairro;
    }

    public function recuperaRua()
    {
        return $this->rua;
    }
    public function escreveRua(string $rua)
    {
        $this->rua = $rua;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }
    public function escreveNumero(string $numero)
    {
        $this->numero = $numero;
    }
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
    public function __set(string $nomeAtributo, $valor)
    {
        // ex: rua -> recuperaRua();
        $metodo = 'escreve' . ucfirst($nomeAtributo);

        return $this->$metodo($valor);
    }
}
