<?php

class Orcamento
{
    private $valor;
    private $itens;

    public function __construct($valor = 0)
    {
        $this->valor = $valor;
        $this->lista = [];
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setItens(Item $item)
    {
        $this->itens[] = $item;

        // acumula o valor dos itens
        $valor = $this->getValor() + $item->getValor();
        $this->setValor($valor);

    }

    public function getItens()
    {
        return $this->itens;
    }
}
