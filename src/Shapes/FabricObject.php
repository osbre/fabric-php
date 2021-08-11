<?php

namespace Osbre\Fabric\Shapes;

use Osbre\Fabric\Shadow;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

abstract class FabricObject extends DataTransferObject
{
    public string $version;
    public ?string $originX;
    public ?string $originY;

    public float $left;
    public float $top;
    public float $width;
    public float $height;

    public ?string $fill;
    public ?string $stroke;

    public ?float $strokeWidth;

    /** @var int[]|null */
    public ?array $strokeDashArray;

    public ?string $strokeLineCap;
    public ?int $strokeDashOffset;
    public ?string $strokeLineJoin;
    public ?bool $strokeUniform;
    public ?float $strokeMiterLimit;

    public ?float $scaleX;
    public ?float $scaleY;
    public ?float $angle;
    public ?bool $flipX;
    public ?bool $flipY;

    public ?float $opacity;

    #[CastWith(Shadow::class)]
    public ?Shadow $shadow;

    public ?bool $visible;
    public ?string $backgroundColor;
    public ?string $fillRule;

    public ?string $paintFirst;
    public ?string $globalCompositeOperation;

    public ?float $skewX;
    public ?float $skewY;

    public ?array $clipPath;
}