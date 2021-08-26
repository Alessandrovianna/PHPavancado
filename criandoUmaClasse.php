<?php

class Cachorro {

    public function latir() {
        echo "Au au";
        
    }

}

$lula = new Cachorro();
$lula->latir();

$dudu = new Cachorro();
$dudu->latir();

?>