<?php

namespace Osbre\Fabric;

use Illuminate\Support\Collection;
use Osbre\Fabric\Shapes\FabricObject;

class FabricObjectCollection extends Collection
{
    // For static analyzers to know which type of array this is
    public function offsetGet($key): FabricObject
    {
        return parent::offsetGet($key);
    }
}
