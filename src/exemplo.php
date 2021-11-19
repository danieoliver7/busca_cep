<?php

require '..\vendor/autoload.php';

use Brasil\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('11740000');

print_r($resultado);