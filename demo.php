<?php
// This is a simple demo to show how to use the Sabre\VObject library to read a VCF file.

require 'vendor/autoload.php';

use Sabre\VObject\Reader;

$filepath = __DIR__ . '/resources/contacts.vcf';

$vcard = Reader::read(fopen($filepath, 'r'));

echo "FN: ", $vcard->FN, PHP_EOL;
echo "TEL: ", $vcard->TEL, PHP_EOL;
echo "EMAIL: ", $vcard->EMAIL, PHP_EOL;
echo "ORG: ", $vcard->ORG, PHP_EOL;
echo "TITLE: ", $vcard->TITLE, PHP_EOL;
echo "URL: ", $vcard->URL, PHP_EOL;
echo "ADR: ", $vcard->ADR, PHP_EOL;
echo "NOTE: ", $vcard->NOTE, PHP_EOL;
