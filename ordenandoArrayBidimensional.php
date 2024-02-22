<?php
// Aqui temos um array desordenado
$notas = [
    [
        'aluno' => 'Carlos',
        'nota' => 7.5,
    ],
    [
        'aluno' => 'Jessica',
        'nota' => 8,
    ],
    [
        'aluno' => 'Hayra',
        'nota' => 8.9,
    ],
    [
        'aluno' => 'Leandro',
        'nota' => 2,
    ]
];

// Aqui temos a função que vai ser passada para u usort
function ordenaNotas(array $nota1, array $nota2)
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }
    if ($nota1['nota'] < $nota2['nota']) {
        return 1;
    }
    return 0;
}
// Aqui usamos usort que é uma forma de ordenar seguindo as minhas regras
usort($notas, 'ordenaNotas');
var_dump($notas);

// Função que faz a mesma coisa de forma mais fácil
function ordenaNotasFacilitado(array $nota1, array $nota2)
{
    return $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordenaNotasFacilitado');
var_dump($notas)