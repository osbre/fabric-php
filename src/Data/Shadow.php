<?php

namespace Osbre\Fabric\Data;

use Spatie\DataTransferObject\DataTransferObject;

class Shadow extends DataTransferObject
{
    public ?string $color;
    public ?int $blur;
    public ?float $offsetX;
    public ?float $offsetY;
    public ?bool $nonScaling;
}
