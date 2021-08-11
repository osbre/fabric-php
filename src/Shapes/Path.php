<?php

namespace Osbre\Fabric\Shapes;

use Osbre\Fabric\Validators\PathStructureValidator;

class Path extends FabricObject
{
    /** @var array[]|null */
    #[PathStructureValidator]
    public ?array $path;
}
