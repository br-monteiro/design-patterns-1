<?php

class Desconto500reais implements Desconto
{
    private $nextDesconto;

    public function desconto(Orcamento $orcamento)
    {
        // se o valor do orçamento for maior ou igaul a R$ 500,00
        // então aplica desconto de 5%
        if ($orcamento->getValor() >= 500) {
            return $orcamento->getValor() * 0.05; // 5%
        }

        return $this->nextDesconto->desconto($orcamento);
    }

    public function setNextDesconto(Desconto $desconto)
    {
        $this->nextDesconto = $desconto;
    }
}
