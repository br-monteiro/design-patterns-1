<?php

require_once '../autoload.php';

$orcamento = new Orcamento;
$calcDesconto = new CalculadoraDesconto();

$orcamento->setItens(new Item("Tijolo", 250));
$orcamento->setItens(new Item("Cimento", 250));

echo $calcDesconto->desconto($orcamento);
