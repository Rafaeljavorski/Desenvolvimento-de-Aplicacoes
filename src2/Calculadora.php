<?php

class Calculadora
{

    public $operacao;



    //metodos
    public function __construct($operacao)
    {     
        $this->operacao = $operacao;
    }
    
    
    public function acao()
    {
        $this->operacao->calculo();
       echo"Resultado:" ,  $this->operacao->resultado;

    }


}