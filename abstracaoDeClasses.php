<?php

abstract class Animal {
    private $nome;
    private $idade;
    
    abstract protected function andar();

}

class Cavalo extends Animal {
    private $quantidade_de_patas;
    private $tipo_de_pelo;

    public function andar() {
        
    }
}





?>