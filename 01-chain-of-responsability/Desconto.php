<?php

interface Desconto
{
    public function desconto(Orcamento $orcamento);

    public function setNextDesconto(Desconto $desconto);
}
