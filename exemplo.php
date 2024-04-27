<?php

namespace DigitalCEP;

require_once "vendor/autoload.php";
require "src/Search.php";

use DigitalCEP\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('01001000');

print_r($resultado);
