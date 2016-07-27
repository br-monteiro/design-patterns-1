<?php

class CalculadoraDesconto
{
    public function desconto(Orcamento $orcamento)
    {
        /**
         * $desconto5itens = new Desconto5itens;
         * $desconto500reais = new Desconto500reais;
         * $semDesconto = new SemDesconto;
         * 
         * $desconto5itens->setNextDesconto($desconto500reais);
         * $desconto500reais->setNextDesconto($semDesconto);
         */

        // array contendo o nome das classes a serem verificadas
        $descontos = [
            // os valores devem ser exatamente como o nome da classe
            "Desconto5itens", "Desconto500reais", "SemDesconto"
        ];
        
        // confere quantas classes existem no array
        $tamanhoArray = count($descontos);
        $arrObj = [];
        
        // percorre o array para instanciar os Objetos
        for ($i = 0; $i < $tamanhoArray; $i++) {
            $arrObj[$i] = new $descontos[$i];
            // se o índice do array for o ultimo
            // então não seta o próximo objeto
            if ($i < ($tamanhoArray - 1)) {
                // seta o próximo objeto
                $arrObj[$i]->setNextDesconto(new $descontos[$i + 1]);
            }
        }

        return $arrObj[0]->desconto($orcamento);
    }
}
