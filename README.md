# A package containing various helpers for using fluxui.dev

## Installation

You can install the package via composer:

```bash
composer require mintellity/fluxuihelpers
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="fluxuihelpers-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="fluxuihelpers-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="fluxuihelpers-views"
```

## Usage

```php
exit;
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mintellity GmbH](https://www.mintellity.com/)
- [Tobias Nagel](https://github.com/TobiasNagel01)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
