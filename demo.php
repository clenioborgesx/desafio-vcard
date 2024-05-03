<?php
// This is a simple demo to show how to use the Sabre\VObject library to read a VCF file.

require 'vendor/autoload.php';

use Sabre\VObject\Reader;

$filepath = __DIR__ . '/resources/contacts.vcf';

$vcard = Reader::read(fopen($filepath, 'r'));

echo "FN: " . $vcard->FN . "\n";
echo "TEL: " . $vcard->TEL . "\n";
echo "EMAIL: " . $vcard->EMAIL . "\n";
echo "ORG: " . $vcard->ORG . "\n";
echo "TITLE: " . $vcard->TITLE . "\n";
echo "URL: " . $vcard->URL . "\n";
echo "ADR: " . $vcard->ADR . "\n";
echo "NOTE: " . $vcard->NOTE . "\n";
