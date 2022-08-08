<?php

declare(strict_types=1);

namespace Ramon\IspPratica;

use RuntimeException;

class TelefoneComum implements TelefoneComumInterface
{
    
	function tocar(): void 
    {
        echo "Telefone tocando..." . PHP_EOL;
	}
	
	function discar(): void 
    {
        echo "Telefone discando..." . PHP_EOL;
	}
}