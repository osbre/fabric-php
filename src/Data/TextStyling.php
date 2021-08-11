<?php

namespace Osbre\Fabric\Data;

final class TextStyling
{
    public ?string $stroke;
    public ?float $strokeWidth;
    public ?string $fill;
    public string $fontFamily;
    public int $fontSize;
    public string | int | null $fontWeight;
    public ?string $fontStyle;
    public ?bool $underline;
    public ?bool $overline;
    public ?bool $linethrough;
    public ?int $deltaY;
    public ?string $textBackgroundColor;
}
