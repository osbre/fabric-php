<?php

namespace Osbre\Fabric;

use Illuminate\Support\Collection;

class FabricObjectCollectionFactory
{
    public static function fromString(string $json): FabricObjectCollection
    {
        return self::fromArray(
            json_decode($json, true)
        );
    }

    public static function fromArray(array $items): FabricObjectCollection
    {
        return Collection::make($items)
            ->map(fn ($item) => match ($item['type']) {
                ObjectType::PATH => new Shapes\Path($item),
                ObjectType::CIRCLE => new Shapes\Circle($item),
                ObjectType::ECLIPSE => new Shapes\Eclipse($item),
                ObjectType::POLYGON => new Shapes\Polygon($item),
                ObjectType::POLYLINE => new Shapes\Polyline($item),
                ObjectType::RECT => new Shapes\Rect($item),
                ObjectType::TEXT => new Shapes\Text($item),
                ObjectType::TEXTBOX => new Shapes\Textbox($item),
                ObjectType::ITEXT => new Shapes\IText($item),
                ObjectType::LINE => new Shapes\Line($item),
                ObjectType::TRIANGLE => new Shapes\Triangle($item),
                default => new Shapes\FabricObject($item),
            })
            ->pipeInto(FabricObjectCollection::class);
    }
}
