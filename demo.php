<?php

require 'src/ReadAll.php'; // Altere o caminho para refletir a estrutura correta de diretórios
require 'vendor/autoload.php'; // Carrega as dependências do Composer

$filepath = __DIR__ . '/resources/contacts.vcf'; 

$reader = new ReadAll();
$vCards = $reader->parseVCard($filepath);

foreach ($vCards as $vCard) {
    // Faça o que desejar com cada objeto VCard
    echo "FN: ", $vCard->FN, PHP_EOL;
    echo "TEL: ", $vCard->TEL, PHP_EOL;
    echo "EMAIL: ", $vCard->EMAIL, PHP_EOL;
    echo "ORG: ", $vCard->ORG, PHP_EOL;
    echo "TITLE: ", $vCard->TITLE, PHP_EOL;
    echo "URL: ", $vCard->URL, PHP_EOL;
    echo "ADR: ", $vCard->ADR, PHP_EOL;
    echo "NOTE: ", $vCard->NOTE, PHP_EOL;

}
