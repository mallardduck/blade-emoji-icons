# A simple way to use emoji as icons.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mallardduck/blade-emoji-icons.svg?style=flat-square)](https://packagist.org/packages/mallardduck/blade-emoji-icons)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mallardduck/blade-emoji-icons/run-tests?label=tests)](https://github.com/mallardduck/blade-emoji-icons/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mallardduck/blade-emoji-icons/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mallardduck/blade-emoji-icons/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mallardduck/blade-emoji-icons.svg?style=flat-square)](https://packagist.org/packages/mallardduck/blade-emoji-icons)

This package enables you to use Emoji as blade components in a similar way to BladeUiKit's Icons.
The main difference is that these are not SVGs, but simple text as all Emoji are.

## A message to Russian 🇷🇺 people

If you currently live in Russia, please read [this message](./ToRussianPeople.md).

## Installation

You can install the package via composer:

```bash
composer require mallardduck/blade-emoji-icons
```

## Usage

```php
<x-emoji-icon::smiling-face class="text-5xl" />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Dan Pock](https://github.com/mallardduck)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
