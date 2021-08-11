<?php

namespace Osbre\Fabric\Shapes;

use Osbre\Fabric\Data\Point;

class Polyline extends Text
{
    /** @var Point[]|null */
    public ?array $points;
}
