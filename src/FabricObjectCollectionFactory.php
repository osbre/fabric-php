<?php

namespace Osbre\Fabric;

use Illuminate\Support\Collection;
use Osbre\Fabric\Shapes\FabricObject;

class FabricObjectCollectionFactory
{
    public static function fromArray(array $items): FabricObjectCollection
    {
        return Collection::make($items)->map(fn ($item) => match ($item['type']) {
            default => new FabricObject($item),
        })->dd();
    }
}
