<?php

declare(strict_types=1);

namespace Ramon\IspPratica;

interface DispositivoInterface
{
    public function tocar(): void;
    public function discar(): void;
}