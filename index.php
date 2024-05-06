<?php

require 'src/ReadAll.php'; // Altere o caminho para refletir a estrutura correta de diretórios
require 'vendor/autoload.php'; // Carrega as dependências do Composer

use Sabre\VObject\Reader;

// Caminho para o diretório que contém os arquivos vCard
$directoryPath = __DIR__ . '/resources';

// Criar uma instância da classe ReadAll
$reader = new ReadAll();

// Obter uma lista de todos os arquivos .vcf no diretório
$vcfFiles = glob("$directoryPath/*.vcf");

// Array para armazenar todos os objetos VCard
$vCards = [];

// Iterar sobre cada arquivo .vcf
foreach ($vcfFiles as $vcfFile) {
    // Chamar o método parseVCard para ler o arquivo vCard
    $currentVCards = $reader->parseVCard($vcfFile);
    
    // Adicionar os objetos VCard lidos ao array principal
    $vCards = array_merge($vCards, $currentVCards);
}

// Criar a tabela HTML
$htmlTable = '<table border="1">';
$htmlTable .= '<tr><th>Nome</th><th>Telefone</th><th>Email</th><th>Organização</th><th>Título</th><th>URL</th><th>Endereço</th><th>Nota</th></tr>';

// Iterar sobre cada contato e adicionar uma linha na tabela para cada um
foreach ($vCards as $vCard) {
    // Extrair os dados do VCard
    $nome = isset($vCard->FN) ? $vCard->FN->getValue() : '';
    $telefone = isset($vCard->TEL) ? $vCard->TEL->getValue() : '';
    $email = isset($vCard->EMAIL) ? $vCard->EMAIL->getValue() : '';
    $organizacao = isset($vCard->ORG) ? $vCard->ORG->getValue() : '';
    $titulo = isset($vCard->TITLE) ? $vCard->TITLE->getValue() : '';
    $url = isset($vCard->URL) ? $vCard->URL->getValue() : '';
    $endereco = isset($vCard->ADR) ? $vCard->ADR->getValue() : '';
    $nota = isset($vCard->NOTE) ? $vCard->NOTE->getValue() : '';

    // Adicionar uma linha na tabela com os dados do contato
    $htmlTable .= "<tr><td>$nome</td><td>$telefone</td><td>$email</td><td>$organizacao</td><td>$titulo</td><td>$url</td><td>$endereco</td><td>$nota</td></tr>";
}

// Fechar a tabela HTML
$htmlTable .= '</table>';

// Exibir a tabela HTML
echo $htmlTable;

?>
