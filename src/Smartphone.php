<?php

declare(strict_types=1);

namespace Ramon\IspPratica;

class Smartphone implements SmartphoneInterface
{
    
	function tocar(): void 
    {
        echo "Telefone tocando..." . PHP_EOL;
	}
	
	function discar(): void 
    {
        echo "Telefone discando..." . PHP_EOL;
	}
	
	function tirarFoto(): void 
    {
        echo "Telefone tirando foto..." . PHP_EOL;
	}

	function conectar3g(): void 
    {
        echo "Telefone conectado a internet..." . PHP_EOL;
	}
}