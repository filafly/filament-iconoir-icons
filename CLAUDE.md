# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview
This is a PHP package that provides Iconoir icon integration for Filament, a Laravel admin panel framework. The package allows replacing all default Filament icons with Iconoir icons and supports multiple icon styles (Regular and Solid).

## Common Development Commands

### Linting and Code Style
```bash
vendor/bin/pint
```
Uses Laravel Pint for PHP code formatting. Run this before committing any PHP changes.

### Development Dependencies
- Install: `composer install`
- Update: `composer update`

### Testing
No test suite is currently configured. When adding tests, update this section with the appropriate test commands.

## Architecture and Code Structure

### Core Components
- **IconoirIcons** (`src/IconoirIcons.php`): Main plugin class extending `IconSet` from the base filament-icons package
- **Iconoir Enum** (`src/Enums/Iconoir.php`): Contains all available Iconoir icon constants (1000+ icons)
- **IconoirStyle Enum** (`src/Enums/IconoirStyle.php`): Defines icon styles (Regular: '', Solid: '-solid')

### Icon Mapping System
The `IconoirIcons` class contains:
- `$iconMap`: Maps Filament icon aliases to Iconoir icons (160+ mappings covering panels, forms, tables, actions, etc.)
- `$forcedStyles`: Array of icons that must use Regular style (1000+ entries)
- Style override methods: `overrideStyleForAlias()` and `overrideStyleForIcon()`

### Package Configuration
- **Namespace**: `Filafly\Icons\Iconoir\`
- **Dependencies**: filafly/filament-icons (base package), andreiio/blade-iconoir, filament/filament
- **Local Development**: Uses path repository for filament-icons base package development

### Icon Style Handling
- Default style: Regular (empty string suffix)
- Solid style: '-solid' suffix appended to icon name
- Many icons are forced to Regular style via `$forcedStyles` array
- Style overrides can be applied per alias or per icon name

## Development Notes
- The Iconoir enum contains partial content (truncated at 50 lines) - it likely contains hundreds of icon cases
- The `$forcedStyles` array suggests many Iconoir icons don't have solid variants
- Icon mappings cover all major Filament UI components (panels, forms, tables, notifications, actions, etc.)
- The package automatically installs the required base package and Blade Iconoir dependency