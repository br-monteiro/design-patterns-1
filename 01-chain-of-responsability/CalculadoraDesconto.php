<?php

class CalculadoraDesconto
{
    public function desconto(Orcamento $orcamento)
    {
        $desconto5itens = new Desconto5itens;
        $desconto500reais = new Desconto500reais;
        $semDesconto = new SemDesconto;

        $desconto5itens->setNextDesconto($desconto500reais);
        $desconto500reais->setNextDesconto($semDesconto);

        return $desconto5itens->desconto($orcamento);
    }
}
