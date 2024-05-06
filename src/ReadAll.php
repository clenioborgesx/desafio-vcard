<?php

class ReadAll
{
    public function parseVCard(string $filepath): array
    {
        $vCards = [];
        $currentVCard = '';

        // Lê o conteúdo do arquivo
        $lines = file($filepath);

        foreach ($lines as $line) {
            $currentVCard .= $line;

            // Verifica se encontrou o fim de um vCard
            if (trim($line) === 'END:VCARD') {
                // Parseia o vCard atual e o adiciona ao array de vCards
                $vCards[] = \Sabre\VObject\Reader::read($currentVCard);
                $currentVCard = '';
            }
        }

        return $vCards;
    }
}
