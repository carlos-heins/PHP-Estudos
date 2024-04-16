<?php
spl_autoload_register(function (string $nomeCompletoDaClasse) {
    // Projeto\Banco\Model\Endereco
    $caminhoArquivo = str_replace('Projeto\\Banco',  'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\',  DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php'; // src/Model/Endereco.php
    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});