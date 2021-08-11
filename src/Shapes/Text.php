<?php

namespace Osbre\Fabric\Shapes;

use Osbre\Fabric\Data\TextStyling;

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

    public ?string $direction;
    /** @var TextStyling[] */
    public ?array $styles;
}
