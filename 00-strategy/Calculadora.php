<?php

class Calculadora
{
    public function calcula(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calcula($orcamento);
    }
}
