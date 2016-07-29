<?php

require_once '../autoload.php';

$orcamento = new Orcamento;
$calcDesconto = new CalculadoraDesconto();

$orcamento->setItens(new Item("Tijolo", 100));
$orcamento->setItens(new Item("Tijolo", 200));
$orcamento->setItens(new Item("Tijolo", 200));
$orcamento->setItens(new Item("Tijolo", 200));
$orcamento->setItens(new Item("Cimento", 250));

echo "<pre>" . $calcDesconto->desconto($orcamento) . "</pre>";
