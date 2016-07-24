<?php

require_once '../autoload.php';

// gera um orçamento de R$ 500,00.
$orcamento = new Orcamento(500);
// instacia a calculadora
$calculadora = new Calculadora;

// calcula o CMS
echo $calculadora->calcula($orcamento, new ICMS);
echo '<br />';
// calcula o ISS
echo $calculadora->calcula($orcamento, new ISS);
