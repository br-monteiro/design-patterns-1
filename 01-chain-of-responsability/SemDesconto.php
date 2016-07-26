<?php

class SemDesconto implements Desconto
{
    public function desconto(Orcamento $orcamento)
    {
        return 0;
    }

    public function setNextDesconto(Desconto $desconto){}
}
