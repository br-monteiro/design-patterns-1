<?php

class Desconto5itens implements Desconto
{
    private $nextDesconto;

    public function desconto(Orcamento $orcamento)
    {
        // se a quantidade de itens for maior ou igual a 5
        // então aplica desconto de 10%
        if (count($orcamento->getItens()) >= 5) {
            return $orcamento->getValor() * 0.1; // 10%
        }

        return $this->nextDesconto->desconto($orcamento);
    }

    public function setNextDesconto(Desconto $desconto)
    {
        $this->nextDesconto = $desconto;
    }
}
