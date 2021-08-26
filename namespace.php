<?php
require 'Sobre1.php';
require 'Sobre2.php';

$sobre = new \aplicacao\v1\Sobre();
$sobre1 = new \aplicacao\v2\Sobre();

echo "Versao: ".$sobre->getVersao()."<br/>"."Versao: ".$sobre1->getVersao();

?>