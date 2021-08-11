<?php

namespace Osbre\Fabric;

class Image extends FabricObject
{
    public string $src;

    public ?float $cropX;
    public ?float $cropY;

    public ?array $filters;
}
