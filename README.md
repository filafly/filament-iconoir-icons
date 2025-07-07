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

> **Note:** This package automatically installs the required `filafly/filament-icons` base package.

After the package is installed, you must register the plugin in your Filament Panel provider:

```php
use Filafly\Icons\Iconoir\IconoirIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            IconoirIcons::make(),
        ]);
}
```

## Icon Styles

Iconoir icons come in multiple styles that you can switch between. Available styles include:

- Regular (default)
- Solid

You can change the style using the following methods:

```php
IconoirIcons::make()->regular(); // (default)
IconoirIcons::make()->solid();
```

## Override Specific Icons
If you need to override certain icons to use a different style, you can use either icon aliases or direct icon names.

### Using Icon Aliases
Use the `overrideStyleForAlias` method with a [Filament Icon Alias](https://filamentphp.com/docs/3.x/support/icons#available-icon-aliases). This method works with either a single icon key (string) or multiple icon keys (array).

```php
// Override a single icon key
IconoirIcons::make()->overrideStyleForAlias('tables::actions.filter', 'solid');

// Override multiple icon keys at once
IconoirIcons::make()->overrideStyleForAlias([
    'tables::actions.filter',
    'actions::delete-action',
], 'solid');
```

### Using Icon Names
Use the `overrideStyleForIcon` method with the actual Iconoir icon name. Like the alias method, this works with either a single icon name or multiple names.

```php
// Override a single icon
IconoirIcons::make()->overrideStyleForIcon('iconoir-user', 'solid');

// Override multiple icons at once
IconoirIcons::make()->overrideStyleForIcon([
    'iconoir-search',
    'iconoir-filter',
], 'solid');
```

## License
The MIT License (MIT). Please see [License](LICENSE.md) for more information.