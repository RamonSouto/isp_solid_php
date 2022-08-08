<?php

declare(strict_types=1);

namespace Ramon\IspPratica;

interface SmartphoneInterface extends DispositivoInterface
{
    
    public function tirarFoto(): void;
    public function conectar3g(): void;
}