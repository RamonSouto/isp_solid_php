<?php

declare(strict_types=1);

require_once "./vendor/autoload.php";

use Ramon\IspPratica\DispositivoInterface;
use Ramon\IspPratica\Smartphone;
use Ramon\IspPratica\TelefoneComum;


function discarParaAlguem(DispositivoInterface $dispositivo): void
{
    $dispositivo->tocar();
}

$smartphone = new Smartphone();
$telefoneComum = new TelefoneComum();

discarParaAlguem($smartphone);
discarParaAlguem($telefoneComum);