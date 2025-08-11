<p class="filament-hidden" align="center">
    <img src="https://filafly.com/images/filafly-filament-iconoir-icons.jpg" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

# Filament Iconoir Icons

An Iconoir icon set implementation for [Filament Icons](https://github.com/filafly/filament-icons), allowing for instant replacement of all icons used within the Filament framework.

## Installation

You can install the package via composer:

```bash
composer require filafly/filament-iconoir-icons
```

After the package is installed, you must register the plugin in your Filament Panel provider:

```php
use Filafly\Icons\Iconoir\IconoirIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(IconoirIcons::make());
}
```

## Setting the global icon style

Iconoir icons come in multiple styles that you can switch between. Available styles include:

- Regular (default)
- Solid

You can change the style using the following methods:

```php
IconoirIcons::make()->regular(); // (default)
IconoirIcons::make()->solid();
```

## Setting style for a subset of icons

If you need to override certain icons to use a different style, you can use either icon aliases or icon enum cases.

### Using icon aliases
Use the `overrideStyleForAlias` method with a [Filament Icon Alias](https://filamentphp.com/docs/4.x/styling/icons#available-icon-aliases). This method works with either a single icon key (string) or multiple icon keys (array).

```php
use Filafly\Icons\Iconoir\IconoirIcons;
use Filafly\Icons\Iconoir\Enums\IconoirStyle;
use Filament\Tables\View\TablesIconAlias;
use Filament\Actions\View\ActionsIconAlias;

// Override a single icon key
IconoirIcons::make()->overrideStyleForAlias(TablesIconAlias::ACTIONS_FILTER, IconoirStyle::Solid);

// Override multiple icon keys at once
IconoirIcons::make()->overrideStyleForAlias([
    TablesIconAlias::ACTIONS_FILTER,
    ActionsIconAlias::DELETE_ACTION,
], IconoirStyle::Solid);
```

### Using icon enum cases
Use the `overrideStyleForIcon` method with Iconoir enum case(s). Like the alias method, this works with either a single case or an array of cases.

```php
use Filafly\Icons\Iconoir\IconoirIcons;
use Filafly\Icons\Iconoir\Enums\Iconoir;
use Filafly\Icons\Iconoir\Enums\IconoirStyle;

// Override a single icon
IconoirIcons::make()->overrideStyleForIcon(Iconoir::User, IconoirStyle::Solid);

// Override multiple icons at once
IconoirIcons::make()->overrideStyleForIcon([
    Iconoir::Search,
    Iconoir::Filter,
], IconoirStyle::Solid);
```

## Specifying exact icons to use

You can also specify exactly which icon you would like to use in given situations. This can be done via icon aliases or icon enum cases.

### Override icon aliases

Use `overrideAlias()` to change which icon is used for specific Filament icon aliases:

```php
use Filafly\Icons\Iconoir\IconoirIcons;
use Filafly\Icons\Iconoir\Enums\Iconoir;
use Filament\View\PanelsIconAlias;
use Filament\Tables\View\TablesIconAlias;

IconoirIcons::make()
    ->overrideAlias(PanelsIconAlias::SIDEBAR_EXPAND_BUTTON, Iconoir::NavArrowRight)
    ->overrideAlias(TablesIconAlias::ACTIONS_FILTER, Iconoir::Filter);
```

Or use `overrideAliases()` to override multiple aliases at once by passing an array:

```php
use Filafly\Icons\Iconoir\IconoirIcons;
use Filafly\Icons\Iconoir\Enums\Iconoir;
use Filament\View\PanelsIconAlias;
use Filament\Tables\View\TablesIconAlias;

IconoirIcons::make()
    ->overrideAliases([
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Iconoir::NavArrowRight,
        TablesIconAlias::ACTIONS_FILTER => Iconoir::Filter,
    ]);
```

### Override individual icons

Use `overrideIcon()` to replace specific Iconoir icons with different ones:

```php
use Filafly\Icons\Iconoir\IconoirIcons;
use Filafly\Icons\Iconoir\Enums\Iconoir;

IconoirIcons::make()
    ->overrideIcon(Iconoir::Search, Iconoir::SearchEngine)
    ->overrideIcon(Iconoir::Plus, Iconoir::PlusCircle);
```

Or use `overrideIcons()` to override multiple icons at once by passing an array:

```php
use Filafly\Icons\Iconoir\IconoirIcons;
use Filafly\Icons\Iconoir\Enums\Iconoir;

IconoirIcons::make()
    ->overrideIcons([
        Iconoir::Search->value => Iconoir::SearchWindow,
        Iconoir::Plus->value => Iconoir::PlusCircle,
        Iconoir::Edit->value => Iconoir::EditPencil,
    ]);
```
> PHP arrays do not support enums as keys so `->value` is necessary if you want to reference the enum

These methods are useful for fine-tuning the icon set to better fit your application's needs.

## Icon enum
All icons are available through an enum providing convenient usage throughout Filament. For more information, check the [Filament docs](https://filamentphp.com/docs/4.x/styling/icons).

```php
use Filament\Forms\Components\Toggle;
use Filafly\Icons\Iconoir\Enums\Iconoir;

Toggle::make('is_starred')
    ->onIcon(Iconoir::Star)
```

## License
The MIT License (MIT). Please see [License](LICENSE.md) for more information.