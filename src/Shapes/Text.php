<?php

namespace Osbre\Fabric\Shapes;

class Text extends FabricObject
{
    public string $text;

    public int $fontSize;
    public string | int | null $fontWeight;
    public string $fontFamily;
    public ?string $fontStyle;
    public ?int $lineHeight;

    public ?bool $underline;
    public ?bool $overline;
    public ?bool $linethrough;

    public ?string $textAlign;
    public ?string $textBackgroundColor;
    public ?float $charSpacing;

    public ?array $path;
    public ?string $direction;
    public ?array $styles;
}
