<?php

namespace Filafly\Icons\Iconoir\Enums;

use Filafly\Icons\Contracts\StyleEnum;

enum IconoirStyle: string implements StyleEnum
{
    case Regular = '';
    case Solid = '-solid';

    public function getStyleName(): string
    {
        return match ($this) {
            self::Regular => 'regular',
            self::Solid => 'solid',
        };
    }

    public function getEnumSuffix(): string
    {
        return match ($this) {
            self::Regular => 'Regular',
            self::Solid => 'Solid',
        };
    }

    public static function getStyleNames(): array
    {
        return ['regular', 'solid'];
    }

    public static function fromStyleName(string $styleName): ?self
    {
        return match (strtolower($styleName)) {
            'regular' => self::Regular,
            'solid' => self::Solid,
            default => null,
        };
    }
}
