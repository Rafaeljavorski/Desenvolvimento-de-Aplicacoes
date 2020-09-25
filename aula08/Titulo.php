<?php

class Titulo
{
    private $tamanho;
    private $cor;
    private $texto;
    
    public function __construct(String $texto,int $tamanho)
    {
        $this->texto = $texto;
        $this->tamanho = $tamanho; 
        $this->imprime();
    }
    private function leTemplate()
    {
        $aquivo = file_get_contents('titulo.htlm');
    }     
    private function atualizaTexto(string $arquivo)
    {
        $arquivoAtualizado = str_replace('#VALOR#',$this->texto,$arquivo);
        return $arquivoAtualizado;
    }
       private function atualizaTamanho(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#TAMANHO#',$this->tamanho,$arquivo);
    }
    private function atualizaTamanho(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#COR#',$this->tamanho,$arquivo);
    }
    private function atualizaCor(string $aquivo)


}